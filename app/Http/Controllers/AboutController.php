<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
        function __construct()
    {
        $this->middleware('permission:about-list|about-edit', ['only' => ['index','store']]);
   
         $this->middleware('permission:about-edit', ['only' => ['edit','update']]);

    }

    public function index()
    {
        $abouts = About::orderBy('id', 'DESC')->get();
        return view('admin.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if(About::count()>=1){
            return redirect()->back()->with(['error'=>'abouts limit reached']);
        }
        $about = About::orderBy('id', 'DESC')->get();
        return view('admin.about.create', compact('about'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if(About::count()>=1){
            return redirect()->back()->with(['error'=>'abouts limit reached']);
        }
        $this->validate($request, [
            
              "en_title" => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'], 
               "ar_title" =>  ['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'],
               "en_details" => 'required', 
       
       
            
        ],
            [
                'thumbnail.required' => 'Enter thumbnail url',
		
                'en_title.required' => 'Enter title',
                'ar_title.required' => 'Enter title',
                 "en_details" => 'Enter about details',
                  "ar_details" => 'Enter about details',
              
             
            ]
        );

        $about = new  About();
        $about->user_id = Auth::id();
        $about->thumbnail = $request->thumbnail;
        $about->en_title = $request->en_title;
         $about->ar_title = $request->ar_title;
        $about->en_details = $request->en_details;
        $about->ar_details = $request->ar_details;
        $about->save();

      

        Session::flash('message', 'about created successfully');
        return redirect()->route('abouts.index');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        return view('admin.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
      return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
   // dd($request->thumbnail);
         $this->validate($request, [
  
			"thumbnail" => ['regex:/^[a-zA-Z0-9-_]+.(?:jpe?g|png|gif)/'],
            'en_title' =>['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],  
             'ar_title' => ['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'],
            'en_details' => 'required',  
             'ar_details' => 'required',// ignore this id
        ],
            [
                'thumbnail.required' => 'Enter thumbnail url',
				'thumbnail.regex' =>	'The name of the photo must be in the english',
                'en_title.required' => 'Enter title',
                'ar_title.required' => 'Enter title',
                 'en_details.required' => 'Enter about details',
                 'ar_details.required' => 'Enter about details',
                
               
            ]
        );

        $about->user_id = Auth::id();
        $about->thumbnail = $request->thumbnail;
        $about->en_title = $request->en_title;
        $about->ar_title = $request->ar_title;
        $about->en_details = $request->en_details;
        $about->ar_details = $request->ar_details;
        $about->save();

  
         

        Session::flash('message', 'about updated successfully');
        return redirect()->route('abouts.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
      
          if(About::count()>=1){
            return redirect()->back()->with(['error'=>'abouts limit reached']);
        }
        
        $about->delete();

        Session::flash('delete-message', 'about deleted successfully');
        return redirect()->route('abouts.index');
    }
    }

