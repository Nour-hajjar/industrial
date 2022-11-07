<!DOCTYPE html>
<html lang="en">

<head>
<script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
@foreach($master_settings as $master_setting)
  <title>{{App::isLocale('ar') ? $master_setting->name_a :$master_setting->name_e}}
{{App::isLocale('ar') ? $master_setting->name_a_1 :$master_setting->name_e_1}}</title>
  @endforeach
 
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
 
       
<body dir="{{(App::isLocale('ar') ? 'rtl' : 'ltr')}}">


  
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
  
    <!-- Custom fonts for this template -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
           


  <!-- Vendor CSS Files -->

  <link href="{{asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
 
    
  <link href="{{ asset('/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/nivo-slider/css/nivo-slider.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/venobox/venobox.css') }}" rel="stylesheet">



@extends(App::isLocale('en') ? 'layouts.style' : 'layouts.s')
    <!-- Custom styles for this template -->
    <link href="{{ asset('website/css/clean-blog.min.css') }}" rel="stylesheet">


</head>



<!-- Navigation -->

    
        <header id="header" class="fixed-top">
    <div class="container d-flex justify-content-between">

            <div class="logo">
           <img src="{{ asset('/image/logo_en1.png')}}" alt="" class="img-fluid">
    <!--     <h1 class="text-light"><a href="{{url('/') }}"><span>{{App::isLocale('ar') ? $master_setting->name_a :$master_setting->name_e}}</span><span> </span>{{App::isLocale('ar') ? $master_setting->name_a_1 :$master_setting->name_e_1}}</a></h1> -->
      
       
      </div>


            <nav class="nav-menu d-none d-lg-block">
        <ul>
         <li class="nav-item">
                    <a class="nav-link" href="{{  url('/') }}">{{ trans('app.home') }}</a>
                </li>
                  @foreach($master_categories as $category)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('category/'. $category->slug) }}">{{ trans('app.nw') }}</a>
                    </li>
                    @endforeach
			   <li class="nav-item">
                        <a class="nav-link" href="{{url('/page/branches') }}"> {{ trans('app.branches') }}</a>
                    </li>
                        <li class="nav-item drop-down"><a href="#">{{ trans('app.directory') }}</a>
                <ul><li>
                        @foreach($master_directives as $directive)
                 
                        <a class="nav-link" href="{{ url('directive/'. $directive->slug) }}">{{App::isLocale('ar') ? $directive->name_a : $directive->name }}</a>
                    </li>
                    @endforeach
                      </ul>
               @php($pages= getPages())
                @foreach($pages as $page)

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('page/' . $page->slug) }}">{{App::isLocale('ar') ? $page->ar_title : $page->en_title }}</a>
                    </li>
                @endforeach
       <li class="nav-item">
                    <a class="nav-link" href="{{ route('help') }}">{{ trans('app.service') }}</a>
                </li>        
 <li class="nav-item">
                    <a class="nav-link" href="{{url('maillist/create')}}">{{ trans('app.maillis') }}</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.show') }}">{{ trans('app.c') }}</a>
                </li>
          
              <li class="nav-item drop-down"><a href="#">{{trans('app.en')}}</a>
                <ul><li>
                                <a class="nav-link" href="{{url('/lang/en')}}">en</a>
                              </li>
                                <li class="nav-item">
                               <li> <a class="nav-link" href="{{url('/lang/ar')}}"> ar</a>
                              </li>
                        
                         </ul>
        


        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>
    </div>
</nav>

@yield('content')


  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>{{App::isLocale('ar') ? $master_setting->name_a :$master_setting->name_e}}</span>  {{App::isLocale('ar') ? $master_setting->name_a_1 :$master_setting->name_e_1}}</h2>
                </div>
              @foreach($master_footers as $footer)
                <p>{!! App::isLocale('ar') ? $footer->ar_details: $footer->en_details!!}</p>

                
               <!--  <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div> -->
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>{{ trans('app.a') }}</h4>
                <div class="footer-contacts">
                  <p><span>{{ trans('app.call') }}:</span>{{$footer->tel}}</p>
                  <p><span>{{ trans('app.email') }}:</span>{{$footer->email}}</p>
                  <p><span> {{ trans('app.mail') }}: </span>{{$footer->mailbox}}</p>
                 <p><span>  {{ trans('app.fax') }} :</span>{{$footer->fax}}</p>
                
                  
                </div>
              </div>
            </div>
          </div>
         
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4>{{App::isLocale('ar') ? $master_setting->name_a :$master_setting->name_e}}  {{App::isLocale('ar') ? $master_setting->name_a_1 :$master_setting->name_e_1}}</h4>
                <div class="f">
                 <a href="#"><img src="{{ asset('/image/flogo.png')}}" alt=""></a>
            <div class="footer-contacts"> <p ><span> {{ trans('app.p') }} :</span>
                  {{App::isLocale('ar') ? $footer->ar_location:$footer->en_location}}</p></div>@endforeach
                       <div class="footer-contacts">  <p ><span>  {{ trans('app.u') }}:</span><a href="http://www.e-gate.me/"> E-GATE </p></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>Smart Systems Solutions</strong>. All Rights Reserved
              </p>
            </div>
            <div class="credits">
              Designed by <a href="http://sss.sy/">Smart Systems Soluions </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

 <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>
  <!-- Vendor JS Files -->
  <script src="{{ asset('/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('/vendor/appear/jquery.appear.js') }}"></script>
  <script src="{{ asset('/vendor/knob/jquery.knob.js') }}"></script>
  <script src="{{ asset('/vendor/parallax/parallax.js') }}"></script>
  <script src="{{ asset('/vendor/wow/wow.min.js') }}"></script>
  <script src="{{ asset('/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/vendor/nivo-slider/js/jquery.nivo.slider.js') }}"></script>
  <script src="{{ asset('/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/vendor/venobox/venobox.min.js') }}"></script>
  

  <!-- Template Main JS File -->
  <script src="{{ asset('website/js/main.js')}}"></script>

<!-- Footer -->



</body>

</html>
