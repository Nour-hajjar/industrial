@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
			<img src="{{ route('get_file_for_test22', 'test.png') }}" alt="" title="">
            </div>
        </div>
    </div>
</div>
@endsection
