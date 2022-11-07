@extends('layouts.app')

@section('stylesheet')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet"/>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{trans('app.service')}}
					            <a class="btn btn-sm btn-primary float-right col-sm-2" href="{{ route('services.index') }}">{{trans('app.Back')}} </a></div>

                    <div class="card-body">
                        {!! Form::open(['route' => 'services.store']) !!}
                 

                        <div class="form-group @if($errors->has('title')) has-error @endif">
                            {!! Form::label(trans('app.name')) !!}
                            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
                            @if ($errors->has('title'))
                              <span class="help-block " style="color:red;">{!! $errors->first('title') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('title_a')) has-error @endif">
                            {!! Form::label(trans('app.name_a')) !!}
                            {!! Form::text('title_a', null, ['class' => 'form-control', 'placeholder' => 'title_a']) !!}
                            @if ($errors->has('title_a'))
                               <span class="help-block " style="color:red;">{!! $errors->first('title_a') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('location')) has-error @endif">
                            {!! Form::label(trans('app.location')) !!}
                            {!! Form::text('location', null, ['class' => 'form-control', 'placeholder' => 'location']) !!}
                            @if ($errors->has('location'))
                                <span class="help-block " style="color:red;">{!! $errors->first('location') !!}</span>@endif
                        </div>
          <div class="form-group @if($errors->has('location_a')) has-error @endif">
                            {!! Form::label(trans('app.location_a')) !!}
                            {!! Form::text('location_a', null, ['class' => 'form-control', 'placeholder' => 'location_a']) !!}
                            @if ($errors->has('location_a'))
                               <span class="help-block " style="color:red;">{!! $errors->first('location_a') !!}</span>@endif
                        </div>
                 <div class="form-group @if($errors->has('mobile')) has-error @endif">
                            {!! Form::label(trans('app.mobile')) !!}
                            {!! Form::text('mobile', null, ['class' => 'form-control', 'placeholder' => 'mobile']) !!}
                            @if ($errors->has('mobile'))
                                <span class="help-block " style="color:red;">{!! $errors->first('mobile') !!}</span>@endif
                        </div>
                          <div class="form-group @if($errors->has('fax')) has-error @endif">
                            {!! Form::label(trans('app.fax')) !!}
                            {!! Form::text('fax', null, ['class' => 'form-control', 'placeholder' => 'fax']) !!}
                            @if ($errors->has('fax'))
                              <span class="help-block " style="color:red;">{!! $errors->first('fax') !!}</span>@endif
                        </div>
                           <div class="form-group @if($errors->has('manager')) has-error @endif">
                            {!! Form::label(trans('app.manager')) !!}
                            {!! Form::text('manager', null, ['class' => 'form-control', 'manager' => 'manager']) !!}
                            @if ($errors->has('manager'))
                               <span class="help-block " style="color:red;">{!! $errors->first('manager') !!}</span>@endif
                        </div>
                          <div class="form-group @if($errors->has('manager_a')) has-error @endif">
                            {!! Form::label(trans('app.manager_a')) !!}
                            {!! Form::text('manager_a', null, ['class' => 'form-control', 'placeholder' => 'manager_a']) !!}
                            @if ($errors->has('manager_a'))
                               <span class="help-block " style="color:red;">{!! $errors->first('manager_a') !!}</span>@endif
                        </div>


                        <div class="form-group @if($errors->has('directive_id')) has-error @endif">
                            {!! Form::label(trans('app.branches')) !!}
                            {!! Form::select('directive_id[]', $directives, null, ['class' => 'form-control', 'id' => 'directive_id', 'multiple' => 'multiple']) !!}
                            @if ($errors->has('directive_id'))
                                <span class="help-block">{!! $errors->first('directive_id') !!}</span>
                            @endif
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

    <script>
        $(document).ready(function () {
            CKEDITOR.replace('details');

            $('#directive_id').select2({
                placeholder: "Select directives"
            });
        });
    </script>
@endsection
