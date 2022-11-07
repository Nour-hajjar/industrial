@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{trans('app.sett')}}</div>

                    <div class="card-body">
                        {!! Form::open(['route' => 'color.store']) !!}

                       
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                          <div class="column">
                          <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color1" name="color1" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                          
                                           <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color2" name="color2" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                              <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color3" name="color3" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                            <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color4" name="color4" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>       
                       <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color5" name="color5" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                       <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color6" name="color6" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                            <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color7" name="color7" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                          <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color8" name="color8" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                              <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color9" name="color9" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                              <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color10" name="color10" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                    <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color11" name="color11" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>

                                         <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color12" name="color12" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color13" name="color13" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>
             <div class="column">
              
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color14" name="color14" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color15" name="color15" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color16" name="color16" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color17" name="color17" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color18" name="color18" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color19" name="color19" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color20" name="color20" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color21" name="color21" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color22" name="color22" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color23" name="color23" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color24" name="color24" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                     <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color25" name="color25" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                                       <div class="control-group">
                    <div class="form-group floating-label-form-group controls">
                        <label>{{trans('app.Choose Color')}}</label>
                    <input type="color" id="color26" name="color26" value="#ff0000">

                        <p class="help-block text-danger"></p>
                    </div>
                </div>

            </div>
        

                        {!! Form::submit(trans('app.cs'),['class' => 'btn btn-sm btn-primary']) !!}
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
    width: 32px;
    height: 32px;
}
input[type="color"]::-webkit-color-swatch-wrapper {
    padding: 0;
}
input[type="color"]::-webkit-color-swatch {
    border: none;
}
</style>