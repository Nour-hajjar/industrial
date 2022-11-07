@extends('website.template.master')

@section('content')
    <!-- Page Header -->
      <header class="masthead" style="background-image: url({{ asset('/image/ee.jpg') }})">
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
                <h2>{{trans('app.directory')}}</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start Left Blog -->
    
            <!-- End Left Blog-->
            <!-- Start Left Blog -->


     <section id="featured" class="featured">
      <div class="container">

        <div class="row">
           @foreach($services as $service)
          <div class="col-lg-4 mt-4 mt-lg-0">
  
            <div class="icon-box">
              <i class="icofont-image"></i>
      
              <p>
    <br>{{trans('app.name')}}: {{  App::isLocale('ar') ? $service->title_a:$service->title }}
  <br>{{trans('app.mobile')}}: {{ $service->mobile }}
  <br>{{trans('app.fax')}}:{{ $service->fax }}
  <br>{{trans('app.location')}}:{{ App::isLocale('ar') ? $service->location_a:$service->location }}
  <br>{{trans('app.manager')}}:{{ App::isLocale('ar') ? $service->manager_a:$service->manager }}</p>

            </div>

          </div>
        @endforeach
        </div>
      
      </div>
    </section>
          
          

           
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
<style>
div.a {
  position: relative;
  width: 450px;
  height: 200px;

 background-color:#3EC1D5;
}

div.b {
  position: absolute;
/*  top: 30px;
  left:20px;*/
  background-color:white;
  width: 450px;
  height: 200px;
/*  padding:10px;*/
  

} 

 
</style>