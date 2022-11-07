@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{trans('app.slider')}}</div>

                    <div class="card-body">
                        {!! Form::open(['route' => 'sliders.store']) !!}
                        <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
                            {!! Form::label(trans('app.Thumbnail')) !!}
                            {!! Form::text('thumbnail', null, ['class' => 'form-control', 'placeholder' => 'Thumbnail']) !!}
                            @if ($errors->has('thumbnail'))
                                <span class="help-block">{!! $errors->first('thumbnail') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('title')) has-error @endif">
                            {!! Form::label(trans('app.EN_Title')) !!}
                            {!! Form::text('en_title', null, ['class' => 'form-control', 'placeholder' => 'EN_Title']) !!}
                            @if ($errors->has('en_title'))
                                <span class="help-block">{!! $errors->first('en_title') !!}</span>@endif
                        </div>
                               <div class="form-group @if($errors->has('ar_title')) has-error @endif">
                            {!! Form::label(trans('app.AR_Title')) !!}
                            {!! Form::text('ar_title', null, ['class' => 'form-control', 'placeholder' => 'AR_Title']) !!}
                            @if ($errors->has('ar_title'))
                                <span class="help-block">{!! $errors->first('ar_title') !!}</span>@endif
                        </div>
                        <div class="form-group @if($errors->has('en_sub_title')) has-error @endif">
                            {!! Form::label(trans('app.EN_Sub_Title')) !!}
                            {!! Form::text('en_sub_title', null, ['class' => 'form-control', 'placeholder' => 'EN_Sub_Title']) !!}
                            @if ($errors->has('en_sub_title'))
                                <span class="help-block">{!! $errors->first('en_sub_title') !!}</span>@endif
                        </div>
                                  <div class="form-group @if($errors->has('ar_sub_title')) has-error @endif">
                            {!! Form::label(trans('app.AR_Sub_Title')) !!}
                            {!! Form::text('ar_sub_title', null, ['class' => 'form-control', 'placeholder' => 'AR_Sub Title']) !!}
                            @if ($errors->has('ar_sub_title'))
                                <span class="help-block">{!! $errors->first('ar_sub_title') !!}</span>@endif
                        </div>
                      {!! Form::submit(trans('app.cs'),['class' => 'btn btn-sm btn-primary']) !!}
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>


  
@endsection
