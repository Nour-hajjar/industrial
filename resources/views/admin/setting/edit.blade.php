@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{trans('app.sett') .': '. $setting->id }}
                       
            <a class="btn btn-sm btn-primary float-right col-sm-2" href="{{ route('settings.index') }}">{{trans('app.Back')}} </a>
                        
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => ['settings.update', $setting->id], 'method' => 'put']) !!}

                        <div class="form-group @if($errors->has('name_a')) has-error @endif">
                            {!! Form::label(trans('app.thh') ) !!}
                            {!! Form::text('name_a', $setting->name_a, ['class' => 'form-control', 'placeholder' => 'name_a']) !!}
                            @if ($errors->has('name_a'))
                               <span class="help-block " style="color:red;">{!! $errors->first('name_a') !!}</span>@endif
                        </div>

                        <div class="form-group @if($errors->has('name_a_1')) has-error @endif">
                            {!! Form::label(trans('app.thh') ) !!}
                            {!! Form::text('name_a_1', $setting->name_a_1, ['class' => 'form-control', 'placeholder' => 'name_a_1']) !!}
                            @if ($errors->has('name_a_1'))
                               <span class="help-block " style="color:red;">{!! $errors->first('name_a_1') !!}</span>@endif
                        </div>
                         <div class="form-group @if($errors->has('name_e')) has-error @endif">
                            {!! Form::label(trans('app.thh_a')) !!}
                            {!! Form::text('name_e', $setting->name_e, ['class' => 'form-control', 'placeholder' => 'name_e']) !!}
                            @if ($errors->has('name_e'))
                               <span class="help-block " style="color:red;">{!! $errors->first('name_e') !!}</span>@endif
                        </div>
                                <div class="form-group @if($errors->has('name_e_1')) has-error @endif">
                            {!! Form::label(trans('app.thh_a')) !!}
                            {!! Form::text('name_e_1', $setting->name_e_1, ['class' => 'form-control', 'placeholder' => 'name_e_1']) !!}
                            @if ($errors->has('name_e_1'))
                              <span class="help-block " style="color:red;">{!! $errors->first('name_e_1') !!}</span>@endif
                        </div>
                         <div class="form-group @if($errors->has('arrange')) has-error @endif">
                            {!! Form::label(trans('app.Site_Domain')) !!}
                            {!! Form::text('arrange', $setting->arrange, ['class' => 'form-control', 'placeholder' => 'arrange']) !!}
                            @if ($errors->has('arrange'))
                               <span class="help-block " style="color:red;">{!! $errors->first('arrange') !!}</span>@endif
                        </div>
                         <div class="form-group @if($errors->has('link')) has-error @endif">
                            {!! Form::label(trans('app.WebSite_Link')) !!}
                            {!! Form::text('link', $setting->link, ['class' => 'form-control', 'placeholder' => 'link']) !!}
                            @if ($errors->has('link'))
                              <span class="help-block " style="color:red;">{!! $errors->first('link') !!}</span>@endif
                        </div>
                             <div class="form-group @if($errors->has('email')) has-error @endif">
                            {!! Form::label(trans('app.ema')) !!}
                            {!! Form::text('email', $setting->email, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                            @if ($errors->has('email'))
                               <span class="help-block " style="color:red;">{!! $errors->first('email') !!}</span>@endif
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
   
@endsection
