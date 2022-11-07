@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb" style="margin-top: 5%">
        <div class="pull-left">
            <h2 style="text-align: center;">{{trans('app.color')}}</h2>
        </div>

    </div>
</div>
<table class="table" style="width: 90%;margin:5%;margin-top: 2%">   
  <tbody class="thead-light">
    <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color1" value="{{$color->color1}}"></td>
    </tr>
    <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color2" value="{{$color->color2}}"></td>
    </tr>
    <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color3" value="{{$color->color3}}"></td>
    </tr>   
    <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color4" value="{{$color->color4}}"></td>
    </tr>   
      <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color5" value="{{$color->color5}}"></td>
    </tr>
    <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color6" value="{{$color->color6}}"></td>
    </tr>
     <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color7" value="{{$color->color7}}"></td>
    </tr>
        <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color8" value="{{$color->color8}}"></td>
    </tr>
        <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color9" value="{{$color->color9}}"></td>
    </tr>
        <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color10" value="{{$color->color10}}"></td>
    </tr>
        <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color11" value="{{$color->color11}}"></td>
    </tr>
        <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color12" value="{{$color->color12}}"></td>
    </tr>
        <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color13" value="{{$color->color13}}"></td>
    </tr>
        <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color14" value="{{$color->color14}}"></td>
    </tr>
        <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color15" value="{{$color->color15}}"></td>
    </tr>
        <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color16" value="{{$color->color16}}"></td>
    </tr>
        <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color17" value="{{$color->color17}}"></td>
    </tr>
        <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color18" value="{{$color->color18}}"></td>
    </tr>
        <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color19" value="{{$color->color19}}"></td>
    </tr>
        <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color20" value="{{$color->color20}}"></td>
    </tr>
        <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color21" value="{{$color->color21}}"></td>
    </tr>
        <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color22" value="{{$color->color22}}"></td>
    </tr>
        <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color23" value="{{$color->color23}}"></td>
    </tr>
        <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color24" value="{{$color->color24}}"></td>
    </tr>
        <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color25" value="{{$color->color25}}"></td>
    </tr>
        <tr>
      <th scope="row" style="width:20%">{{trans('app.color')}}</th>
      <td> <input type="color" id="color1" name="color26" value="{{$color->color26}}"></td>
    </tr>

  </tbody>
</table>

        <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <a class="btn btn-primary col-sm-12" href="{{ route('color.index') }}">{{trans('app.Back')}} </a>
        </div>
        <div class="col-sm-4"></div>
        </div>
@endsection