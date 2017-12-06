<?php $__env->startSection('Content'); ?>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>QUẢN LÝ ỨNG VIÊN</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <!-- /. ROW  --> 
                <div class="row text-center pad-top">
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="<?php echo e(route('list.candidate')); ?>" >
 <i class="fa fa-circle-o-notch fa-5x"></i>
                      <h4>Ứng viên</h4>
                      </a>
                      </div>
                     
                  </div> 
                 
                  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                      <div class="div-square">
                           <a href="<?php echo e(route('list.user')); ?>" >
 <i class="fa fa-envelope-o fa-5x"></i>
                      <h4>User</h4>
                      </a>
                      </div>   
                  </div>  
                </div>
                 <!-- /. ROW  -->         
            </div>
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>