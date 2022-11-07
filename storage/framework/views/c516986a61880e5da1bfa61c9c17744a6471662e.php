<!DOCTYPE html>
<html lang="en">

<head>
<script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
<?php $__currentLoopData = $master_settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $master_setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <title><?php echo e(App::isLocale('ar') ? $master_setting->name_a :$master_setting->name_e); ?>

<?php echo e(App::isLocale('ar') ? $master_setting->name_a_1 :$master_setting->name_e_1); ?></title>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
 
       
<body dir="<?php echo e((App::isLocale('ar') ? 'rtl' : 'ltr')); ?>">


  
<link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>">
  
    <!-- Custom fonts for this template -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
           


  <!-- Vendor CSS Files -->

  <link href="<?php echo e(asset('/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
 
    
  <link href="<?php echo e(asset('/vendor/icofont/icofont.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('/vendor/animate.css/animate.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('/vendor/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('/vendor/nivo-slider/css/nivo-slider.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('/vendor/owl.carousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('/vendor/venobox/venobox.css')); ?>" rel="stylesheet">




    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('website/css/clean-blog.min.css')); ?>" rel="stylesheet">


</head>



<!-- Navigation -->

    
        <header id="header" class="fixed-top">
    <div class="container d-flex justify-content-between">

            <div class="logo">
           <img src="<?php echo e(asset('/image/logo_en1.png')); ?>" alt="" class="img-fluid">
    <!--     <h1 class="text-light"><a href="<?php echo e(url('/')); ?>"><span><?php echo e(App::isLocale('ar') ? $master_setting->name_a :$master_setting->name_e); ?></span><span> </span><?php echo e(App::isLocale('ar') ? $master_setting->name_a_1 :$master_setting->name_e_1); ?></a></h1> -->
      
       
      </div>


            <nav class="nav-menu d-none d-lg-block">
        <ul>
         <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('/')); ?>"><?php echo e(trans('app.home')); ?></a>
                </li>
                  <?php $__currentLoopData = $master_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('category/'. $category->slug)); ?>"><?php echo e(trans('app.nw')); ?></a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			   <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/page/branches')); ?>"> <?php echo e(trans('app.branches')); ?></a>
                    </li>
                        <li class="nav-item drop-down"><a href="#"><?php echo e(trans('app.directory')); ?></a>
                <ul><li>
                        <?php $__currentLoopData = $master_directives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $directive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 
                        <a class="nav-link" href="<?php echo e(url('directive/'. $directive->slug)); ?>"><?php echo e(App::isLocale('ar') ? $directive->name_a : $directive->name); ?></a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </ul>
               <?php ($pages= getPages()); ?>
                <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('page/' . $page->slug)); ?>"><?php echo e(App::isLocale('ar') ? $page->ar_title : $page->en_title); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('help')); ?>"><?php echo e(trans('app.service')); ?></a>
                </li>        
 <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('maillist/create')); ?>"><?php echo e(trans('app.maillis')); ?></a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('contact.show')); ?>"><?php echo e(trans('app.c')); ?></a>
                </li>
          
              <li class="nav-item drop-down"><a href="#"><?php echo e(trans('app.en')); ?></a>
                <ul><li>
                                <a class="nav-link" href="<?php echo e(url('/lang/en')); ?>">en</a>
                              </li>
                                <li class="nav-item">
                               <li> <a class="nav-link" href="<?php echo e(url('/lang/ar')); ?>"> ar</a>
                              </li>
                        
                         </ul>
        


        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header>
    </div>
</nav>

<?php echo $__env->yieldContent('content'); ?>


  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span><?php echo e(App::isLocale('ar') ? $master_setting->name_a :$master_setting->name_e); ?></span>  <?php echo e(App::isLocale('ar') ? $master_setting->name_a_1 :$master_setting->name_e_1); ?></h2>
                </div>
              <?php $__currentLoopData = $master_footers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <p><?php echo App::isLocale('ar') ? $footer->ar_details: $footer->en_details; ?></p>

                
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
                <h4><?php echo e(trans('app.a')); ?></h4>
                <div class="footer-contacts">
                  <p><span><?php echo e(trans('app.call')); ?>:</span><?php echo e($footer->tel); ?></p>
                  <p><span><?php echo e(trans('app.email')); ?>:</span><?php echo e($footer->email); ?></p>
                  <p><span> <?php echo e(trans('app.mail')); ?>: </span><?php echo e($footer->mailbox); ?></p>
                 <p><span>  <?php echo e(trans('app.fax')); ?> :</span><?php echo e($footer->fax); ?></p>
                
                  
                </div>
              </div>
            </div>
          </div>
         
          <!-- end single footer -->
          <div class="col-md-4">
            <div class="footer-content">
              <div class="footer-head">
                <h4><?php echo e(App::isLocale('ar') ? $master_setting->name_a :$master_setting->name_e); ?>  <?php echo e(App::isLocale('ar') ? $master_setting->name_a_1 :$master_setting->name_e_1); ?></h4>
                <div class="f">
                 <a href="#"><img src="<?php echo e(asset('/image/flogo.png')); ?>" alt=""></a>
            <div class="footer-contacts"> <p ><span> <?php echo e(trans('app.p')); ?> :</span>
                  <?php echo e(App::isLocale('ar') ? $footer->ar_location:$footer->en_location); ?></p></div><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                       <div class="footer-contacts">  <p ><span>  <?php echo e(trans('app.u')); ?>:</span><a href="http://www.e-gate.me/"> E-GATE </p></div>
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
  <script src="<?php echo e(asset('/vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/vendor/jquery.easing/jquery.easing.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/vendor/php-email-form/validate.js')); ?>"></script>
  <script src="<?php echo e(asset('/vendor/appear/jquery.appear.js')); ?>"></script>
  <script src="<?php echo e(asset('/vendor/knob/jquery.knob.js')); ?>"></script>
  <script src="<?php echo e(asset('/vendor/parallax/parallax.js')); ?>"></script>
  <script src="<?php echo e(asset('/vendor/wow/wow.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/vendor/nivo-slider/js/jquery.nivo.slider.js')); ?>"></script>
  <script src="<?php echo e(asset('/vendor/owl.carousel/owl.carousel.min.js')); ?>"></script>
  <script src="<?php echo e(asset('/vendor/venobox/venobox.min.js')); ?>"></script>
  

  <!-- Template Main JS File -->
  <script src="<?php echo e(asset('website/js/main.js')); ?>"></script>

<!-- Footer -->



</body>

</html>

<?php echo $__env->make(App::isLocale('en') ? 'layouts.style' : 'layouts.s', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\n.hajjar\Documents\html\resources\views/website/template/master.blade.php ENDPATH**/ ?>