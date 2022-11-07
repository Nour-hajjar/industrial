@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{trans('app.gallery_list')}} 
                         <a class="btn btn-sm btn-primary float-right col-sm-2" href="{{ route('galleries.index') }}">{{trans('app.Back')}} </a>

              

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
                        {!! Form::open(['route' => 'galleries.store', 'enctype' => 'multipart/form-data']) !!}

                        <div class="form-group @if($errors->has('image_url')) has-error @endif">
                            {!! Form::label('Image url', null, ['style' => 'display: block;']) !!}
                            {!! Form::file('image_url[]', ['multiple' => 'multiple']) !!}
                            @if ($errors->has('image_url'))<span
                                    class="help-block">{!! $errors->first('image_url') !!}</span>@endif
                        </div>

                        {!! Form::submit(trans('app.cs'),['class' => 'btn btn-sm btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
