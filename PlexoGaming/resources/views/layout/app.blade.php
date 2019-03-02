<!DOCTYPE html>
<html lang="en">

<head>

    <!-- important meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Title -->
    <title>{{config('app.name','Plexo')}}</title>
    
    

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/logo/Plexo Logo.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl-carousel/owl.theme.default.min.css">

    <!-- Responsive Tabs CSS -->
    <link rel="stylesheet" href="css/responsive-tabs/responsive-tabs.min.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup/magnific-popup.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate/animate.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

    <style>
    .bg {
  background:transparent;
}
        </style>

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="65">

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    <!-- Header -->
    <header>
            <nav class="navbar navbar-fixed-top">
                <div class="container-fluid">
                    <div class="site-nav-wrapper">
    
                        <div class="navbar-header">
    
                            <!-- Mobile Menu Open Button -->
                            <span id="mobile-nav-open-btn">&#9776;</span>
    
                            <img src="img/logo/Plexo-Logo---Final-27th-Nov2.png" alt="">
                        </div>
    
                        <!-- Main Menu -->
                        <div  class="container" >
                            <div class="collapse navbar-collapse ">
                                <ul class="nav navbar-nav pull-right">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PLAY <span class="caret"></span></a>
                                     
                                        <ul class="dropdown-menu">
                                          
                                          <li role="separator" class="divider"></li>
                                          <li><a href="/PlexoGaming/public/wager">WAGERS</a></li>
                                          <li role="separator" class="divider"></li>
                                          <li><a href="/PlexoGaming/public/tournament">TOURNAMENTS</a></li>
                                        </ul>
                                      </li>
                                  
                                    
                                    <li><a class="" href="/PlexoGaming/public/leaderboard">LEADERBOARD</a></li>
                                    <li><a class="" href="/PlexoGaming/public/support">SUPPORT</a></li>
                                    <li><a class="" href="/PlexoGaming/public/shop">SHOP</a></li>
                                    <li><a class="" href=""></a></li>
                                    <li><a class="" href=""></a></li>
                                    <li><a class="" href=""></a></li>
                                    <li><a class="" href=""></a></li>
                                    <li><a class="" href=""></a></li>
                                    <li><a class="" href=""></a></li>
                                    <li><a class="" href=""></a></li>
                                    <li><a class="" href=""></a></li>
                                    
                                    <li class="ml-4"><a class="" href="/PlexoGaming/public/login">LOGIN</a></li>
                                    <li><a class="" href="/PlexoGaming/public/signup">SIGNUP</a></li>
                                </ul>
                              
                             
                            
                              
                            
                            </div>
                        </div>
    
                        <!-- Mobile Menu -->
                        <div id="mobile-nav">
                            <!-- Mobile Menu Close Button -->
                            <span id="mobile-nav-close-btn">&times;</span>
    
                            <div id="mobile-nav-content">
                                <ul class="nav">
                                        <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PLAY <span class="caret"></span></a>
                                             
                                                <ul class="dropdown-menu">
                                                  
                                                  <li role="separator" class="divider"></li>
                                                  <li><a href="/PlexoGaming/public/wager">WAGERS</a></li>
                                                  <li role="separator" class="divider"></li>
                                                  <li><a href="/PlexoGaming/public/gameselection">TOURNAMENTS</a></li>
                                                </ul>
                                              </li>
                                    <li><a class="" href="/PlexoGaming/public/leaderboard">LEADERBOARD</a></li>
                                    <li><a class="" href="/PlexoGaming/public/support">SUPPORT</a></li>
                                    <li><a class="" href="/PlexoGaming/public/shop">SHOP</a></li>
                                   
                                </ul>
                                <ul class="nav navbar-nav ml-auto">
                                    <a href="/PlexoGaming/public/login">
                                    <button type="button" class="btn btn-info ">LOGIN</button>
                                    </a>  
                          
                                    <a href="/PlexoGaming/public/signup" class="ml-2">
                                        <button type="button" class="btn btn-info">SIGNUP</button>
                                        </a>
                                  </ul>
                            </div>
                        </div>
    
                    </div>
                </div>
            </nav>
        </header>
    <!-- Header Ends -->

  @yield ('content')

   <!-- Footer  -->
   <footer class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>
                    Copyright &copy; 2019 All Rights Reserved By <span>PLEXO</span>
                </p>
            </div>
        </div>
    </div>

   

</footer>
<!-- Footer Ends -->

<!-- JQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap JS -->
<script src="js/bootstrap/bootstrap.min.js"></script>

<!-- Owl Carousel JS -->
<script src="js/owl-carousel/owl.carousel.min.js"></script>

<!-- Waypoints -->
<script src="js/waypoints/jquery.waypoints.min.js"></script>

<!-- Responsive Tabs JS -->
<script src="js/responsive-tabs/jquery.responsiveTabs.min.js"></script>

<!-- Isotope -->
<script src="js/isotope/isotope.pkgd.min.js"></script>

<!-- Magnific Popup -->
<script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Counter -->
<script src="js/counter/jquery.counterup.min.js"></script>

<!-- Google Map JS -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9EdV2JfPG1Vfviw9gf_HlblIUfs7Ie2E"></script>

<!-- Easing -->
<script src="js/easing/jquery.easing.1.3.min.js"></script>

<!-- WOW JS -->
<script src="js/wow/wow.min.js"></script>

<!-- Custom JS -->
<script src="js/script.js"></script>
</body>

</html>