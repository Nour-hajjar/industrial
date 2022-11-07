@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb" style="margin-top: 5%">
        <div class="pull-left">
            <h2 style="text-align: center;">{{trans('app.Information')}} </h2>
        </div>

    </div>
</div>
<table class="table" style="width: 90%;margin:5%;margin-top: 2%">   
  <tbody class="thead-light">
    <tr>
      <th scope="row" style="width:20%">{{trans('app.Names')}}</th>
      <td>{{ $complaint->name}}</td>
    </tr>
      <tr>
      <th scope="row">{{trans('app.Email')}}</th>
      <td>{{ $complaint->email }}</td>
    </tr>
         <tr>
      <th scope="row">{{trans('app.Departments')}}</th>
      <td>{{$complaint->Departments}}</td>
    </tr>
             <tr>
      <th scope="row">{{trans('app.phone')}}</th>
      <td>{{$complaint->phone}}</td>
    </tr>
             <tr>
      <th scope="row">{{trans('app.subject')}}</th>
      <td>{{$complaint->subject}}</td>
    </tr>
                <tr>
      <th scope="row">{{trans('app.city')}}</th>
      <td>{{$complaint->city}}</td>
    </tr>
             <tr>
      <th scope="row">{{trans('app.first_time')}}</th>
      <td>{{$complaint->first_time}}</td>
    </tr>
                 <tr>
      <th scope="row">{{trans('app.message')}}</th>
      <td>{{$complaint->message}}</td>
    </tr>
                 <tr>
      <th scope="row">{{trans('app.country')}}</th>
      <td>{{$complaint->Country}}</td>
    </tr>
  </tbody>
</table>


<div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <a class="btn btn-primary col-sm-12" href="{{ route('complaints.index') }}">{{trans('app.Back')}} </a>
        </div>
        <div class="col-sm-4"></div>
        </div>
<br> <br>
<div>
<h2 style="text-align: center;">{{trans('app.reply')}}</h2>
</div>
<div class="row">
                <div class="col-lg-10 col-md-12 mx-auto">
                    <div class="page-heading">
 {!! Form::open(['route' => 'complaint.send']) !!}
                <div class="control-group">
     <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.name')}}</label>
                        <input type="text" name="name" class="form-control" placeholder="Name" id="name" required
                               data-validation-required-message="Please enter your name.">
                        <p class="help-block text-danger"></p>
                    </div>
                          <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.ema')}}</label>
                        <input type="email" name="email" class="form-control" placeholder="Email Address" id="email" required
                               data-validation-required-message="Please enter your email address.">
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                              <div class="validate"></div>
                  </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.mess')}}</label>
                        <textarea rows="5" name="message" class="form-control" placeholder="Message" id="message" required
                                  data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                         <div id="success"></div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="send">Send</button>
                </div>
                 {!! Form::close() !!}
         
            </div>
        </div>

@endsection

