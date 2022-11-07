@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                @if(Session::has('message'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{Session('message')}}
                    </div>
                @endif

                @if(Session::has('delete-message'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{Session('delete-message')}}
                    </div>
                @endif
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        {{trans('app.page')}}
                       <!--  <a href="{{ route('pages.create') }}" class="btn btn-sm btn-primary float-right">{{trans('app.Add_New')}}</a> -->
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr>
                                <th scope="col" width="20">#</th>
                                <th scope="col">{{trans('app.name')}}</th>
                                <th scope="col" width="200">{{trans('app.ema')}}</th>
                                <th scope="col" width="129">{{trans('app.Action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                                  @php $i = 1 @endphp
                            @foreach($maillists as $maillist)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th> 
                                    <td>{{ $maillist->name }}</td>
                                    <td>{{ $maillist->email}}</td>
                                    <td>
                                              @can('maill-create')
                                        <a href="{{ route('maillists.edit', $maillist->id) }}"
                                           class="btn btn-sm col-sm-12 btn-primary">{{trans('app.show')}}</a>
                                               @endcan
                                        {!! Form::open(['route' => ['maillists.destroy', $maillist->id], 'method' => 'delete', 'style' => 'display:inline']) !!}
                                       <!--  {!! Form::submit(trans('app.delete'),['class' => 'btn btn-sm btn-danger']) !!} -->
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                          <div class="clearfix mt-4">
                    {{ $maillists->links() }}
                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
