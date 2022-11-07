<?php

namespace App\Http\Controllers;

use App\Loan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $loans = Loan::orderBy('id', 'DESC')->get();
        return view('admin.loan.index', compact('loans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $loan = Loan::orderBy('id', 'DESC')->get();
        return view('admin.loan.create', compact('loan'));
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
            //"thumbnail" => 'required|regex:/^((\/)(?:[-a-z0-9]+\.)*[-a-z0-9]+.*)$/',
            'en_title' =>['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'], 
            'ar_title' =>['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'], 
            'en_sub_title' => ['required', 'regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],// ignore this id
             'ar_sub_title' =>['required', 'regex:/^[^`~!@#$%^&*()_+={}\[\]|\\:;“’<,>.?]*$/'], 
       
       
            
        ],
            [
                'thumbnail.required' => 'Enter thumbnail url',
                'en_title.required' => 'Enter title',
                'ar_title.required' => 'Enter title',
                 "en_sub_title.required" => 'Enter sub title',
                 "ar_sub_title.required" => 'Enter sub title',
              
             
            ]
        );

        $loan = new  Loan();
        $loan->user_id = Auth::id();
        $loan->thumbnail = $request->thumbnail;
        $loan->en_title = $request->en_title;
        $loan->ar_title = $request->ar_title;
        $loan->slug = str_slug($request->en_title);
        $loan->en_sub_title = $request->en_sub_title;
        $loan->ar_sub_title = $request->ar_sub_title;
        $loan->en_details = $request->en_details;
        $loan->ar_details = $request->ar_details;
        $loan->save();

      

        Session::flash('message', 'slider created successfully');
        return redirect()->route('loans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function show(Loan $loan)
    {
         return view('admin.loan.show', compact('loan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function edit(Loan $loan)
    {
          return view('admin.loan.edit', compact('loan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loan $loan)
    {
        $this->validate($request, [
             // "thumbnail" => 'required|regex:/^((\/)(?:[-a-z0-9]+\.)*[-a-z0-9]+.*)$/',
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

        $loan->user_id = Auth::id();
        $loan->thumbnail = $request->thumbnail;
        $loan->en_title = $request->en_title;
        $loan->ar_title = $request->ar_title;
        $loan->slug = str_slug($request->en_title);
        $loan->en_sub_title = $request->en_sub_title;
        $loan->ar_sub_title = $request->ar_sub_title;
        $loan->en_details = $request->en_details;
        $loan->ar_details = $request->ar_details;
        $loan->save();

  
         

        Session::flash('message', 'loans updated successfully');
        return redirect()->route('loans.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loan  $loan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loan $loan)
    {
           $loan->delete();

        Session::flash('delete-message', 'loan deleted successfully');
        return redirect()->route('loans.index');
    }
}
