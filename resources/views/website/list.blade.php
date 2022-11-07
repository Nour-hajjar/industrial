@extends('website.template.master')

@section('content')
    <!-- Page Header -->
     <header class="masthead" style="background-image: url({{ asset('/image/faq.jpg') }})">
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
<section id="faq" class="faq">
  <div class="container ">
          <div class="row">
        

        <div class="section-headline section-title1">
          <h2>{{ trans('app.faq') }}</h2>
            <p class="star">
            </p>
        
</div>
   
        <ul class="faq-list" data-aos="fade-up">
      @foreach($master_questions as $question)
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
    </section><!-- End Frequently Asked Questions Section -->
    @endsection()