@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{trans('app.contact')}}</div>

                    <div class="card-body">
                        {!! Form::open(['route' => 'footers.store']) !!}

                        <div class="form-group @if($errors->has('tel')) has-error @endif">
                            {!! Form::label('Tel') !!}
                            {!! Form::text('tel', null, ['class' => 'form-control', 'placeholder' => 'Tel']) !!}
                            @if ($errors->has('tel'))
                                <span class="help-block">{!! $errors->first('tel') !!}</span>@endif
                        </div>
                         <div class="form-group @if($errors->has('email')) has-error @endif">
                            {!! Form::label('email') !!}
                            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
                            @if ($errors->has('email'))
                                <span class="help-block">{!! $errors->first('email') !!}</span>@endif
                        </div>
                         <div class="form-group @if($errors->has('fax')) has-error @endif">
                            {!! Form::label('fax') !!}
                            {!! Form::text('fax', null, ['class' => 'form-control', 'placeholder' => 'Fax']) !!}
                            @if ($errors->has('fax'))
                                <span class="help-block">{!! $errors->first('fax') !!}</span>@endif
                        </div>
                        <div class="form-group @if($errors->has('mailbox')) has-error @endif">
                            {!! Form::label('Mailbox') !!}
                            {!! Form::text('mailbox', null, ['class' => 'form-control', 'placeholder' => 'Mailboxx']) !!}
                            @if ($errors->has('mailbox'))
                                <span class="help-block">{!! $errors->first('mailbox') !!}</span>@endif
                        </div>
                         <div class="form-group @if($errors->has('en_location')) has-error @endif">
                            {!! Form::label('EN_Location') !!}
                            {!! Form::text('en_location', null, ['class' => 'form-control', 'placeholder' => 'EN_Location']) !!}
                            @if ($errors->has('en_location'))
                                <span class="help-block">{!! $errors->first('en_location') !!}</span>@endif
                        </div>
                              <div class="form-group @if($errors->has('ar_location')) has-error @endif">
                            {!! Form::label('AR_Location') !!}
                            {!! Form::text('ar_location', null, ['class' => 'form-control', 'placeholder' => 'AR_Location']) !!}
                            @if ($errors->has('ar_location'))
                                <span class="help-block">{!! $errors->first('ar_location') !!}</span>@endif
                        </div>
                        
                         <div class="form-group @if($errors->has('en_details')) has-error @endif">
                            {!! Form::label('EN_Details') !!}
                            {!! Form::textarea('en_details', null, ['class' => 'form-control', 'placeholder' => 'EN_Details']) !!}
                            @if ($errors->has('en_en_details'))
                                <span class="help-block">{!! $errors->first('en_details') !!}</span>@endif
                        </div>
                              <div class="form-group @if($errors->has('ar_details')) has-error @endif">
                            {!! Form::label('AR_Details') !!}
                            {!! Form::textarea('ar_details', null, ['class' => 'form-control', 'placeholder' => 'AR_Details']) !!}
                            @if ($errors->has('ar_details'))
                                <span class="help-block">{!! $errors->first('ar_details') !!}</span>@endif
                        </div>
                            <div class="form-group @if($errors->has('map')) has-error @endif">
                            {!! Form::label('map') !!}
                            {!! Form::textarea('map', null, ['class' => 'form-control', 'placeholder' => 'map']) !!}
                            @if ($errors->has('map'))
                                <span class="help-block">{!! $errors->first('map') !!}</span>@endif
                        </div>
                              <div class="form-group @if($errors->has('home_map')) has-error @endif">
                            {!! Form::label('home_map') !!}
                            {!! Form::textarea('home_map', null, ['class' => 'form-control', 'placeholder' => 'home_map']) !!}
                            @if ($errors->has('home_map'))
                                <span class="help-block">{!! $errors->first('home_map') !!}</span>@endif
                        </div>

                        {!! Form::submit('Create',['class' => 'btn btn-sm btn-primary']) !!}
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
            CKEDITOR.replace('en_details', {
            removePlugins: 'sourcearea'
        });
            CKEDITOR.replace('ar_details', {
            removePlugins: 'sourcearea'
        });

               });
    </script>
@endsection