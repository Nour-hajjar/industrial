<?php

namespace App\Http\Controllers;

use App\Directive;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DirectiveController extends Controller
{
	       function __construct()
    {
         $this->middleware('permission:branche-list|branche-create|branche-edit|branche-delete', ['only' => ['index','store']]);
         $this->middleware('permission:branche-create', ['only' => ['create','store']]);
         $this->middleware('permission:branche-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:branche-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $directives = Directive::orderBy('id', 'DESC')->get();
        return view('admin.directive.index', compact('directives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.directive.create');
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
          
             "name" => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
             "name_a" =>['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'],
             "location" => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
             "location_a" => ['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'],
			 "fax" => 'required|numeric',
             "mobile" =>'required|numeric',
             "manager" =>['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
             "manager_a" => ['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'],
        ],
            [
                'name.required' => 'Enter thumbnail url',
                'name_a.required' => 'Enter title',
                'location.unique' => 'Title already exist',
                 'location_a.required' => 'Enter title',
                'fax.unique' => 'Title already exist',
                'mobile.required' => 'Enter details',
                 'manager.required' => 'Enter details',
            ]
        );


        $directive = new Directive();
        $directive->user_id = Auth::id();
        $directive->name = $request->name;
        $directive->name_a = $request->name_a;
        $directive->slug = str_slug($request->name);
        $directive->location = $request->location;
        $directive->location_a = $request->location_a;
        $directive->fax = $request->fax;
        $directive->mobile = $request->mobile;
        $directive->manager = $request->manager;
        $directive->manager_a = $request->manager_a;
        $directive->save();

        Session::flash('message', 'directive created successfully');
        return redirect()->route('directives.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Directive  $directive
     * @return \Illuminate\Http\Response
     */
    public function show(Directive $directive)
    {
        return view('admin.directive.show', compact('directive'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Directive  $directive
     * @return \Illuminate\Http\Response
     */
    public function edit(Directive $directive)
    {
     return view('admin.directive.edit', compact('directive'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Directive  $directive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Directive $directive)
    {
         $this->validate($request, [
          
             "name" => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
             "name_a" =>['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'],
             "location" => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
             "location_a" => ['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'],
			 "fax" => 'required|numeric',
             "mobile" =>'required|numeric',
             "manager" =>['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
             "manager_a" => ['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'],
        ],
            [
                'name.required' => 'Enter thumbnail url',
                'name_a.required' => 'Enter title',
                'location.unique' => 'Title already exist',
                 'location_a.required' => 'Enter title',
                'fax.unique' => 'Title already exist',
                'mobile.required' => 'Enter details',
                 'manager.required' => 'Enter details',
            ]
        );
        $directive->user_id = Auth::id();
        $directive->name = $request->name;
        $directive->name_a = $request->name_a;
        $directive->slug = str_slug($request->name);
        $directive->location = $request->location;
        $directive->location_a = $request->location_a;
        $directive->fax = $request->fax;
        $directive->mobile = $request->mobile;
        $directive->manager = $request->manager;
        $directive->manager_a = $request->manager_a;
        $directive->save();

        Session::flash('message', 'directive updated successfully');
        return redirect()->route('directives.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Directive  $directive
     * @return \Illuminate\Http\Response
     */
    public function destroy(Directive $directive)
    {
       $directive->delete();

        Session::flash('delete-message', 'directive deleted successfully');
        return redirect()->route('directives.index');
    }
}
