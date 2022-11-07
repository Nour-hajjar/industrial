@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb" style="margin-top: 5%">
        <div class="pull-left">
            <h2 style="text-align: center;">{{trans('app.sett')}}</h2>
        </div>

    </div>
</div>
<table class="table" style="width: 90%;margin:5%;margin-top: 2%">   
  <tbody class="thead-light">
    <tr>
      <th scope="row" style="width:20%">{{trans('app.thh')}}</th>
      <td> {{ $setting->name_a }}</td>
    </tr>
    <tr>
      <th scope="row">{{trans('app.thh')}}</th>
      <td>{{ $setting->name_a_1 }}</td>
    </tr>
    <tr>
      <th scope="row">{{trans('app.thh_a')}}</th>
      <td>{{ $setting->name_e}}</td>
    </tr>    
    <tr>
      <th scope="row">{{trans('app.thh_a')}}</th>
      <td>{{ $setting->name_e_1 }}</td>
    </tr>    
    <tr>
      <th scope="row">{{trans('app.Site_Domain')}}</th>
      <td>  {{ $setting->arrange }}</td>
    </tr>
  <tr>
      <th scope="row">{{trans('app.WebSite_Link')}}</th>
      <td>  {{ $setting->link }}</td>
    </tr>
      <tr>
      <th scope="row">{{trans('app.ema')}}</th>
      <td>  {{ $setting->email }}</td>
    </tr>
  </tbody>
</table>

        <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <a class="btn btn-primary col-sm-12" href="{{ route('settings.index') }}">{{trans('app.Back')}} </a>
        </div>
        <div class="col-sm-4"></div>
        </div>
@endsection