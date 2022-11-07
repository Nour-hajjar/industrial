@extends('website.template.master')

@section('content')
    <!-- Page Header -->
      <header class="masthead" style="background-image: url({{route('getImage',$loan->thumbnail) )}})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1></h1>
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
  @extends('website.share')
@section('content') 
 <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                     <div class="blog-text dd">
                  <h4>
                    <a>{{App::isLocale('ar') ? $loan->ar_title: $loan->en_title}}</a>
                  </h4>
                  <p> {{App::isLocale('ar') ? $loan->ar_sub_title: $loan->en_sub_title}}</p>
                    
              
                </div>
                    {!! App::isLocale('ar') ?  $loan->ar_details : $loan->en_details !!}
                </div>
            </div>
        </div>
    </article>
    @endsection()