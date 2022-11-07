@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb" style="margin-top: 5%">
        <div class="pull-left">
            <h2 style="text-align: center;">{{trans('app.service')}}</h2>
        </div>

    </div>
</div>
<table class="table" style="width: 90%;margin:5%;margin-top: 2%">   
  <tbody class="thead-light">
    <tr>
      <th scope="row" style="width:10%">{{trans('app.Thumbnail')}}</th>
      <td >{{ $loan->thumbnail }}</td>
    </tr>
    <tr>
      <th scope="row">{{trans('app.EN_Title')}}</th>
      <td>{{ $loan->en_title }}</td>
    </tr>
    <tr>
      <th scope="row">{{trans('app.AR_Title')}}</th>
      <td>{{ $loan->ar_title }}</td>
    </tr>    
    <tr>
      <th scope="row">{{trans('app.EN_Sub_Title')}}</th>
      <td>{{ $loan->en_sub_title }}</td>
    </tr>    
    <tr>
      <th scope="row">{{trans('app.AR_Sub_Title')}}</th>
      <td>{{ $loan->ar_sub_title }}</td>
    </tr>
 <tr>
      <th scope="row">{{trans('app.EN_Details')}}</th>
      <td>{!! $loan->en_details !!}</td>
    </tr>
     <tr>
      <th scope="row">{{trans('app.EN_Details')}}</th>
      <td>{!! $loan->en_details !!}</td>
    </tr>
  </tbody>
</table>

        <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <a class="btn btn-primary col-sm-12" href="{{ route('loans.index') }}">{{trans('app.Back')}} </a>
        </div>
        <div class="col-sm-4"></div>
        </div>
@endsection