<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Slider;
use App\About;
use App\question;
use App\Footer;
use App\Maillist;
use App\Complaint;
use App\Setting;
use App\Color;
use App\Service;
use App\Directive;
use App\Latest;
use App\Loan;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->limit('3')->get();
        $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->limit('3')->get();
        $pages = Post::orderBy('id', 'DESC')->where('post_type', 'page')->limit('3')->get();
        $sliders = Slider::orderBy('id', 'DESC')->get();
        $abouts = About::orderBy('id', 'DESC')->get();
        $questions = question::orderBy('id', 'DESC')->get();
         $footers = Footer::orderBy('id', 'DESC')->get();
        $maillists = Maillist::orderBy('id', 'DESC')->get();
         $complaints = Complaint::orderBy('id', 'DESC')->get();
         $settings = Setting::orderBy('id', 'DESC')->get();
        $colors = Color::orderBy('id', 'DESC')->get();
		 $directives = Directive::orderBy('id', 'DESC')->get();
        $services = Service::orderBy('id', 'DESC')->get();
		 $latests = Latest::orderBy('id', 'DESC')->get();
		     $loans = Loan::orderBy('id', 'DESC')->get();
        return view('admin.index', compact('categories', 'posts', 'pages','sliders',
            'abouts','questions','footers','maillists','complaints','settings','colors','services','directives','latests','loans'));
    }

}
