@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{trans('app.sett')}}</div>

                    <div class="card-body">
                        {!! Form::open(['route' => 'settings.store']) !!}

                        <div class="form-group @if($errors->has('name_a')) has-error @endif">
                             {!! Form::label('The name of the site in Arabic') !!}
                            {!! Form::text('name_a', null, ['class' => 'form-control', 'placeholder' => 'name_a']) !!}
                            @if ($errors->has('name_a'))
                                <span class="help-block">{!! $errors->first('name_a') !!}</span>@endif
                        </div>
                             <div class="form-group @if($errors->has('name_a_1')) has-error @endif">
                             {!! Form::label('The name of the site in Arabic') !!}
                            {!! Form::text('name_a_1', null, ['class' => 'form-control', 'placeholder' => 'name_a_1']) !!}
                            @if ($errors->has('name_a_1'))
                                <span class="help-block">{!! $errors->first('name_a_1') !!}</span>@endif
                        </div>
                             <div class="form-group @if($errors->has('name_e')) has-error @endif">
                            {!! Form::label('The name of the site in English') !!}
                            {!! Form::text('name_e', null, ['class' => 'form-control', 'placeholder' => 'name_e']) !!}
                            @if ($errors->has('name_e'))
                                <span class="help-block">{!! $errors->first('name_e') !!}</span>@endif
                        </div>
                                <div class="form-group @if($errors->has('name_e_1')) has-error @endif">
                            {!! Form::label('The name of the site in English') !!}
                            {!! Form::text('name_e_1', null, ['class' => 'form-control', 'placeholder' => 'name_e_1']) !!}
                            @if ($errors->has('name_e_1'))
                                <span class="help-block">{!! $errors->first('name_e_1') !!}</span>@endif
                        </div>
                              <div class="form-group @if($errors->has('arrange')) has-error @endif">
                            {!! Form::label('Site Domain') !!}
                            {!! Form::text('arrange', null, ['class' => 'form-control', 'placeholder' => 'arrange']) !!}
                            @if ($errors->has('arrange'))
                                <span class="help-block">{!! $errors->first('arrange') !!}</span>@endif
                        </div>
                              <div class="form-group @if($errors->has('link')) has-error @endif">
                            {!! Form::label('Website Link') !!}
                            {!! Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'link']) !!}
                            @if ($errors->has('link'))
                                <span class="help-block">{!! $errors->first('link') !!}</span>@endif
                        </div>
                         <div class="form-group @if($errors->has('email')) has-error @endif">
                            {!! Form::label('email') !!}
                            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
                            @if ($errors->has('email'))
                                <span class="help-block">{!! $errors->first('email') !!}</span>@endif
                        </div>
                        
              <!--            <div class="form-group @if($errors->has('Arabic')) has-error @endif">
                            {!! Form::label('Key words in Arabic:') !!}
                            {!! Form::textarea('Arabic', null, ['class' => 'form-control', 'placeholder' => 'Arabic']) !!}
                            @if ($errors->has('Arabic'))
                                <span class="help-block">{!! $errors->first('Arabic') !!}</span>@endif
                        </div>
                            <div class="form-group @if($errors->has('English')) has-error @endif">
                            {!! Form::label('Key words in English:') !!}
                            {!! Form::textarea('English', null, ['class' => 'form-control', 'placeholder' => 'English']) !!}
                            @if ($errors->has('English'))
                                <span class="help-block">{!! $errors->first('English') !!}</span>@endif
                        </div> -->
                    

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
   
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

@endsection