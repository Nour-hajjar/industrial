<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
         function __construct()
    {
         $this->middleware('permission:sett-list|sett-edit', ['only' => ['index']]);
   
         $this->middleware('permission:sett-edit', ['only' => ['edit','update']]);

    }
    public function index()
    {
        $settings = Setting::orderBy('id', 'DESC')->get();
        return view('admin.setting.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            if(Setting::count()>=1){
            return redirect()->back()->with(['error'=>'settings limit reached']);
        }
        $setting = Setting::orderBy('id', 'DESC')->get();
        return view('admin.setting.create', compact('setting'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             if(Setting::count()>=1){
            return redirect()->back()->with(['error'=>'settings limit reached']);
        }
        $this->validate($request, [
           
              "name_a" =>['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'], 
              "name_a_1" =>['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'],  
              "name_e" => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'], 
              "name_e_1" => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'], 
               "arrange" => 'required|url',
               "link" => 'required|url',
               "email" => 'required|email',
              
       
       
            
        ],
            [
               
                'name_a.required' => 'Enter name',
                'name_a_1.required' => 'Enter name',
                 'name_e.required' => 'Enter name',
                 'name_e_1.required' => 'Enter name',
                'arrange.required' => 'web site domain',
                 'link.required' => 'website url',
                  'email.required' => 'Enter email',
                
              
             
            ]
        );

        $setting = new  Setting();
        $setting->user_id = Auth::id();
        $setting->name_a = $request->name_a;
        $setting->name_a_1 = $request->name_a_1;
        $setting->name_e = $request->name_e;
        $setting->name_e_1 = $request->name_e_1;
        $setting->arrange = $request->arrange;
        $setting->link = $request->link;
        $setting->email = $request->email;
        $setting->save();

      

        Session::flash('message', 'name created successfully');
        return redirect()->route('settings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
         return view('admin.setting.show', compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        return view('admin.setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $this->validate($request, [
            
           "name_a" =>['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'], 
              "name_a_1" =>['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'],   
            'name_e' => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],  
            'name_e_1' =>['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'], 
            'arrange' => 'required|url',
            'link' => 'required|url', 
            'email' => 'required|email', 
         // ignore this id
        ],
            [
               
                'name_a.required' => 'Enter name',
                'name_a_1.required' => 'Enter name',
                'name_e.required' => 'Enter name',
                'name_e_1.required' => 'Enter name',
                'arrange.required' => 'Enter arrange',
                'link.required' => 'Enter link',
                'email.required' => 'Enter email',
            
                
               
            ]
        );


        $setting->user_id = Auth::id();
        $setting->name_a = $request->name_a;
         $setting->name_a_1 = $request->name_a_1;
         $setting->name_e = $request->name_e;
          $setting->name_e_1 = $request->name_e_1;
        $setting->arrange = $request->arrange;
        $setting->link = $request->link;
        $setting->email = $request->email;
      
        $setting->save();

  
         

        Session::flash('message', 'setting updated successfully');
        return redirect()->route('settings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        if(Setting::count()>=1){
            return redirect()->back()->with(['error'=>'settings limit reached']);
        }
        
        $setting->delete();

        Session::flash('delete-message', 'setting deleted successfully');
        return redirect()->route('settings.index');
    }
    
}
