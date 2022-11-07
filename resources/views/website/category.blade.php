@extends('website.template.master')

@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url({{route('getImage',$category->thumbnail) }})">
        <div class="overlay"></div>"{{ 
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
          <!--       @foreach($posts as $post)
                    <div class="post-preview col-md-5 d-inline-block">
                        <a href="{{ url('post/' . $post->slug) }}">
                            <h2 class="post-title">
                               {{App::isLocale('ar') ? $post->ar_title: $post->en_title}}
                            </h2>
                            <h3 class="post-subtitle">
                               {{App::isLocale('ar') ? $post->ar_sub_title: $post->en_sub_title}}
                            </h3>
                          
                        </a>
                        <p class="post-meta">
                            <a href="#"></a>
                          
                   
                        </p>
                    </div>
                    
            @endforeach -->
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
            @foreach($posts as $post)
            <div class="col-md-3 col-sm-3 col-xs-12 ">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a >
                    <img src="{{route('getImage',$post->thumbnail) }}" alt="">
                  </a>
                </div>
                <p> </p>
                <div class="blog-text">
                 <h4>
                    <a>{{App::isLocale('ar') ? $post->ar_title: $post->en_title}}</a>
                  </h4>
            
                    
              
                </div>
                <span>
                  <a href="{{ url('post/' . $post->slug) }}" class="ready-btn">{{trans('app.rm')}}</a>
                </span>
               <div><br></div>
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
                <div class="clearfix mt-4">
                    {{ $posts->links() }}
                </div>
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
