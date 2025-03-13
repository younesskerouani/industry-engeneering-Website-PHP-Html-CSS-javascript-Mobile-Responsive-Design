<?php
 
 include('config.php');

  
?>

<!doctype html>
<html class="no-js" lang="en">
	
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Services | calculer TRS</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->		
		<link rel="shortcut icon" type="image/x-icon" href="img/logo/favicon.ico">

		<!-- all css here -->

		<!-- bootstrap v3.3.6 css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.transitions.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/icon.css">
		<link rel="stylesheet" href="css/flaticon.css">
		<!-- magnific css -->
        <link rel="stylesheet" href="css/magnific.min.css">
		<!-- venobox css -->
		<link rel="stylesheet" href="css/venobox.css">
		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="css/responsive.css">

		<!-- modernizr css -->
		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	</head>
		<body>

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

        <div id="preloader"></div>
        <header class="header-one">
            <!-- Start top bar -->
            <div class="topbar-area fix hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class=" col-md-10 col-sm-9">
                            <div class="topbar-left">
                                <ul>
                                    <li><a href="#"><i class="fa fa-map-marker"></i> BP 77 Bd Beni Amir, Khouribga </a></li>
                                    <li class="hidden-sm"><a href="#"><i class="fa fa-clock-o"></i> Lundi-Mardi:10:00-18:00</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> EnsaKh@Industry.com</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i> +212554665422</a></li>
                                </ul>  
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-3">
                            <div class="quote-button">
								<a href="contact.php" class="quote-btn"  title="Quick view" data-toggle="modal" data-target="#quoteModal">Get a quote</a>
							</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End top bar -->
            <!-- header-area start -->
            <div id="sticker" class="header-area hidden-xs">
                <div class="container">
                    <div class="row">
                        <!-- logo start -->
                        <div class="col-md-3 col-sm-3 logo-bg"  style="margin-left: -80px;">
                            <div class="logo">
                                <!-- Brand -->
                                <a class="navbar-brand page-scroll sticky-logo" href="index-2.html">
                                    <img src="img/logo/logo2.png" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- logo end -->
                        <div class="col-md-9 col-sm-9">
                            <div class="header-right-link">
                                <!-- search option start -->
                                <form action="#">
                                    <div class="search-option">
                                        <input type="text" placeholder="Search...">
                                        <button class="button" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                    <a class="main-search" href="#"><i class="fa fa-search"></i></a>
                                </form>
                                <!-- search option end -->
                            </div>
                            <!-- mainmenu start -->
                            <nav class="navbar navbar-default">
                                <div class="collapse navbar-collapse" id="navbar-example">
                                    <div class="main-menu">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li><a class="pagess" href="index-2.html">Home</a>
												
											</li>
											
											<li><a class="pagess" href="services.html">Services</a>
												
											</li>
											<li><a class="pagess" href="project-2.html">Projects</a>
											
											</li>
										
											<li><a href="contact.php">contacts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!-- mainmenu end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-area end -->
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <div class="logo">
                                    <a href="index-2.html"><img src="img/logo/logo.png" alt="" /></a>
                                </div>
                                <nav id="dropdown">
                                    <ul>
                                        <li><a class="pagess" href="index-2.html">Home</a>
										
										</li>
										
										<li><a class="pagess" href="services.html">Services</a>
										
										</li>
										<li><a class="pagess" href="project-2.html">Projects</a>
										
										</li>
										
										<li><a href="contact.php">contacts</a></li>
                                    </ul>
                                </nav>
                            </div>					
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->		
        </header>
        <!-- header end -->
        <!-- Start breadcumb Area -->
                    <div class="page-area">
                        <div class="breadcumb-overlay"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="breadcrumb text-center">
                                        <div class="section-headline white-headline text-center">
                                            <h3>Nos services</h3>
                                        </div>
                                        <ul>
                                            <li class="home-bread">Home</li>
                                            <li class="home-bread">&nbsp; &nbsp;Services</li>
                                            <li>Resultat du TRS</li>  
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <!-- End breadcumb Area -->


         <!-- Start Counter Area -->

         <?php 
         $get_data = "SELECT * FROM `trs` WHERE id=(SELECT MAX(id) FROM `trs`)";

         $run_data = mysqli_query($con,$get_data);
     
         if($data = mysqli_fetch_array($run_data)){
     
             $disp =  $data['disponibilite'];
             $disponibilite = sprintf('%.2f',$disp);

             $Perf = $data['performance'];
             $Performance = sprintf('%.2f',$Perf);

             $qual = $data['qualite'];
             $qualite = sprintf('%.2f',$qual);

             $TRS = $data['TRS'];
             $Trs = sprintf('%.2f',$TRS);
             
     
          }
           ?> 
                <br> <br>
                <h3 style="text-align: center">RÉSULTAT:</h3>
                
         <div class="counter-area area-padding parallax-bg fix" data-stellar-background-ratio="0.6">
            <div class="container">
                <div class="row">
				   <div class="fun-content">
						<div class="col-md-3 col-sm-3 col-xs-6">
							<div class="fun_text">
								<span class="counter"><?php echo"$disponibilite";?></span>
								<h5> Disponibilite</h5>
							</div>
						</div>
						<!-- fun_text  -->
						<div class="col-md-3 col-sm-3 col-xs-6">
							<div class="fun_text">
								<span class="counter"><?php echo"$Performance";?></span>
								<h5>Performance</h5>
							</div>
						</div>
						<!-- fun_text  -->
						<div class="col-md-3 col-sm-3 col-xs-6">
							<div class="fun_text">
								<span class="counter"><?php echo"$qualite";?></span>
								<h5>Qualite</h5>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6">
							<div class="fun_text">
								<span class="counter"><?php echo"$Trs";?></span>
								<h5>TAUX DE RENDEMENT SYNTHÉTIQUE </h5>
							</div>
						</div>

					</div>
                </div>
                <!-- end Row -->
            </div>
        </div>
       

        

                    <!----- Restart calculating -------------->
                    <div class="Services-area area-padding">
                        <div class="container">
            
                            <div class="row">

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="section-headline text-center">
                                        
                                        <div class="subs-feilds">
                                            <div class="suscribe-input">
                                                <form method = "post" action="TRScalcule.php">
                                                <button  class="add-btn"  >Redemarrer le calcul</button>
                                                </form>
                                        </div>
                                        
                                        </div>
                                    </div>
                                </div>
   
                            </div>
                        </div>
                    </div>

                    
            
                    </div>  

                    
                    

                
  
                  

            
        <!-- Start Footer bottom Area -->
        <footer>
            <div class="footer-area" >
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <div class="footer-logo">
                                    	<a href="#"><img src="img/logo/logo2.png" alt=""></a>
                                    </div>
                                    <p>
                                        Are you looking for professional advice for your new business.Are you looking for professional advice for your new business.Are you looking for professional advice for your new business.
                                    </p>
                                    <div class="footer-icons">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-pinterest"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-3 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Services Link</h4>
                                    <div class="footer-services-link">
                                    <ul class="footer-list">
                                        <li><a href="#">
                                            Industrie</a></li>
                                        <li><a href="#">Construction </a></li>
                                        <li><a href="#">Mécanique</a></li>
                                        <li><a href="#">Ingénierie</a></li>
                                        <li><a href="#">Fabrication</a></li>
                                        <li><a href="#">Automobile</a></li>
                                    </ul>
                                    <ul class="footer-list hidden-sm">
                                        <li><a href="#">Gaz & pétrole</a></li>
                                        <li><a href="#">Énergie solaire</a></li>
                                        <li><a href="#">Ingénierie</a></li>
                                        <li><a href="#">Consulting</a></li>
                                        <li><a href="#">immobilier</a></li>
                                        <li><a href="#">Construction</a></li>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <h4>Subscribe</h4>
                                    <p>
                                        Are you looking for professional advice for your new business.Are you looking for professional advice for your new business
                                    </p>
                                    <div class="subs-feilds">
                                        <div class="suscribe-input">
                                            <input type="email" class="email form-control width-80" id="sus_email" placeholder="Type Email">
                                            <button type="submit" id="sus_submit" class="add-btn">Subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end single footer -->
                    </div>
                </div>
            </div>
            <!-- End footer area -->
            
        </footer>
		
		<!-- all js here -->

        <script>
            function myFunct1() {
                    var x = document.getElementById('hello');
                    if (x.style.display === "none") {
                        x.style.display = "block";
                    } else {
                        x.style.display = "none";
                    }
                    }
        </script>

		<!-- jquery latest version -->
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Counter js -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- waypoint js -->
		<script src="js/waypoints.js"></script>
		<!-- isotope js -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- stellar js -->
        <script src="js/jquery.stellar.min.js"></script>
		<!-- magnific js -->
        <script src="js/magnific.min.js"></script>
		<!-- venobox js -->
		<script src="js/venobox.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- Form validator js -->
		<script src="js/form-validator.min.js"></script>
		<!-- plugins js -->
		<script src="js/plugins.js"></script>
		<!-- main js -->
		<script src="js/main.js"></script>
	</body>

</html>

