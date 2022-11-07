<?php

namespace App\Http\Controllers;

use App\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ColorController extends Controller
{
        function __construct()
    {
         $this->middleware('permission:color-list|color-edit', ['only' => ['index']]);
   
         $this->middleware('permission:color-edit', ['only' => ['edit','update']]);

    }
    public function index()
    {
        
         //$colors = Color::orderBy('id', 'DESC')->where('user_id', '1')->get();
         $colors = Color::orderBy('id', 'DESC')->get();
        return view('admin.color.index', compact('colors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        if(Color::count()>=1){
            return redirect()->back()->with(['error'=>'Colors limit reached']);
        }
        $color = Color::orderBy('id', 'DESC')->get();
        // dd($color);
        return view('admin.color.create', compact('color'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        if(Color::count()>=1){
            return redirect()->back()->with(['error'=>'color limit reached']);
        }
        $this->validate($request, [

                "color1" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color2" =>  ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color3" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color4" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color5" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'], 
                "color6" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color7" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color8" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color9" =>  ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'], 
                "color10" =>  ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color11" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color12" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'] ,   
                "color13" =>  ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'], 
                "color14" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color15" =>  ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color16" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'], 
                "color17" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'], 
                "color18" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color19" =>  ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color20" =>  ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],  
                "color21" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'], 
                "color22" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'], 
                "color23" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color24" =>  ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'], 
                "color25" =>  ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'], 
                "color26" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],

       
       
            
        ],
            [
                 'color1.required' => 'Enter color',
                 'color2.required' => 'Enter color',
                 'color3.required' => 'Enter color',
                 'color4.required' => 'Enter color',
                 'color5.required' => 'Enter color',
                 'color6.required' => 'Enter color',
                 'color7.required' => 'required',
                 'color8.required' => 'required',
                 'color9.required' => 'required',
                 'color10.required' => 'required', 
                 'color11.required' => 'required',  
                 'color12.required' => 'required',
                 'color13.required' => 'required',
                 'color14.required' => 'required',
                 'color15.required' => 'required',
                 'color16.required' => 'required',
                 'color17.required' => 'required',
                 'color18.required' => 'required',
                 'color19.required' => 'required',
                 'color20.required' => 'required',
                 'color21.required' => 'required',
                 'color22.required' => 'required',
                 'color23.required' => 'required',
                 'color24.required' => 'required',
                 'color25.required' => 'required',
                 'color26.required' => 'required',

              
             
            ]
        );

        $color = new  Color();
        $color->user_id = Auth::id();
        $color->color1 = $request->color1;
        $color->color2 = $request->color2;
        $color->color3 = $request->color3;
        $color->color4 = $request->color4;
        $color->color5 = $request->color5;
        $color->color6 = $request->color6;
        $color->color7 = $request->color7;
        $color->color8 = $request->color8;
        $color->color9 = $request->color9;
        $color->color10 = $request->color10;
        $color->color11 = $request->color11;
        $color->color12 = $request->color12;
        $color->color13 = $request->color13;
        $color->color14 = $request->color14;
        $color->color15 = $request->color15;
        $color->color16 = $request->color16;
        $color->color17 = $request->color17;
        $color->color18 = $request->color18;
        $color->color19 = $request->color19;
        $color->color20 = $request->color20;
        $color->color21 = $request->color21;
        $color->color22 = $request->color22;
        $color->color23 = $request->color23;
        $color->color24 = $request->color24;
        $color->color25 = $request->color25;
        $color->color26 = $request->color26;

        $color->save();

      

        Session::flash('message', 'color created successfully');
        return redirect()->route('color.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function show(Color $color)
    {
        return view('admin.color.show', compact('color'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function edit(Color $color)
    {
        return view('admin.color.edit', compact('color'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Color $color)
    {
   $this->validate($request, [
    
                "color1" =>  ['required','regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color2" =>  ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color3" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color4" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color5" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'], 
                "color6" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color7" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color8" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color9" =>  ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'], 
                "color10" =>  ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color11" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color12" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'] ,   
                "color13" =>  ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'], 
                "color14" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color15" =>  ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color16" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'], 
                "color17" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'], 
                "color18" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color19" =>  ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
                "color20" =>  ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],  
                "color21" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'], 
                "color22" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'], 
 "color23" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
"color24" =>  ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'], 
 "color25" =>  ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'], 
"color26" => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],

       
       
        ],
            [
                'color1.required' => 'Enter color',
                 'color2.required' => 'Enter color',
                 'color3.required' => 'Enter color',
                 'color4.required' => 'Enter Fax',
                 'color5.required' => 'Enter color',
                 'color6.required' => 'Enter color',
                 'color7.required' => 'Enter color',
                 'color8.required' => 'Enter color',
                 'color9.required' => 'Enter color',
                 'color10.required' => 'Enter color', 
                 'color11.required' => 'Enter color', 
                 'color12.required' => 'Enter color',
                 'color13.required' => 'Enter color',
                 'color14.required' => 'Enter color',
                 'color15.required' => 'Enter color',
                 'color16.required' => 'Enter color',
                 'color17.required' => 'Enter color',
                 'color18.required' => 'Enter color',
                 'color19.required' => 'Enter color',
                 'color20.required' => 'Enter color',
                 'color21.required' => 'Enter color',
                 'color22.required' => 'Enter color',
                 'color23.required' => 'Enter color',
                 'color24.required' => 'Enter color',
                 'color25.required' => 'Enter color',
                 'color26.required' => 'Enter color', 
                
               
            ]
        );

                    
      
        $color->user_id = Auth::id();
        $color->color1 = $request->color1;
        $color->color2 = $request->color2;
        $color->color3 = $request->color3;
        $color->color4 = $request->color4;
        $color->color5 = $request->color5;
        $color->color6 = $request->color6;
        $color->color7 = $request->color7;
        $color->color8 = $request->color8;
        $color->color9 = $request->color9;
        $color->color10 = $request->color10;
        $color->color11 = $request->color11;
        $color->color12 = $request->color12;
        $color->color13 = $request->color13;
        $color->color14 = $request->color14;
        $color->color15 = $request->color15;
        $color->color16 = $request->color16;
        $color->color17 = $request->color17;
        $color->color18 = $request->color18;
        $color->color19 = $request->color19;
        $color->color20 = $request->color20;
        $color->color21 = $request->color21;
        $color->color22 = $request->color22;
        $color->color23 = $request->color23;
        $color->color24 = $request->color24;
        $color->color25 = $request->color25;
        $color->color26 = $request->color26;
        $color->save();


  
         

        Session::flash('message', 'Color updated successfully');
        return redirect()->route('color.index');
    }

     public function reset( $id)
    {  
       $color = Color::findOrFail($id);

       $color->user_id = Auth::id();
        $color->color1 ='#3EC1D5';
        $color->color2 ='#fff';
        $color->color3 ='#444';
        $color->color4 ='#f9f9f9';
        $color->color5 ='#ddd';
        $color->color6 ='#ccc';
        $color->color7 ='#42414f';
        $color->color8 ='#e5e5e5';
        $color->color9 =' #545454';
        $color->color10 = '#333';
        $color->color11 ='#000' ;
        $color->color12 = '#165a64';
        $color->color13 ='#fafefe' ;
        $color->color14 = '#3c3c3c';
        $color->color15 = '#666';
        $color->color16 = '#ed3c0d';
        $color->color17 = '#18d26e';
        $color->color18 = '#eee';
        $color->color19 = '#343a40';
        $color->color20 = '#363636';
        $color->color21 = '#e8e8e9';
        $color->color22 = '#777';
        $color->color23 = '#909295';
        $color->color24 = '#222';
        $color->color25 = '#f1f1f1';
        $color->color26 = '#f5f5f5';
         $color->update();
        

     return redirect()->route('color.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function destroy(Color $color)
    {
         if(Color::count()>=1){
            return redirect()->back()->with(['error'=>'colors limit reached']);
        }
        $color->delete();

        Session::flash('delete-message', 'Post deleted successfully');
        return redirect()->route('color.index');
    }
   
}
