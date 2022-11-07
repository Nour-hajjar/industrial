<?php

namespace App\Http\Controllers;

use App\Footer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FooterController extends Controller
{

        function __construct()
    {
         $this->middleware('permission:footer-list|footer-edit', ['only' => ['index']]);
   
         $this->middleware('permission:footer-edit', ['only' => ['edit','update']]);

    }
    public function index()
    {
         $footers = Footer::orderBy('id', 'DESC')->get();
        return view('admin.footer.index', compact('footers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Footer::count()>=1){
            return redirect()->back()->with(['error'=>'footers limit reached']);
        }
        $footer = Footer::orderBy('id', 'DESC')->get();
        return view('admin.footer.create', compact('footer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Footer::count()>=1){
            return redirect()->back()->with(['error'=>'footers limit reached']);
        }
        $this->validate($request, [
               "tel" => 'required|numeric',
               "email" => 'required|email',
                "fax" => 'required|numeric',
                 "mailbox" => ['required', 'regex:/^([a-zA-Z0-9]+)(\s[a-zA-Z0-9]+)*$/'], 
                "en_location" => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'], 
                "ar_location" =>  ['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'], 
                "en_details" => 'required', 
                 "ar_details" => 'required',  
             
       
       
            
        ],
            [
                 'tel.required' => 'telephone number',
                 'email.required' => 'Enter Email',
                 'fax.required' => 'Enter Fax',
                 'mailbox.required' => 'Enter Fax',
                 'en_location.required' => 'Enter location',
                 'ar_location.required' => 'Enter location',
                 'en_details.required' => 'required',
                 'ar_details.required' => 'required',
         
              
             
            ]
        );

        $footer = new  Footer();
        $footer->user_id = Auth::id();
        $footer->tel = $request->tel;
        $footer->email = $request->email;
        $footer->fax = $request->fax;
        $footer->mailbox = $request->mailbox;
        $footer->en_location = $request->en_location;
        $footer->ar_location = $request->ar_location;
        $footer->en_details = $request->en_details;
        $footer->ar_details = $request->ar_details;
     
        $footer->save();

      

        Session::flash('message', 'footer created successfully');
        return redirect()->route('footers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        return view('admin.footer.show', compact('footer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
       return view('admin.footer.edit', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer)
    {
        
   $this->validate($request, [
            "tel" => 'required|numeric',
               "email" => 'required|email',
                "fax" => 'required|numeric',
                 "mailbox" => ['required', 'regex:/^([a-zA-Z0-9]+)(\s[a-zA-Z0-9]+)*$/'], 
                "en_location" => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'], 
                "ar_location" => ['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'], 
                "en_details" => 'required', 
                 "ar_details" => 'required',  
           
       
       
            
        ],
            [
                 'tel.required' => 'telephone number',
                 'email.required' => 'Enter Email',
                 'fax.required' => 'Enter Fax',
                 'mailbox.required' => 'Enter Fax',
                 'en_location.required' => 'Enter location',
                 'ar_location.required' => 'Enter location',
                 'en_details.required' => 'required',
                 'ar_details.required' => 'required',
                 
               
            ]
        );

        $footer->user_id = Auth::id();
        $footer->tel = $request->tel;
        $footer->email = $request->email;
        $footer->fax = $request->fax;
        $footer->mailbox = $request->mailbox;
        $footer->en_location = $request->en_location;
        $footer->ar_location = $request->ar_location;
        $footer->en_details = $request->en_details;
        $footer->ar_details = $request->ar_details;
        
        $footer->save();

  
         

        Session::flash('message', 'footer updated successfully');
        return redirect()->route('footers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
         if(Footer::count()>=1){
            return redirect()->back()->with(['error'=>'footers limit reached']);
        }
        
        $footer->delete();

        Session::flash('delete-message', 'footer deleted successfully');
        return redirect()->route('footers.index');
    }
}
