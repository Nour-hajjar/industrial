@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{trans('app.nw') .': ' }}
                       
            <a class="btn btn-sm btn-primary float-right col-sm-2" href="{{ route('latests.index') }}">{{trans('app.Back')}} </a>
                        
                    </div>

                    <div class="card-body">
                        {!! Form::open(['route' => 'latests.store']) !!}
    
                

                        <div class="form-group @if($errors->has('title')) has-error @endif">
                            {!! Form::label(trans('app.title')) !!}
                            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'title']) !!}
                            @if ($errors->has('title'))
                                <span class="help-block " style="color:red;">{!! $errors->first('title') !!}</span>@endif
                        </div>
                               <div class="form-group @if($errors->has('title_a')) has-error @endif">
                            {!! Form::label(trans('app.title_a'))!!}
                            {!! Form::text('title_a', null, ['class' => 'form-control', 'placeholder' => 'title_a']) !!}
                            @if ($errors->has('title_a'))
                              <span class="help-block " style="color:red;">{!! $errors->first('title_a') !!}</span>@endif
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
