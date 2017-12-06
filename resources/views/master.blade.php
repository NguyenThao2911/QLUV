<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      @include('head')
</head>
<body>
       
    <div id="wrapper">
         @include('header')
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="active-link">
                        <a href="{{route('trangchu')}}" ><i class="fa fa-desktop "></i>Trang chủ<span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="{{route('list.candidate')}}"><i class="fa fa-table "></i>Ứng viên<span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="{{route('list.user')}}"><i class="fa fa-edit "></i>User<span class="badge">Included</span></a>
                    </li>               
                </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        
        @yield('Content')
      </div>
   @include('footer')
          

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
