<?php

namespace App\Http\Controllers;

use App\Category;
use App\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
       function __construct()
    {
         $this->middleware('permission:cat-list|cat-edit', ['only' => ['index']]);
   
         $this->middleware('permission:cat-edit', ['only' => ['edit','update']]);

    }
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         if(Category::count()>=1){
            return redirect()->back()->with(['error'=>'sliders limit reached']);
        }
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         if(Category::count()>=1){
            return redirect()->back()->with(['error'=>'sliders limit reached']);
        }
        $this->validate($request, [
           	"thumbnail" => ['regex:/^[a-zA-Z0-9-_]+.(?:jpe?g|png|gif)/'],
            'name' => 'required|unique:categories|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
        ],
            [
                'thumbnail.required' => 'Enter thumbnail url',
			   'thumbnail.regex' =>	'The name of the photo must be in the english',
                'name.required' => 'Enter name',
                'name.unique' => 'Category already exist',
            ]);

        $category = new Category();
        $category->thumbnail = $request->thumbnail;
        $category->user_id = Auth::id();
        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->is_published = $request->is_published;
        $category->save();

        Session::flash('message', 'Category created successfully');
        return redirect()->route('categories.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
         return view('admin.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request, [
             	"thumbnail" => ['regex:/^[a-zA-Z0-9-_]+.(?:jpe?g|png|gif)/'],
            'name' => 'required|regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/',
            
        ],
            [
                'thumbnail.required' => 'Enter thumbnail url',
				'thumbnail.regex' =>	'The name of the photo must be in the english',
                'name.required' => 'Enter name',
                'name.unique' => 'Category already exist',
            ]);

        $category->thumbnail = $request->thumbnail;
        $category->user_id = Auth::id();
        $category->name = $request->name;
        $category->slug = str_slug($request->name);
        $category->is_published = $request->is_published;
        $category->save();

        Session::flash('message', 'Category updated successfully');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
         if(Category::count()>=1){
            return redirect()->back()->with(['error'=>'sliders limit reached']);
        }
        $category->delete();

        Session::flash('delete-message', 'Category deleted successfully');
        return redirect()->route('categories.index');
    }
}
