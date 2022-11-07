@extends('website.template.master')

@section('content')
<div id="home" class="slider-area">
    <div class="bend niceties ">
      <div >
    
        <img src="{{asset('/image/dd.png')}}" alt="" title="#slider-direction-1" style="width: 100%" />
          <div class="centered">
{{trans('app.pppp')}}</div>
                </div>
  

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow animate__slideInDown animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
              

                <!-- layer 2 -->
                <div class="layer-1-2 wow animate__fadeIn animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
               
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow animate__slideInUp animate__animated" data-wow-duration="2s" data-wow-delay=".2s">
               
              
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>



@endsection
<style type="text/css">

.centered {
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size:40px;
  height: 100px;
}
</style>