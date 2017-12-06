<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <?php echo $__env->make('head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
       
    <div id="wrapper">
         <?php echo $__env->make('header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="active-link">
                        <a href="<?php echo e(route('trangchu')); ?>" ><i class="fa fa-desktop "></i>Trang chủ<span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('list.candidate')); ?>"><i class="fa fa-table "></i>Ứng viên<span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('list.user')); ?>"><i class="fa fa-edit "></i>User<span class="badge">Included</span></a>
                    </li>               
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        
        <?php echo $__env->yieldContent('Content'); ?>
      </div>
   <?php echo $__env->make('footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
