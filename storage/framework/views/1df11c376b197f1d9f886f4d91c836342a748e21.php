

<?php $__env->startSection('content'); ?>
    <!-- Page Header -->
    
   <header class="masthead" style="background-image: url(<?php echo e(asset('/image/20512813.jpg')); ?>)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1></h1>
                        <span class="subheading"><!-- Have questions? I have answers. --></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
       
    
         <section class="site-section testimonial-wrap" id="testimonials-section" data-aos="fade">
          <div class="container">
            <div class="row mb-5 py-2">
              <div class="col-12 text-center">
                <h2 class="section-title mb-3 py-3" style="color: #2e3192"><?php echo e(trans('app.development loan')); ?></h2>
                <hr class="mx-auto" style="background-color:#ffde01!important; opacity:1; height:5px; width:130px;">
              </div>
            </div>
          </div>
          <div class="container rtl">
              <div class="row text-black mt-1 ">
                  <div class="col-md-4">
                 <div class="form-group">
                          <label class="form-label" for="lt"><?php echo e(trans('app.development loan')); ?></label>
                          <select class="form-select form-control" name="lt" id="lt">
                        <option value="industrial"><?php echo e(trans('app. industrial development')); ?></option>
               
                              <option value="commercial"><?php echo e(trans('app.commercial development')); ?></option>
                                  <option value="Gas"><?php echo e(trans('app.Gas station development')); ?></option>
                                    <option value="contractors"><?php echo e(trans('app.development contractors ')); ?></option>
                          </select>
               
                      </div>
                  </div>

                  <div class="col-md-4">
               <div class="form-group">
                        <label class="form-label" for="lp"><?php echo e(trans('app.Loan period')); ?></label>
                        <select class="form-select form-control" name="lp" id="lp" >
                            <option value="Excellent"><?php echo e(trans('app.Excellent grade')); ?>(ceiling of 300 million)</option>
                            <option value="First"><?php echo e(trans('app.First class')); ?>(million . ceiling)</option>
                            <option value="second"><?php echo e(trans('app.second degree')); ?>(million . ceiling)</option>
                             <option value="third"><?php echo e(trans('app.third degree')); ?>(50 million ceiling)</option>
                                 <option value="fourth"><?php echo e(trans('app.fourth degree')); ?></option>
                        </select>
                        
                      </div>

                  </div>
                  <div class="col-md-4">
                     <div class="form-group">

 <label class="form-label" for="lp"><?php echo e(trans('app.Loan period')); ?></label>
                        <select class="form-select form-control" name="lp" id="lp" >
                            <option value="Excellent"><?php echo e(trans('app. my quarter')); ?></option>
                            <option value="First"><?php echo e(trans('app.Monthly')); ?></option>
                            <option value="second"><?php echo e(trans('app.half of me')); ?></option>
                             <option value="third"><?php echo e(trans('app.annual')); ?></option>
                                 <option value="fourth"><?php echo e(trans('app.fourth degree')); ?></option>
                        </select>
                           </div>
                  </div>
                  <div class="col-md-4">
                      <label class="form-label" for="lp"><?php echo e(trans('app.Loan period')); ?></label>
                        <select class="form-select form-control" name="lp" id="lp" >
                            <option value="Excellent"><?php echo e(trans('app.one year')); ?></option>
                            <option value="First"><?php echo e(trans('app.two year')); ?></option>
                            <option value="second"><?php echo e(trans('app.three year')); ?></option>
                             <option value="third"><?php echo e(trans('app.four year')); ?></option>
                            <option value="fourth"><?php echo e(trans('app.five year')); ?></option>
                             <option value="fourth"><?php echo e(trans('app.six year')); ?></option>
                             <option value="fourth"><?php echo e(trans('app.seven year')); ?></option>
                            <option value="fourth"><?php echo e(trans('app.eight year')); ?></option>
                            <option value="fourth"><?php echo e(trans('app.nine year')); ?></option>
                            <option value="fourth"><?php echo e(trans('app.ten year')); ?></option>
                        </select>
                           </div>
                                                    <div class="col-md-4">
                     <div class="form-group">
 <label class="form-label" for="loan_profit"><?php echo e(trans('app.Loan amount')); ?></label>
                          <div class="input-group">
                            <input class="form-control" type="number" name="loan_profit" id="loan_profit" >
                            <div class="input-group-text"><?php echo e(trans('app.sp')); ?></div>
                          </div>
  </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 my-2">
                      <button id="calc_btn" class="mx-auto btn btn-primary mb-2" ><?php echo e(trans('app.Calculate')); ?></button>
                    </div>
                   
                  </div>
                  <hr class="bg-primary">
                  <div class="row py-5">
                      <div class="col-md-6">
                        
                        
                        <label class="form-label" for="lc"><?php echo e(trans('app.LOAN CAPITAL')); ?></label>
                          <div class="input-group">
                            <input class="form-control" type="number" name="lc" id="lc" disabled>
                            <div class="input-group-text"><?php echo e(trans('app.sp')); ?></div>
                          </div>
                          
                      </div>
            
                        
                        
                      
                          <div class="input-group">
                            <input class="form-control" type="hidden" name="la" id="la" disabled>
                            
                          </div>
                 

                 
                        
                        
                    
                          <div class="input-group">
                            <input class="form-control" type="hidden" name="up" id="up" disabled>
                           
                       
                      </div>
                      <div class="col-md-6">
                        
                        
                        <label class="form-label" for="li"><?php echo e(trans('app.LOAN INSTALLMENT')); ?></label>
                          <div class="input-group">
                            <input class="form-control" type="number" name="li" id="li" disabled>
                            <div class="input-group-text"><?php echo e(trans('app.sp')); ?></div>
                          </div>
                          
                      </div>
                  </div>
              </div>



              
              
              <div class="container rtl">
              
                 <div class="col-12 text-center">
                <h2 class="section-title mb-3 py-3" style="color: #2e3192"><?php echo e(trans('app.calculating the profit')); ?></h2>
                <hr class="mx-auto" style="background-color:#ffde01!important; opacity:1; height:5px; width:130px;">
              </div>
                <div class="row text-black mt-1 ">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="loan_amount" class="form-label"><?php echo e(trans('app.LOAN AMOUNT')); ?></label>
                      <input type="number" name="loan_amount" id="loan_amount" class="form-control">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="loan_period " class="form-label"><?php echo e(trans('app.Loan period')); ?></label>
                      <select type="number" name="loan_period  " id="loan_period" class="form-control form-select">
                           <option value="5"><?php echo e(trans('app.5 years')); ?></option>
                            <option value="6"><?php echo e(trans('app.6 years')); ?></option>
                            <option value="7"><?php echo e(trans('app.7 years')); ?></option>
                        
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="loan_type " class="form-label"><?php echo e(trans('app.Loan Type')); ?></label>
                      <select type="number" name="loan_type  " id="loan_type" class="form-control form-select">
                        <option value="civ"><?php echo e(trans('app.civilian')); ?></option>
                        <option value="mil"><?php echo e(trans('app.military')); ?></option>
                        <option value="ret"><?php echo e(trans('app.retired')); ?></option>
                        <option value="fre"><?php echo e(trans('app.Free')); ?></option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 my-2">
                    <button id="calc_btn_profit" class="mx-auto btn btn-primary mb-2" ><?php echo e(trans('app.Calculate')); ?></button>
                  </div>
                </div>
                
                <hr class="bg-rimary">

                <div class="row py-5">
                  <div class="col-md-4">
                    <label class="form-label" for="loan_profit"><?php echo e(trans('app.Loan Profit')); ?></label>
                          <div class="input-group">
                            <input class="form-control" type="number" name="loan_profit" id="loan_profit" disabled>
                            <div class="input-group-text"><?php echo e(trans('app.sp')); ?></div>
                          </div>
                  </div>
                </div>
              </div>
          </div>
        </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('website.template.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\n.hajjar\Documents\html\resources\views/website/calc.blade.php ENDPATH**/ ?>