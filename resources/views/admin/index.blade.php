@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"> {{trans('app.qes') }}</div>

                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col" width="60">{{trans('app.Title') }}</th>
                                <th scope="col" width="200">{{trans('app.creat') }}</th>
                            </tr>
                            </thead>

                        <tbody>
                               @foreach($questions as $question)
                                <tr>
                                    <td>{{ $question->id }}</td>
                                    <td>{{App::isLocale('ar') ? $question->ar_title:$question->en_title }}</td>
                                    <td>{{ $question->user->name }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header"> {{trans('app.news')}}</div>

                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col" width="60">{{trans('app.Title') }}</th>
                                <th scope="col" width="200">{{trans('app.creat') }}</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{App::isLocale('ar') ? $post->ar_title:$post->en_title }}</td>
                                    <td>{{ $post->user->name }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header"> {{trans('app.page')}}</div>

                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col" width="60">{{trans('app.Title') }}</th>
                                <th scope="col" width="200">{{trans('app.creat') }}</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($pages as $page)
                                <tr>
                                    <td>{{ $page->id }}</td>
                                    <td>{{App::isLocale('ar') ? $page->ar_title:$page->en_title }}</td>
                                    <td>{{ $page->user->name }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
         <div class="card mt-4">
                    <div class="card-header">  {{trans('app.slider') }}</div>

                    <div class="card-body">
                        <table class="table table-bordered mb-0">
                            <thead>
                            <tr>
                                <th scope="col" width="60">#</th>
                                <th scope="col" width="60">{{trans('app.Title') }}</th>
                                <th scope="col" width="200">{{trans('app.creat') }}</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($sliders as $slider)
                                <tr>
                                    <td>{{ $slider->id }}</td>
                                    <td>{{App::isLocale('ar') ? $slider->ar_title:$slider->en_title }}</td>
                                    <td>{{ $slider->user->name }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
