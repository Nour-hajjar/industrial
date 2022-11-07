@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{trans('app.slider') .': '. $slider->id }}
                       
            <a class="btn btn-sm btn-primary float-right col-sm-2" href="{{ route('sliders.index') }}">{{trans('app.Back')}} </a>
                        
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => ['sliders.update', $slider->id], 'method' => 'put']) !!}
                        <div class="box-body">
                            <div class="form-group @if($errors->has('thumbnail')) has-error @endif">
                                {!! Form::label(trans('app.Thumbnail')) !!}
                                {!! Form::text('thumbnail', $slider->thumbnail, ['class' => 'form-control', 'placeholder' => 'Thumbnail']) !!}
                                @if ($errors->has('thumbnail'))
                                    <span class="help-block " style="color:red;">{!! $errors->first('thumbnail') !!}</span>@endif
                            </div>

                            <div class="form-group @if($errors->has('en_title')) has-error @endif">
                                {!! Form::label(trans('app.EN_Title')) !!}
                                {!! Form::text('en_title', $slider->en_title, ['class' => 'form-control', 'placeholder' => 'EN_Title']) !!}
                                @if ($errors->has('en_title'))
                                   <span class="help-block " style="color:red;">{!! $errors->first('en_title') !!}</span>@endif
                            </div>

                            <div class="form-group @if($errors->has('ar_title')) has-error @endif">
                                {!! Form::label(trans('app.AR_Title')) !!}
                                {!! Form::text('ar_title', $slider->ar_title, ['class' => 'form-control', 'placeholder' => 'AR_Title']) !!}
                                @if ($errors->has('ar_title'))
                                   <span class="help-block " style="color:red;">{!! $errors->first('ar_title') !!}</span>@endif
                            </div>
                                    <div class="form-group @if($errors->has('en_sub_title')) has-error @endif">
                            {!! Form::label(trans('app.EN_Sub_Title')) !!}
                            {!! Form::text('en_sub_title', $slider->en_sub_title, ['class' => 'form-control', 'placeholder' => 'EN_Sub Title']) !!}
                            @if ($errors->has('en_sub_title'))
                               <span class="help-block " style="color:red;">{!! $errors->first('en_sub_title') !!}</span>@endif
                        </div>
                             <div class="form-group @if($errors->has('ar_sub_title')) has-error @endif">
                            {!! Form::label(trans('app.AR_Sub_Title')) !!}
                            {!! Form::text('ar_sub_title', $slider->ar_sub_title, ['class' => 'form-control', 'placeholder' => 'AR_Sub Title']) !!}
                            @if ($errors->has('ar_sub_title'))
                             <span class="help-block " style="color:red;">{!! $errors->first('ar_sub_title') !!}</span>@endif
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


 
@endsection
