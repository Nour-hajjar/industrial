<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class SliderController extends Controller
{
      
    function __construct()
    {
         /*$this->middleware('permission:slider-list|slider-edit', ['only' => ['index']]);
   
         $this->middleware('permission:slider-edit', ['only' => ['edit','update']]);*/

    }
    
    public function index()
    {

        $sliders = Slider::orderBy('id', 'DESC')->get();
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       if(slider::count()>=3){
            return redirect()->back()->with(['error'=>'sliders limit reached']);
        }
        $slider = Slider::orderBy('id', 'DESC')->get();
        return view('admin.slider.create', compact('slider'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if(Slider::count()>=3){
            return redirect()->back()->with(['error'=>'sliders limit reached']);
        }
        $this->validate($request, [
       
            'en_title' =>['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'], 
            'ar_title' =>['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'], 
            'en_sub_title' => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],// ignore this id
             'ar_sub_title' =>['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'], 
       
       
            
        ],
            [
                'thumbnail.required' => 'Enter thumbnail url',
				'thumbnail.regex' =>	'The name of the photo must be in the english',
                'en_title.required' => 'Enter title',
                'ar_title.required' => 'Enter title',
                 "en_sub_title.required" => 'Enter sub title',
                 "ar_sub_title.required" => 'Enter sub title',
              
             
            ]
        );

        $slider = new  Slider();
        $slider->user_id = Auth::id();
        $slider->thumbnail = $request->thumbnail;
        $slider->en_title = $request->en_title;
        $slider->ar_title = $request->ar_title;
        $slider->en_sub_title = $request->en_sub_title;
        $slider->ar_sub_title = $request->ar_sub_title;
        $slider->save();

      

        Session::flash('message', 'slider created successfully');
        return redirect()->route('sliders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
           return view('admin.slider.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
          return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
       
        $this->validate($request, [
            
            'en_title' =>['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'], 
            'ar_title' =>['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'], 
            'en_sub_title' => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],// ignore this id
             'ar_sub_title' =>['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'], 
        ],
            [
                'thumbnail.required' => 'Enter thumbnail url',
			
                'en_title.required' => 'Enter title',
                'ar_title.required' => 'Enter title',
                 'en_sub_title.required' => 'Enter sub title',
                  'ar_sub_title.required' => 'Enter sub title',
                
               
            ]
        );

        $slider->user_id = Auth::id();
        $slider->thumbnail = $request->thumbnail;
        $slider->en_title = $request->en_title;
        $slider->ar_title = $request->ar_title;
         $slider->en_sub_title = $request->en_sub_title;
         $slider->ar_sub_title = $request->ar_sub_title;
        $slider->save();

  
         

        Session::flash('message', 'slider updated successfully');
        return redirect()->route('sliders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
      
          if(slider::count()>=3){
            return redirect()->back()->with(['error'=>'sliders limit reached']);
        }
        
        $slider->delete();

        Session::flash('delete-message', 'slider deleted successfully');
        return redirect()->route('sliders.index');
    }
    
}
