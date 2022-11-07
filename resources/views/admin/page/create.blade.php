@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{trans('app.page') .': ' }}
                       
            <a class="btn btn-sm btn-primary float-right col-sm-2" href="{{ route('pages.index') }}">{{trans('app.Back')}} </a>
                        
                    </div>
             
                    <div class="card-body">
                        {!! Form::open(['route' => 'pages.store']) !!}
                        <div class="box-body">
                            <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
                                {!! Form::label(trans('app.Thumbnail')) !!}
                                {!! Form::text('thumbnail', null, ['class' => 'form-control', 'placeholder' => 'Thumbnail']) !!}
                                @if ($errors->has('thumbnail'))
                                   <span class="help-block " style="color:red;">{!! $errors->first('thumbnail') !!}</span>@endif
                            </div>

                            <div class="form-group @if($errors->has('en_title')) has-error @endif">
                                {!! Form::label(trans('app.EN_Title')) !!}
                                {!! Form::text('en_title', null, ['class' => 'form-control', 'placeholder' => 'EN_Title']) !!}
                                @if ($errors->has('en_title'))
                                    <span class="help-block " style="color:red;">{!! $errors->first('en_title') !!}</span>@endif
                            </div>
                                   <div class="form-group @if($errors->has('ar_title')) has-error @endif">
                                {!! Form::label(trans('app.AR_Title')) !!}
                                {!! Form::text('ar_title', null, ['class' => 'form-control', 'placeholder' => 'AR_Title']) !!}
                                @if ($errors->has('ar_title'))
                                   <span class="help-block " style="color:red;">{!! $errors->first('ar_title') !!}</span>@endif
                            </div>

                            <div class="form-group @if($errors->has('en_sub_title')) has-error @endif">
                                {!! Form::label(trans('app.EN_Sub_Title'))  !!}
                                {!! Form::text('en_sub_title', null, ['class' => 'form-control', 'placeholder' => 'EN_Sub Title']) !!}
                                @if ($errors->has('en_sub_title'))
                                  <span class="help-block " style="color:red;">{!! $errors->first('en_sub_title') !!}</span>@endif
                            </div>
                                    <div class="form-group @if($errors->has('ar_sub_title')) has-error @endif">
                                {!! Form::label(trans('app.AR_Sub_Title'))  !!}
                                {!! Form::text('ar_sub_title', null, ['class' => 'form-control', 'placeholder' => 'AR_Sub Title']) !!}
                                @if ($errors->has('ar_sub_title'))
                                   <span class="help-block " style="color:red;">{!! $errors->first('ar_sub_title') !!}</span>@endif
                            </div>

                            <div class="form-group @if($errors->has('en_details')) has-error @endif">
                                {!! Form::label(trans('app.EN_Details'))   !!}
                                {!! Form::textarea('en_details', null, ['class' => 'form-control', 'placeholder' => 'EN_Details']) !!}
                                @if ($errors->has('en_details'))
                                   <span class="help-block " style="color:red;">{!! $errors->first('en_details') !!}</span>@endif
                            </div>
                                  <div class="form-group @if($errors->has('ar_details')) has-error @endif">
                                {!! Form::label(trans('app.AR_Details')) !!}
                                {!! Form::textarea('ar_details', null, ['class' => 'form-control', 'placeholder' => 'AR_Details']) !!}
                                @if ($errors->has('ar_details'))
                                   <span class="help-block " style="color:red;">{!! $errors->first('ar_details') !!}</span>@endif
                            </div>

                            <div class="form-group">
                                {!! Form::label('Publish') !!}
                                {!! Form::select('is_published', [1 => 'Publish', 0 => 'Draft'], null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="box-footer">
                            {!! Form::submit(trans('app.cs'),['class' => 'btn btn-sm btn-primary']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <script>
        $(document).ready(function () {
            CKEDITOR.replace('en_details', {
            removePlugins: 'sourcearea'
        });
            CKEDITOR.replace('ar_details', {
            removePlugins: 'sourcearea'
        });

               });
    </script>
@endsection
