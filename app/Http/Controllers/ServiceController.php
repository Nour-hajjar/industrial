<?php

namespace App\Http\Controllers;

use App\Service;
use App\Directive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;;

class ServiceController extends Controller
{
		       function __construct()
    {
         $this->middleware('permission:directory-list|directory-create|directory-edit|directory-delete', ['only' => ['index','store']]);
         $this->middleware('permission:directory-create', ['only' => ['create','store']]);
         $this->middleware('permission:directory-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:directory-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $services = Service::orderBy('id', 'DESC')->get();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $directives = Directive::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('admin.service.create', compact('directives'));
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
          
             "title" => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
             "title_a" =>['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'],
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

        $service = new  Service();
        $service->user_id = Auth::id();
        $service->title = $request->title;
        $service->title_a = $request->title_a;
        $service->slug = str_slug($request->title);
        $service->location = $request->location;
        $service->location_a = $request->location_a;
        $service->mobile = $request->mobile;
        $service->fax = $request->fax;
        $service->manager = $request->manager;
        $service->manager_a = $request->manager_a;
        $service->save();

        $service->directives()->sync($request->directive_id, false);
       
        Session::flash('message', 'service created successfully');
        return redirect()->route('services.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
      return view('admin.service.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
       $directives = Directive::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('admin.service.edit', compact('directives', 'service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
    $this->validate($request, [
          
             "title" => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
             "title_a" =>['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'],
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

        $service->user_id = Auth::id();
        $service->thumbnail = $request->thumbnail;
        $service->title = $request->title;
        $service->slug = str_slug($request->title);
        $service->sub_title = $request->sub_title;
        $service->details = $request->details;
        $service->is_published = $request->is_published;
        $service->save();

        $service->directives()->sync($request->directive_id);

        Session::flash('message', 'service updated successfully');
        return redirect()->route('services.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service)
    {
       $service->delete();

        Session::flash('delete-message', 'service deleted successfully');
        return redirect()->route('services.index');
    }
}
