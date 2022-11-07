@extends('website.template.master')

@section('content')
    <!-- Page Header -->
    <header>
<link href="{{ asset('website/img/logo_s.png') }}" type="image/png"  rel="icon">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
         @foreach($sliders as $slider)
        <img src="{{ route('getImage',$slider->thumbnail) }}"   alt="" title="#{{$slider->tab}}" />
         @endforeach
      </div>

      @foreach($sliders as $slider)
      <div id="{{$slider->tab}}" class="slider-direction slider-one">
        
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow animate__slideInDown animate__animated category" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">{{App::isLocale('ar') ? $slider->ar_title:$slider->en_title }}</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow animate__fadeIn animate__animated category" data-wow-duration="2s" data-wow-delay=".2s">
                  <h1 class="title2"> {{App::isLocale('ar') ? $slider->ar_sub_title:$slider->en_sub_title }}</h1>
                </div>
                <!-- layer 3 -->
                @foreach($master_categories as $category)
                 <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated category" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll" href="{{ url('category/'. $category->slug) }}">{{trans('app.news')}}</a>
                  <a class="ready-btn page-scroll" href="{{  route('contact.show') }}">{{trans('app.c')}}</a>
                   @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 
  
      @endforeach
    </header>

    @if(count($latests))
<div class="container  mt-5">
    <div class="row ">
        <div class="col-md-12">
            <div class="d-flex justify-content-between align-items-center breaking-news bg-white ">
                <div class="d-flex flex-row flex-grow-1 flex-fill justify-content-center bg-danger py-2 text-white px-1 news"><span class="d-flex align-items-center">&nbsp;{{trans('app.important')}}</span></div>
                       @if(App::isLocale('ar'))
                <marquee class="news-scroll" behavior="scroll" direction="right" onmouseover="this.stop();" onmouseout="this.start();">
                   @else
                            <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                                @endif
                         @foreach($latests as $latest)
                          <a  href="">{{App::isLocale('ar') ? $latest->title_a: $latest->title}}</a> <span class="dot"></span> 
                        @endforeach</marquee>
            </div>
        </div>
    </div>
</div>
@endif

<br>

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>{{ trans('app.GD') }}</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  @foreach($abouts as $about)
                  <img src="{{ route('getImage',$about->thumbnail) }}" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h4 class="sec-head">{{App::isLocale('ar') ?$about->ar_title:$about->en_title}}</h4>
                </a>
                <p>
                {!! App::isLocale('ar') ? $about->ar_details:$about->en_details !!}
                </p>
              </div>
            </div>
          </div>@endforeach
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->

    

    

   


    <!-- ======= News Section ======= -->
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
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a >
                    <img src="{{ route('getImage',$post->thumbnail) }}"  alt="">
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
              </div>
              <!-- Start single blog -->
            </div>
            @endforeach
           
            <!-- End Right Blog-->
          </div>
        </div>
      </div>
    </div><!-- End Blog Section -->
	  <!-- ======= Services Section ======= -->
    <div id="services" class="services-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>{{trans('app.service')}}</h2>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <!-- Start Left services -->
            @foreach($loans as $loan)
            
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="{{ url('loan/'. $loan->slug) }}">
                    <i class="fa {{$loan->icon}}"></i>
                  </a>
                  <h4>{{App::isLocale('ar') ? $loan->ar_title: $loan->en_title}}</h4>
                  <p>
                 {!! App::isLocale('ar') ? $loan->ar_details: $loan->en_details !!}
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
         @endforeach
        </div>
      </div>
    </div><!-- End Services Section -->
    <!-- ======= Contact Section ======= -->
    <!-- ======= Contact Section ======= -->
  <div class="container">
        <div class="row">
                <div class="col-md-6 ">
                  <section id="faq" class="faq">
  <div class="container ">
          <div class="row">
        

        <div class="section-headline section-title1">
          <h2>{{ trans('app.faq') }}</h2>
            <p class="star">
            </p>
        
</div>
   
        <ul class="faq-list" data-aos="fade-up">
      @foreach($questions as $question)
          <li>
            <a data-toggle="collapse" class="collapsed" href="#faq{{$question->id}}">{{App::isLocale('ar') ?  $question->ar_title:$question->en_title }} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq{{$question->id}}" class="collapse" data-parent=".faq-list">
              <p>
             {!! App::isLocale('ar') ? $question->ar_details : $question->en_details !!}
              </p>
            </div>
          </li>
     @endforeach
        

        </ul>

      </div>
    </div>
  </section>
          <div id="success"></div>
                <div class="form-group" style="text-align: center;">
                    <a  href="{{ url('list') }}" class="btn btn-primary" id="" style="font-size: 20px;" >{{trans('app.faq')}}</a>
                </div>
              </div>
      

<!-- End Frequently Asked Questions Section -->
   
    <!-- End Contact Section -->
         <div class="col-md-6 ">
               <div id="contact" class="contact-area">
      <div class="contact-inner ">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
        
                <h2>{{ trans('app.c') }}</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  @foreach ($footers as $footer)
                  <i class="fa fa-mobile"></i>
                  <p>
                   {{ trans('app.call') }}:  {{$footer->tel}}<br>
                    <span> {{ trans('app.fax') }} : {{$footer->fax}}</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-envelope-o"></i>
                  <p>
                    <span>{{ trans('app.mail') }} :{{$footer->mailbox}}</span>
                    <br>
                  <span> {{ trans('app.email')}} :{{$footer->email}}</span>
                  </p>
                </div>
              </div>
            </div>

            <!-- Start contact icon column -->

            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="fa fa-map-marker"></i>
                  <p> <span>
                    {{App::isLocale('ar') ? $footer->ar_location:$footer->en_location}}
                   </span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

       @endforeach
           <div id="success"></div>
                <div class="form-group" style="text-align: center;">
                    <a  href="{{ url('complaint') }}" class="btn btn-primary" id="" style="font-size: 20px;" >{{trans('app.comp')}}</a>
                </div>   
     </div>

  </main><!-- End #main -->

@endsection()

<style>


.news {
    width: 160px;
 
}

.news-scroll a {
    text-decoration: none;
    
}

.dot {
    height: 6px;
    width: 6px;
    margin-left: 3px;
    margin-right: 3px;
    margin-top: 2px !important;
    background-color: rgb(207, 23, 23);
    border-radius: 50%;
    display: inline-block
}
</style>
