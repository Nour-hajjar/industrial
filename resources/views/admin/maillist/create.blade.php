@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb" style="margin-top: 5%">
        <div class="pull-left">
            <h2 style="text-align: center;">{{trans('app.Info')}} </h2>
        </div>

    </div>
</div>
<table class="table" style="width: 90%;margin:5%;margin-top: 2%">   
  <tbody class="thead-light">
    <tr>
      <th scope="row" style="width:20%">{{trans('app.N')}}</th>
      <td>{{ $maillist->name }}</td>
    </tr>
    <tr>
      <th scope="row">{{trans('app.E')}}</th>
      <td>{{ $maillist->email }}</td>
    </tr>
  </tbody>
</table>

        <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <a class="btn btn-primary col-sm-12" href="{{ route('maillists.index') }}">{{trans('app.Back')}} </a>
        </div>
        <div class="col-sm-4"></div>
        </div>
@endsection