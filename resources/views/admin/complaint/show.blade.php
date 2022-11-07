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
@endsection