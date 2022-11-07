@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{trans('app.dlist')}}
  <a class="btn btn-sm btn-primary float-right col-sm-2" href="{{ route('directives.index') }}">{{trans('app.Back')}} </a>
						</div>
                    <div class="card-body">
						
                        {!! Form::open(['route' => 'directives.store']) !!}
              

                        <div class="form-group @if($errors->has('name')) has-error @endif">
                            {!! Form::label(trans('app.name')) !!}
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                            @if ($errors->has('name'))
                                <span class="help-block " style="color:red;">{!! $errors->first('name') !!}</span>@endif
                        </div>
          <div class="form-group @if($errors->has('name_a')) has-error @endif">
                            {!! Form::label(trans('app.name_a')) !!}
                            {!! Form::text('name_a', null, ['class' => 'form-control', 'placeholder' => 'name_a']) !!}
                            @if ($errors->has('name_a'))
                               <span class="help-block " style="color:red;">{!! $errors->first('name_a') !!}</span>@endif
                        </div>
                   
                        <div class="form-group @if($errors->has('location')) has-error @endif">
                            {!! Form::label(trans('app.location')) !!}
                            {!! Form::text('location', null, ['class' => 'form-control', 'placeholder' => 'location']) !!}
                            @if ($errors->has('location'))
                                <span class="help-block " style="color:red;">{!! $errors->first('location') !!}</span>@endif
                        </div>
          <div class="form-group @if($errors->has('location_a')) has-error @endif">
                            {!! Form::label(trans('app.location_a')) !!}
                            {!! Form::text('location_a', null, ['class' => 'form-control', 'placeholder' => 'location_a']) !!}
                            @if ($errors->has('location_a'))
                                <span class="help-block " style="color:red;">{!! $errors->first('location_a') !!}</span>@endif
                        </div>
                            <div class="form-group @if($errors->has('fax')) has-error @endif">
                            {!! Form::label(trans('app.fax')) !!}
                            {!! Form::text('fax', null, ['class' => 'form-control', 'placeholder' => 'fax']) !!}
                            @if ($errors->has('fax'))
                             <span class="help-block " style="color:red;">{!! $errors->first('fax') !!}</span>@endif
                        </div>
          <div class="form-group @if($errors->has('mobile')) has-error @endif">
                            {!! Form::label(trans('app.mobile')) !!}
                            {!! Form::text('mobile', null, ['class' => 'form-control', 'placeholder' => 'mobile']) !!}
                            @if ($errors->has('mobile'))
                                <span class="help-block " style="color:red;">{!! $errors->first('mobile') !!}</span>@endif
                        </div>
                                           <div class="form-group @if($errors->has('manager')) has-error @endif">
                            {!! Form::label(trans('app.manager')) !!}
                            {!! Form::text('manager', null, ['class' => 'form-control', 'placeholder' => 'manager']) !!}
                            @if ($errors->has('manager'))
                             <span class="help-block " style="color:red;">{!! $errors->first('manager') !!}</span>@endif
                        </div>
          <div class="form-group @if($errors->has('manager_a')) has-error @endif">
                            {!! Form::label(trans('app.manager_a')) !!}
                            {!! Form::text('manager_a', null, ['class' => 'form-control', 'placeholder' => 'manager_a']) !!}
                            @if ($errors->has('manager_a'))
                               <span class="help-block " style="color:red;">{!! $errors->first('manager_a') !!}</span>@endif
                        </div>

                        {!! Form::submit(trans('app.cs'),['class' => 'btn btn-sm btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
