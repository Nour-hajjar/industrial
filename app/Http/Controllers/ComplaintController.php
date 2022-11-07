<?php

namespace App\Http\Controllers;

use App\Complaint;
use App\Comp_answer;
use App\Http\Controllers\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\complaintform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class ComplaintController extends Controller
{

        function __construct()
    {
         $this->middleware('permission:comp-list|comp-create', ['only' => ['index']]);
   
         $this->middleware('permission:comp-create', ['only' => ['edit','update']]);

    }
    public function index()
    {
        $complaints = Complaint::orderBy('id', 'DESC')
        ->select('complaints.id', 'complaints.name', 'complaints.Departments', 'complaints.Country', 'complaints.email', 'complaints.city', 'complaints.phone','complaints.first_time','complaints.subject','complaints.message')
        ->paginate(10);
     // dd($complaints);
         
        return view('admin.complaint.index',compact('complaints'))->with('allcomplaints', $complaints);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // dd($complaint);
          return view('website.complaint');
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
"name" =>['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?0-9]*$/'],

"Departments" => 'required|in:Legal Affairs,Public relations',

"Country"=>'required|in:AF,AL,DZ,AS,AD,AO,AI,AQ,AG,AR,AM,AW,AU,AT,AZ,BS,BH,BD,BB,BY,BE,BZ,BJ,BM,BT,BO,BA,BW,BV,BR,IO,BN,BG,BF,BI,KH,CM,CA,CV,KY,CF,TD,CL,CN,CX,CC,CO,KM,CG,CD,CK,CR,CI,HR,CU,CY,CZ,DK,DJ,DM,DO,EC,EG,SV,GQ,ER,EE,ET,FK,FO,FJ,FI,FR,GF,PF,TF,GA,GM,GE,DE,GH,GI,GR,GL,GD,GP,GU,GT,GN,GW,GY,HT,HM,VA,HN,HK,HU,IS,IN,ID,IR,IQ,IE,IL,IT,JM,JP,JO,KZ,KE,KI,KP,KR,KW,KG,LA,LV,LB,LS,LR,LY,LI,LT,LU,MO,MK,MG,MW,MY,MV,ML,MT,MH,MQ,MR,MU,YT,MX,FM,MD,MC,MN,MS,MA,MZ,MM,NA,NR,NP,NL,AN,NC,NZ,NI,NE,NG,NU,NF,MP,NO,OM,PK,PW,PS,PA,PG,PY,PE,PH,PN,PL,PT,PR,QA,RE,RO,RU,RW,SH,KN,LC,PM,VC,WS,SM,ST,SA,SN,CS,SC,SL,SG,SK,SI,SB,SO,ZA,GS,ES,LK,SD,SR,SJ,SZ,SE,CH,SY,TW,TJ,TZ,TH,TL,TG,TK,TO,TT,TN,TR,TM,TC,TV,UG,UA,AE,,GB,US,UM,UY,UZ,VU,VE,VN,VG,VI,WF,EH,YE,ZM,
ZW',

"email" => 'required|email',
"first_time" => 'required|in:Yes,No',
"City" =>['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?0-9]*$/'],
"phone" =>"required|numeric",
"Subject" =>['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?0-9]*$/'],
"message" =>['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?0-9]*$/'],
              
        ]
      
        );

        $complaint = new Complaint();

        $complaint->name = request('name');
        $complaint->Departments = request('Departments');
        $complaint->Country = request('Country');
        $complaint->email = request('email');
        $complaint->first_time = request('first_time');
        $complaint->City = request('City');
        $complaint->phone = request('phone');
        $complaint->Subject = request('Subject');
        $complaint->message = request('message');

        $complaint->save();
  Session::flash('message', 'Thank you for your Complaint');

    return redirect('/complaint');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function show(Complaint $complaint)
    {
             return view('admin.complaint.show', compact('complaint'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function edit(Complaint $complaint)
    {
        
              $complaints = Complaint::orderBy('id', 'DESC')->get();
     // dd($complaints);
         
          return view('admin.complaint.create', compact('complaint'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Complaint $complaint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Complaint  $complaint
     * @return \Illuminate\Http\Response
     */
    public function destroy(Complaint $complaint)
    {
        //
    }
         public function send(Request $request)
    {
		$answer = new Comp_answer();
        $answer->name = request('name');
		$answer->email = request('email');
        $answer->message = request('message');
       
		$answer->save();
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

         Mail::to($request->email)->send(new complaintform($data));

        Session::flash('message', 'email has been successfully send');
        return redirect()->route('complaint.send');
    }
}
