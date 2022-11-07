<?php

namespace App\Http\Controllers;

use App\Post;
use App\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PageController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:page-list|page-create|page-edit|page-delete', ['only' => ['index','store']]);
         $this->middleware('permission:page-create', ['only' => ['create','store']]);
         $this->middleware('permission:page-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:page-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $pages = Post::orderBy('id', 'DESC')->where('post_type', 'page')->get();
        return view('admin.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
             	"thumbnail" => ['regex:/^[a-zA-Z0-9-_]+.(?:jpe?g|png|gif)/'],
             "en_title" => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
             "ar_title" =>['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'],
             "en_details" => "required",
             "ar_details" => "required",
        ],
            [
                'thumbnail.required' => 'Enter thumbnail url',
				'thumbnail.regex' =>	'The name of the photo must be in the english',
                'en_title.required' => 'Enter title',
                'en_title.unique' => 'Title already exist',
                 'ar_title.required' => 'Enter title',
                'ar_title.unique' => 'Title already exist',
                'en_details.required' => 'Enter details',
                 'ar_details.required' => 'Enter details',
            ]
        );

        $page = new  Post();
        $page->user_id = Auth::id();
        $page->thumbnail = $request->thumbnail;
        $page->en_title = $request->en_title;
        $page->ar_title = $request->ar_title;
        $page->slug = str_slug($request->en_title);
        $page->en_sub_title = $request->en_sub_title;
        $page->ar_sub_title = $request->ar_sub_title;
        $page->en_details = $request->en_details;
        $page->ar_details = $request->ar_details;
        $page->is_published = $request->is_published;
        $page->post_type = 'page';
        $page->save();





        Session::flash('message', 'Page created successfully');
        return redirect()->route('pages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $page = Post::findOrFail($id);
         return view('admin/page/show', compact('page'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Post::findOrFail($id);
        return view('admin/page/edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
           	"thumbnail" => ['regex:/^[a-zA-Z0-9-_]+.(?:jpe?g|png|gif)/'],
            'en_title' =>  ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
            'ar_title' => ['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'],
            'en_details' => 'required',
            'ar_details' => 'required',
        ],
            [
                'thumbnail.required' => 'Enter thumbnail url',
				'thumbnail.regex' =>	'The name of the photo must be in the english',
                'en_title.required' => 'Enter title',
                'en_title.unique' => 'Title already exist',
                 'ar_title.required' => 'Enter title',
                'ar_title.unique' => 'Title already exist',
                'en_details.required' => 'Enter details',
                'ar_details.required' => 'Enter details',
            ]
        );
       
        $page = Post::findOrFail($id);
        $page->user_id = Auth::id();
        $page->thumbnail = $request->thumbnail;
        $page->en_title = $request->en_title;
        $page->ar_title = $request->ar_title;
        $page->slug = str_slug($request->en_title);
        $page->en_sub_title = $request->en_sub_title;
        $page->ar_sub_title = $request->ar_sub_title;
        $page->en_details = $request->en_details;
        $page->ar_details = $request->ar_details;
        $page->is_published = $request->is_published;
        $page->save();

        Session::flash('message', 'Page updated successfully');
        return redirect()->route('pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Post::findOrFail($id);
        
        $page->delete();

        Session::flash('delete-message', 'Page deleted successfully');
        return redirect()->route('pages.index');
    }
}
