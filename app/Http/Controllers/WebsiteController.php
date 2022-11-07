<?php

namespace App\Http\Controllers;

use App\Mail\VisitorContact;
use App\Post;
use App\Category;
use App\Slider;
use App\About;
use App\question;
use App\Footer;
use App\Maillist;
use App\Complaint;
use App\Setting;
use App\Contact;
use App\Service;
use App\Directive;
use App\Latest;
use App\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class WebsiteController extends Controller
{
	
	
    public function index()
        {
	
        $footers = Footer::orderBy('id', 'DESC')->get();
		$latests = Latest::orderBy('id', 'DESC')->get();
        $maillists = Maillist::orderBy('id', 'DESC')->get();
        $complaints = Complaint::orderBy('id', 'DESC')->get();
        $abouts = About::orderBy('id', 'DESC')->get();
        $questions = question::orderBy('id', 'DESC')->where('is_published', '1')->paginate(5);
        $sliders = Slider::orderBy('id', 'DESC')->get();
        $settings = Setting::orderBy('id', 'DESC')->get();
		$directives = Directive::orderBy('name', 'ASC')->get();
        $services = Service::orderBy('title', 'ASC')->get();
		 $loans = Loan::orderBy('id', 'DESC')->where('is_published', '1')->paginate(6);
        $ittr = 0;
        foreach($loans as $loan) {
            if($ittr==0 ){
               $loan->icon='fa-code';
              }elseif ($ittr==1) {
               $loan->icon='fa-camera-retro';
              }elseif ($ittr==2) {
               $loan->icon='fa-wordpress';
              }elseif ($ittr==3){
               $loan->icon='fa-camera-retro';
           }elseif($ittr == 4) {
            $loan->icon = 'fa-bar-chart';
           } elseif($ittr == 5) {
            $loan->icon = 'fa-ticket';
           }
            $ittr++;
        }
         $itr = 0;
        foreach($sliders as $slider) {
            $slider->tab="slider-direction-".($itr);
            $itr++;
        }
        
        $categories = Category::orderBy('name', 'ASC')->where('is_published', '1')->get();
        $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->where('is_published', '1')->paginate(3);
        return view('website.index', compact('posts', 'categories','sliders','abouts',
            'questions','footers','maillists','complaints','settings','services','directives','latests','loans'));
    }
    

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->where('post_type', 'post')->where('is_published', '1')->first();
        if ($post) {
            return view('website.post', compact('post'));
        } else {
            return \Response::view('website.errors.404', array(), 404);
        }
    }
	      public function service($slug)
    {
        $service = Service::where('slug', $slug)->where('is_published', '1')->first();
        if ($service) {
            return view('website.service', compact('service'));
        } else {
            return \Response::view('website.errors.404', array(), 404);
        }
    }
          public function loan($slug)
    {
        $loan = Loan::where('slug', $slug)->where('is_published', '1')->first();
        if ($loan) {
            return view('website.loan', compact('loan'));
        } else {
            return \Response::view('website.errors.404', array(), 404);
        }
    }
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->where('is_published', '1')->first();
        if ($category) {
            $posts = $category->posts()->orderBy('posts.id', 'DESC')->where('is_published', '1')->paginate(8);
            return view('website.category', compact('category', 'posts'));
        } else {
            return \Response::view('website.errors.404', array(), 404);
        }
    }
	        public function directive($slug)
    {
        $directive = Directive::where('slug', $slug)->first();
        if ($directive) {
         $services = $directive->services()->orderBy('services.id', 'DESC')->paginate(8);
           // dd($services);
            return view('website.directive', compact('directive', 'services'));
        } else {
            return \Response::view('website.errors.404', array(), 404);
        }
    }

    public function page($slug)
    {
        $page = Post::where('slug', $slug)->where('post_type', 'page')->where('is_published', '1')->first();
         
        if ($page) {
            return view('website.page', compact('page'));
        } else {
            return \Response::view('website.errors.404', array(), 404);
        }

    }



         public function  slider()
      {
        $slider = Slider::where('thumbnail',$thumbnail)->first(); 
        if ($slider) {
            return view('website.index', compact('slider'));
        } else {
            return \Response::view('website.errors.404', array(), 404);
        }
    }

         public function  about()
            {
        $about = About::where('title',$title)->first(); 
        if ($about) {
            return view('website.index', compact('about'));
        } else {
            return \Response::view('website.errors.404', array(), 404);
        }
    }


            public function  question()
            {
        $question = question::where('title',$title)->first(); 
        if ($question) {
            return view('website.index', compact('question'));
        } else {
            return \Response::view('website.errors.404', array(), 404);
        }

}
  public function  footer()
            {
        $footer = Footer::where('tel',$tel)->first(); 
        if ($footer) {
            return view('website.index', compact('footer'));
        } else {
            return \Response::view('website.errors.404', array(), 404);
        }

}
  public function  setting()
            {
        $setting = Setting::where('name_e',$name_e)->first(); 
        if ($setting) {
            return view('website.index', compact('setting'));
        } else {
            return \Response::view('website.errors.404', array(), 404);
        }

}



    public function showContactForm()
    {
        return view('website.contact');
    }

     public function showMailList(Request $request)
    {
        $maillist = Maillist::where('name',$name)->first(); 
        if ($maillist) {
            return view('website.maillist.create', compact('maillist'));
        } else {
            return \Response::view('website.errors.404', array(), 404);
        }
    }
        public function showComplaint(Request $request)
    {
        $complaint = Complaint::where('name',$name)->first(); 
        if ($complaint) {
            
            return view('website.complaint', compact('complaint'));

        } else {
            return \Response::view('website.errors.404', array(), 404);
        }
    }

    public function submitContactForm(Request $request)
    {
         $this->validate($request, [
 "name" =>['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?0-9]*$/'],
"email" => 'required|email',
"Departments" => 'required|in:Legal Affairs,Contribution to law making,Submit an idea or suggestion,Site Administration,report about link that does not working,Mr Chairman of the Board',
"Country"=>'required|in:AF,AL,DZ,AS,AD,AO,AI,AQ,AG,AR,AM,AW,AU,AT,AZ,BS,BH,BD,BB,BY,BE,BZ,BJ,BM,BT,BO,BA,BW,BV,BR,IO,BN,BG,BF,BI,KH,CM,CA,CV,KY,CF,TD,CL,CN,CX,CC,CO,KM,CG,CD,CK,CR,CI,HR,CU,CY,CZ,DK,DJ,DM,DO,EC,EG,SV,GQ,ER,EE,ET,FK,FO,FJ,FI,FR,GF,PF,TF,GA,GM,GE,DE,GH,GI,GR,GL,GD,GP,GU,GT,GN,GW,GY,HT,HM,VA,HN,HK,HU,IS,IN,ID,IR,IQ,IE,IL,IT,JM,JP,JO,KZ,KE,KI,KP,KR,KW,KG,LA,LV,LB,LS,LR,LY,LI,LT,LU,MO,MK,MG,MW,MY,MV,ML,MT,MH,MQ,MR,MU,YT,MX,FM,MD,MC,MN,MS,MA,MZ,MM,NA,NR,NP,NL,AN,NC,NZ,NI,NE,NG,NU,NF,MP,NO,OM,PK,PW,PS,PA,PG,PY,PE,PH,PN,PL,PT,PR,QA,RE,RO,RU,RW,SH,KN,LC,PM,VC,WS,SM,ST,SA,SN,CS,SC,SL,SG,SK,SI,SB,SO,ZA,GS,ES,LK,SD,SR,SJ,SZ,SE,CH,SY,TW,TJ,TZ,TH,TL,TG,TK,TO,TT,TN,TR,TM,TC,TV,UG,UA,AE,,GB,US,UM,UY,UZ,VU,VE,VN,VG,VI,WF,EH,YE,ZM,
ZW',
"message" =>['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?0-9]*$/'],
   
            ]
        );

	$contact = new Contact();
        $contact->name = request('name');
		$contact->email = request('email');
        $contact->Department = request('Departments');
        $contact->Country = request('Country');
        $contact->message = request('message');
       
		$contact->save();
	  $data = [
            'name' => $request->name,
            'email' => $request->email,
            'Department' => $request->Departments,
            'Country' => $request->Country,
            'message' => $request->message,
        ];

			Mail::to('info@Industrialbank.gov.sy')->queue(new VisitorContact($data));
	
        Session::flash('message', 'Thank you for your email');
		
        return redirect()->route('contact.show');
		
    

    }
	
	


    public function error(){
            return view('website.error');
    }
  public function calc(){
            return view('website.calc');
    }

    public function maintainance(){
            return view('website.maintainance');
    }


   public function get_image($name)
        {

            $file = Storage::exists('galleries/'.$name);

            if($file)
            {
                $file = Storage::download('galleries/'.$name);
                return $file;
            }
            else
            {
                return false;
            }

        }
	   public function branches(){
            return view('website.branches');
    }
	     public function list(){
            return view('website.list');
    }
	    public function help(){
            return view('website.help');
    }
}
