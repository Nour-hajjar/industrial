<?php

namespace App\Http\Controllers;

use App\Latest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LatestController extends Controller
{
	     function __construct()
    {
         $this->middleware('permission:latest-list|latest-create|latest-edit|latest-delete', ['only' => ['index','store']]);
         $this->middleware('permission:latest-create', ['only' => ['create','store']]);
         $this->middleware('permission:latest-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:latest-delete', ['only' => ['destroy']]);
    }
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latests = Latest::orderBy('id', 'DESC')->get();
        return view('admin.latest.index', compact('latests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $latest = Latest::orderBy('id', 'DESC')->get();
        return view('admin.latest.create', compact('latest'));
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
            
         'title' =>  ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
          'title_a' => ['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'],     
    
        ],
            [
               
                'title.required' => 'Enter name',
                'title_a.required' => 'Enter name',              
               
            ]
        );
     

        $latest = new  Latest();
        $latest->user_id = Auth::id();
        $latest->title = $request->title;
        $latest->title_a = $request->title_a;
        $latest->save();

      

        Session::flash('message', 'name created successfully');
        return redirect()->route('latests.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Latest  $latest
     * @return \Illuminate\Http\Response
     */
    public function show(Latest $latest)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Latest  $latest
     * @return \Illuminate\Http\Response
     */
    public function edit(Latest $latest)
    {
       return view('admin.latest.edit', compact('latest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Latest  $latest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Latest $latest)
    {
     
 $this->validate($request, [
            
         'title' =>  ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
          'title_a' => ['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'],     
 
        ],
            [
               
                'title.required' => 'Enter name',
                'title_a.required' => 'Enter name',                
               
            ]
        );

        $latest->user_id = Auth::id();
        $latest->title = $request->title;
        $latest->title_a = $request->title_a;
     
        $latest->save();

  
         

        Session::flash('message', 'latest updated successfully');
        return redirect()->route('latests.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Latest  $latest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Latest $latest)
    {
       $latest->delete();

        Session::flash('delete-message', 'latest deleted successfully');
        return redirect()->route('latests.index');
    }
}
