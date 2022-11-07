@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{trans('app.contact') .': '. $footer->id }}
                       
            <a class="btn btn-sm btn-primary float-right col-sm-2" href="{{ route('footers.index') }}">{{trans('app.Back')}} </a>
                        
                    </div>
                    <div class="card-body">
                        {!! Form::open(['route' => ['footers.update', $footer->id], 'method' => 'put']) !!}

                        <div class="form-group @if($errors->has('tel')) has-error @endif">
                            {!! Form::label(trans('app.Tel')) !!}
                            {!! Form::text('tel', $footer->tel, ['class' => 'form-control', 'placeholder' => 'Tel']) !!}
                            @if ($errors->has('tel'))
                               <span class="help-block " style="color:red;">{!! $errors->first('tel') !!}</span>@endif
                        </div>
                             <div class="form-group @if($errors->has('email')) has-error @endif">
                            {!! Form::label(trans('app.ema')) !!}
                            {!! Form::text('email', $footer->email, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                            @if ($errors->has('email'))
                              <span class="help-block " style="color:red;">{!! $errors->first('email') !!}</span>@endif
                        </div>
                             <div class="form-group @if($errors->has('fax')) has-error @endif">
                            {!! Form::label(trans('app.fax'))!!}
                            {!! Form::text('fax', $footer->fax, ['class' => 'form-control', 'placeholder' => 'Fax']) !!}
                            @if ($errors->has('fax'))
                                <span class="help-block " style="color:red;">{!! $errors->first('fax') !!}</span>@endif
                        </div>
                         <div class="form-group @if($errors->has('mailbox')) has-error @endif">
                            {!! Form::label(trans('app.mail')) !!}
                            {!! Form::text('mailbox', $footer->mailbox, ['class' => 'form-control', 'placeholder' => 'Mailbox']) !!}
                            @if ($errors->has('mailbox'))
                              <span class="help-block " style="color:red;">{!! $errors->first('mailbox') !!}</span>@endif
                        </div>
                             <div class="form-group @if($errors->has('en_location')) has-error @endif">
                            {!! Form::label(trans('app.EN_Location')) !!}
                            {!! Form::text('en_location', $footer->en_location, ['class' => 'form-control', 'placeholder' => 'EN_Location']) !!}
                            @if ($errors->has('en_location'))
                                <span class="help-block " style="color:red;">{!! $errors->first('en_location') !!}</span>@endif
                        </div>
                                       <div class="form-group @if($errors->has('ar_location')) has-error @endif">
                            {!! Form::label(trans('app.AR_Location')) !!}
                            {!! Form::text('ar_location', $footer->ar_location, ['class' => 'form-control', 'placeholder' => 'AR_Location']) !!}
                            @if ($errors->has('ar_location'))
                               <span class="help-block " style="color:red;">{!! $errors->first('ar_location') !!}</span>@endif
                        </div>


                        <div class="form-group @if($errors->has('en_details')) has-error @endif">
                            {!! Form::label(trans('app.EN_Details'))  !!}
                            {!! Form::textarea('en_details', $footer->en_details, ['class' => 'form-control', 'placeholder' => 'EN_Details']) !!}
                            @if ($errors->has('en_details'))
                              <span class="help-block " style="color:red;">{!! $errors->first('en_details') !!}</span>@endif
                        </div>
                               <div class="form-group @if($errors->has('ar_details')) has-error @endif">
                            {!! Form::label(trans('app.AR_Details'))  !!}
                            {!! Form::textarea('ar_details', $footer->ar_details, ['class' => 'form-control', 'placeholder' => 'EN_Details']) !!}
                            @if ($errors->has('ar_details'))
                               <span class="help-block " style="color:red;">{!! $errors->first('ar_details') !!}</span>@endif
                        </div>
                                  <div class="form-group @if($errors->has('map')) has-error @endif">
                            {!! Form::label(trans('app.map'))  !!}
                            {!! Form::textarea('map', $footer->map, ['class' => 'form-control', 'placeholder' => 'map']) !!}
                            @if ($errors->has('map'))
                                <span class="help-block " style="color:red;">{!! $errors->first('map') !!}</span>@endif
                        </div>
                                      <div class="form-group @if($errors->has('home_map')) has-error @endif">
                            {!! Form::label(trans('app.home_map'))  !!}
                            {!! Form::textarea('home_map', $footer->home_map, ['class' => 'form-control', 'placeholder' => 'home_map']) !!}
                            @if ($errors->has('home_map'))
                              <span class="help-block " style="color:red;">{!! $errors->first('home_map') !!}</span>@endif
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
			 CKEDITOR.replace('map');
            CKEDITOR.replace('home_map');
        
   

               });
    </script>
@endsection
