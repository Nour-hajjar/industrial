@extends('website.template.master')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{route('getImage',$page->thumbnail) )}})">

        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1><!-- {{App::isLocale('ar') ? $page->ar_title : $page->en_title  }} --></h1>

                        <h2 class="subheading"><!-- {{App::isLocale('ar') ?  $page->ar_sub_title : $page->en_sub_title }} --></h2>
                        <!-- <span class="meta">Posted by
              <a href="#">{{ $page->user->name }}</a>
              on {{ date('M d, Y', strtotime($page->created_at)) }}</span> -->
                    </div>
                </div>
            </div>
        </div>
    </header>
    @extends('website.share')
@section('content') 

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
             
                    {!! App::isLocale('ar') ? $page->ar_details:$page->en_details !!}
              
                </div>
            </div>
        </div>
    </article>
@endsection()