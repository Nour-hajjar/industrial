@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{trans('app.about_list') .': '. $about->id }}
                       
            <a class="btn btn-sm btn-primary float-right col-sm-2" href="{{ route('abouts.index') }}">{{trans('app.Back')}} </a>
                        
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => ['abouts.update', $about->id], 'method' => 'put']) !!}
                        <div class="box-body">
                            <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
                                {!! Form::label(trans('app.Thumbnail')) !!}
                                {!! Form::text('thumbnail', $about->thumbnail, ['class' => 'form-control', 'placeholder' => 'Thumbnail']) !!}
                                @if ($errors->has('thumbnail'))
                                    <span class="help-block " style="color:red;">{!! $errors->first('thumbnail') !!}</span>@endif
                            </div>

                               <div class="form-group @if($errors->has('en_title')) has-error @endif">
                                {!! Form::label(trans('app.EN_Title'))!!}
                                {!! Form::text('en_title', $about->en_title, ['class' => 'form-control', 'placeholder' => 'EN_Title']) !!}
                                @if ($errors->has('en_title'))
                                    <span class="help-block " style="color:red;">{!! $errors->first('en_title') !!}</span>@endif
                            </div>
                                <div class="form-group @if($errors->has('ar_title')) has-error @endif">
                                {!! Form::label(trans('app.AR_Title')) !!}
                                {!! Form::text('ar_title', $about->ar_title, ['class' => 'form-control', 'placeholder' => 'AR_Title']) !!}
                                @if ($errors->has('ar_title'))
                                    <span class="help-block " style="color:red;">{!! $errors->first('ar_title') !!}</span>@endif
                            </div>
                             <div class="form-group @if($errors->has('en_details'))
                             has-error @endif">
                                {!! Form::label(trans('app.EN_Details')) !!}
                                {!! Form::textarea('en_details', $about->en_details, ['class' => 'form-control', 'placeholder' => 'EN_Details']) !!}
                                @if ($errors->has('en_details'))
                                  <span class="help-block " style="color:red;">{!! $errors->first('en_details') !!}</span>@endif
                            </div>
                                 <div class="form-group @if($errors->has('ar_details'))
                             has-error @endif">
                                {!! Form::label(trans('app.AR_Details'))  !!}
                                {!! Form::textarea('ar_details', $about->ar_details, ['class' => 'form-control', 'placeholder' => 'AR_Details']) !!}
                                @if ($errors->has('ar_details'))
                                    <span class="help-block " style="color:red;">{!! $errors->first('ar_details') !!}</span>@endif
                            </div>

                        </div>
                      {!! Form::submit(trans('app.update'),['class' => 'btn btn-sm btn-warning']) !!}
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
            removePlugins: 'sourcearea',
            // enterMode : Number(2),
            // enterMode : CKEDITOR.ENTER_P,
            // autoParagraph = false;

        });
            CKEDITOR.replace('ar_details', {
            removePlugins: 'sourcearea'
        });

               });

// CKEDITOR.editorConfig = function (config){
//      config.enterMode = CKEDITOR.ENTER_BR;
//      config.shiftEnterMode = CKEDITOR.ENTER_P;
//      enterMode : CKEDITOR.ENTER_BR;
//      config.autoParagraph = false;
//      config.enterMode = 2;

     
//      };
// CKEDITOR.config.autoParagraph = false;

// CKEDITOR.config.enterMode = CKEDITOR.ENTER_BR;

</script>
@endsection
