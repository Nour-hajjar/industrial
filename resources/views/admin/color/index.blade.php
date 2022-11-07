@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ Session('message') }}
                    </div>
                @endif

                @if(Session::has('delete-message'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{ Session('delete-message') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      color
                     <!--    <a href="{{ route('color.create') }}" class="btn btn-sm btn-primary float-right nn"  >{{trans('app.Add_New') }}</a> -->
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr>
                                  <th style="text-align: center" scope="col" width="60">#</th>
                                <th style="text-align: center" scope="col">{{trans('app.Title')}}</th>
                                <th style="text-align: center" scope="col" width="200">{{trans('app.creat')}}</th>
                                <th style="text-align: center" scope="col" width="200">{{trans('app.Action')}}</th>
                            </tr>
                            </thead>

                            <tbody>
                                  @php $i = 1 @endphp
                            @foreach($colors as $color)
                                <tr>
                                     <td style="text-align: center" >{{ $i++ }}</td>
                                    <td>{{ $color->color1}}</td>
                                     <td style="text-align: center" >{{ $color->user->name }}</td>
                                    <td>    
                                     <div class="row">
                                        <div class="col-sm-6"   >
                                            <a class="btn btn-sm  btn-success col-sm-12" href="{{ route('color.show',$color->id) }}">{{trans('app.show')}}</a>
                                        </div>
                                        <div class="col-sm-6"  >
                                       @can('color-edit')
                                        <a href="{{ route('color.edit', $color->id) }}"
                                           class="btn btn-sm btn-info col-sm-12">{{trans('app.edit') }}</a>
                                             @endcan
                                             </div>
                                        {!! Form::open(['route' => ['color.destroy', $color->id], 'method' => 'delete', 'style' => 'display:inline']) !!}
                                      <!--   {!! Form::submit(trans('app.delete'), ['class' => 'btn btn-sm btn-danger']) !!} --> 
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
