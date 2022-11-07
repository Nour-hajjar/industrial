@extends('website.template.master')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{route('getImage',$post->thumbnail) )}})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1><!-- {{App::isLocale('ar') ? $post->ar_title: $post->en_title}} -->
                        </h1>
                        <h2 class="subheading"><!-- {{App::isLocale('ar') ? $post->ar_sub_title: $post->en_sub_title}} --></h2>
          </span>
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
                     <div class="blog-text dd">
                  <h4>
                    <a>{{App::isLocale('ar') ? $post->ar_title: $post->en_title}}</a>
                  </h4>
                  <p> {{App::isLocale('ar') ? $post->ar_sub_title: $post->en_sub_title}}</p>
                    
              
                </div>
                    {!! App::isLocale('ar') ?  $post->ar_details : $post->en_details !!}
                </div>
            </div>
        </div>
    </article>
@endsection()