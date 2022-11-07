<?php

namespace App\Http\Controllers;

use App\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class QuestionController extends Controller
{
     function __construct()
    {
          $this->middleware('permission:qes-list|qes-create|qes-edit|qes-delete', ['only' => ['index','store']]);
         $this->middleware('permission:qes-create', ['only' => ['create','store']]);
         $this->middleware('permission:qes-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:qes-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
       $questions = question::orderBy('id', 'DESC')->get();
        return view('admin.question.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // if(question::count()>=6){
        //     return redirect()->back()->with(['error'=>'questions limit reached']);
        // }
        $question = question::orderBy('id', 'DESC')->get();
        return view('admin.question.create', compact('question'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if(question::count()>=6){
        //     return redirect()->back()->with(['error'=>'questions limit reached']);
        // }
        $this->validate($request, [
           
              "en_title" => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
              "ar_title" =>['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'], 
               "en_details" => 'required',
               "ar_details" => 'required',
       
       
            
        ],
            [
               
                'en_title.required' => 'Enter title',
                'ar_title.required' => 'Enter title',
                'en_details.required' => 'required',
                'ar_details.required' => 'required',
              
             
            ]
        );

        $question = new  question();
        $question->user_id = Auth::id();
        $question->en_title = $request->en_title;
        $question->ar_title = $request->ar_title;
         $question->en_details = $request->en_details;
        $question->ar_details = $request->ar_details;
         $question->is_published = $request->is_published;
        $question->save();

      

        Session::flash('message', 'question created successfully');
        return redirect()->route('questions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(question $question)
    {
             return view('admin.question.show', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(question $question)
    {
      return view('admin.question.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, question $question)
    {
        $this->validate($request, [
            
            'en_title' => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
            'ar_title' => ['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'], 
            'en_details' => 'required',// ignore this id
            'ar_details' => 'required',
        ],
            [
               
                'en_title.required' => 'Enter title',
                 'ar_title.required' => 'Enter title',
                 'en_details.required' => 'Enter details',
                 'ar_details.required' => 'Enter details',
                
               
            ]
        );

        $question->user_id = Auth::id();
        $question->en_title = $request->en_title;
        $question->ar_title = $request->ar_title;
         $question->en_details = $request->en_details;
         $question->ar_details = $request->ar_details;
          $question->is_published = $request->is_published;
        $question->save();

  
         

        Session::flash('message', 'question updated successfully');
        return redirect()->route('questions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(question $question)
    {
        
        //   if(question::count()>=6){
        //     return redirect()->back()->with(['error'=>'questions limit reached']);
        // }
        
        $question->delete();

        Session::flash('delete-message', 'question deleted successfully');
        return redirect()->route('questions.index');
    }
    
    }
