@extends('website.template.master')

@section('content')
    <!-- Page Header -->
      <header class="masthead" style="background-image: url({{ asset('/image/55.jpg') }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 mx-auto">
                    <div class="site-heading">
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
 @extends('website.share')
@section('content')
    <!-- Main Content -->
    <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 ">
     
               <div id="blog" class="blog-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>{{ trans('app.news') }}</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start Left Blog -->
    
            <!-- End Left Blog-->
            <!-- Start Left Blog -->
            @foreach($master_loans as $loan)
            <div class="col-md-3 col-sm-3 col-xs-12 ">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a >
                    <img src="{{route('getImage', $loan->thumbnail)}}" alt="">
                  </a>
                </div>
                <p> </p>
                <div class="blog-text">
                  <h4>
                    <a><div class="b">{{App::isLocale('ar') ? $loan->ar_title: $loan->en_title}}</div></a>
                  </h4>
                  <p><div class="b"> {{App::isLocale('ar') ? $loan->ar_sub_title: $loan->en_sub_title}}</div></p>
                    
              
                </div>
                <span>
                  <a href="{{ url('loan/' . $loan->slug) }}" class="ready-btn">{{trans('app.rm')}}</a>
                </span>
               <div><hr></div>
              </div>
              <!-- Start single blog -->
            </div>
            @endforeach
           
            <!-- End Right Blog-->
          </div>
        </div>
      </div>
    </div><!-- End Blog Section -->

            <!-- Pager -->
             
            </div>
        </div>
    </div>
@endsection()
<!-- <style>

div.b {
  white-space: nowrap; 
  width: 250px; 
  overflow: hidden;
  text-overflow: ellipsis; 

}
</style> -->
