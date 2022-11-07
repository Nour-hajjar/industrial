@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb" style="margin-top: 5%">
        <div class="pull-left">
            <h2 style="text-align: center;"> {{trans('app.service')}}</h2>
        </div>

    </div>
</div>
<table class="table" style="width: 90%;margin:5%;margin-top: 2%">   
  <tbody class="thead-light">
    <tr>
      <th scope="row" style="width:10%">{{trans('app.name')}}</th>
      <td>{{ $service->title }}</td>
    </tr>
      <tr>
      <th scope="row" style="width:10%">{{trans('app.name_a')}}</th>
      <td>{{ $service->title_a }}</td>
    </tr>
    <tr>
      <th scope="row">{{trans('app.location')}}</th>
      <td>{{ $service->location }}</td>
    </tr>
    <tr>
      <th scope="row">{{trans('app.location_a')}}</th>
      <td>{{ $service->location_a}}</td>
    </tr>
    <tr>
      <th scope="row">{{trans('app.mobile')}}</th>
      <td>{{ $service->mobile }}</td>
    </tr>    
    <tr>
      <th scope="row">{{trans('app.fax')}}</th>
      <td>{{ $service->fax }}</td>
    </tr>    
    <tr>
      <th scope="row">{{trans('app.manager')}}</th>
      <td>{{ $service->manager }}</td>
    </tr>
   <tr>
      <th scope="row">{{trans('app.manager_a')}}</th>
      <td>{{ $service->manager_a }}</td>
    </tr>
  </tbody>
</table>

        <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <a class="btn btn-primary col-sm-12" href="{{ route('services.index') }}">{{trans('app.Back')}} </a>
        </div>
        <div class="col-sm-4"></div>
        </div>
@endsection