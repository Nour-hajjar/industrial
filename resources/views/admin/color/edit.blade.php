@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{trans('app.color') .': '. $color->id }}
                       
            <a class="btn btn-sm btn-primary float-right col-sm-2" href="{{ route('footers.index') }}">{{trans('app.Back')}} </a>
                        
                    </div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

                    <div class="card-body">
                             {!! Form::open(['route' => ['color.update', $color->id], 'method' => 'put']) !!}
                             
                              <div class="column">
       <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
      <input type="color" id="color1" name="color1" value="{{$color->color1}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                          
                                           <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color2" name="color2" value="{{$color->color2}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                              <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color3" name="color3" value="{{$color->color3}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                            <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color4" name="color4" value="{{$color->color4}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>       
                       <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color5" name="color5" value="{{$color->color5}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                       <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color6" name="color6" value="{{$color->color6}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                            <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color7" name="color7" value="{{$color->color7}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                          <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color8" name="color8" value="{{$color->color8}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                              <div class="control-group">
                    <div class="form-group floating-label-form-group">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color9" name="color9" value="{{$color->color9}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                              <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color10" name="color10" value="{{$color->color10}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                    <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color11" name="color11" value="{{$color->color11}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                         <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color12" name="color12" value="{{$color->color12}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color13" name="color13" value="{{$color->color13}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>

                              <div class="column">
              
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color14" name="color14" value="{{$color->color14}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color15" name="color15" value="{{$color->color15}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color16" name="color16" value="{{$color->color16}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color17" name="color17" value="{{$color->color17}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color18" name="color18" value="{{$color->color18}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color19" name="color19" value="{{$color->color19}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color20" name="color20" value="{{$color->color20}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color21" name="color21" value="{{$color->color21}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color22" name="color22" value="{{$color->color22}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color23" name="color23" value="{{$color->color23}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color24" name="color24" value="{{$color->color24}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color25" name="color25" value="{{$color->color25}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                       <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color26" name="color26" value="{{$color->color26}}">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>

            </div>
        
                {!! Form::submit(trans('app.update'),['class' => 'btn btn-sm btn-warning']) !!}
                   
                   <!--      <input type="submit" name="reset" value="reset" class="btn btn-primary float-right " > -->
                          

           
                        {!! Form::close() !!}
                         {!! Form::open(['route' => ['color.reset', $color->id], 'method' => 'post']) !!}
                         {!! Form::submit(trans('app.reset'),['class' => 'btn btn-sm btn-warning']) !!}
                       {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>


@endsection
<style>
    input[type="color"] {
    -webkit-appearance: none;
    border: none;
    width: 40px;
    height: 40px;
    display: block;
}
input[type="color"]::-webkit-color-swatch-wrapper {
    padding: 0;
}
input[type="color"]::-webkit-color-swatch {
    border: none;
}
.column {
  float: left;
  width: 50%;
  padding: 20px;
  height: 1200px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>