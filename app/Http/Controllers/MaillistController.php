<?php

namespace App\Http\Controllers;

use App\MailList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class MailListController extends Controller
{
        function __construct()
    {
         $this->middleware('permission:maill-list|maill-create', ['only' => ['index']]);
   
         $this->middleware('permission:maill-create', ['only' => ['edit','update']]);

    }
    public function index()
    {
       
         $maillists = MailList::orderBy('id', 'DESC')
        ->select('maillists.id', 'maillists.name', 'maillists.email')
        ->paginate(10);
      
        return view('admin.maillist.index',compact('maillists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('website.maillist.create');
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
               "name" =>    ['required', 'regex:/^([a-zA-Zء-ي]+)(\s[a-zA-Zء-ي]+)*$/'],
               "email" => 'required|unique:maillists|email',
              
        ],
            [
                 'name.required' => 'enter mame',
                 'email.required' => 'Enter Email',
                 'email.unique' => 'email already exist',
             
            ]
        );

        $maillist = new MailList();

        $maillist->name = request('name');
        $maillist->email = request('email');

        $maillist->save();

    Session::flash('message', 'Thank you for your email');
    return redirect('maillist/create');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MailList  $mailList
     * @return \Illuminate\Http\Response
     */
    public function show(MailList $maillist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MailList  $mailList
     * @return \Illuminate\Http\Response
     */
    public function edit(MailList $maillist)
    {
          $maillists = MailList::orderBy('id', 'DESC')
        ->select('maillists.id', 'maillists.name', 'maillists.email');
     
         
          return view('admin.maillist.create', compact('maillist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MailList  $mailList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MailList $maillist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MailList  $mailList
     * @return \Illuminate\Http\Response
     */
    public function destroy(MailList $mailList)
    {
        //
    }
}