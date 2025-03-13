<?php
 include('config.php');


 if (isset($_POST['submit'])) {

    $Nom = $_POST['Nom'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $Message = $_POST['Message'];
    

   $insert_data = "INSERT INTO contact(nom,email,sujet,Massage) VALUES ('$Nom', '$email','$subject','$Message')";

    
            $run_data = mysqli_query($con, $insert_data);

            if ($run_data) {
            
                header('location:index-2.html');
            } else {
                echo "Data not insert";
            }
  }

 ?>

<!doctype html>
<html class="no-js" lang="en">
	
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Contact | ENSAKH Industry</title>
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
                                    <li><a href="#"><i class="fa fa-map-marker"></i> BP 77 Bd Beni Amir, Khouribga</a></li>
                                    <li class="hidden-sm"><a href="#"><i class="fa fa-clock-o"></i> Lundi-Mardi:10:00-18:00</a></li>
                                    <li><a href="#"><i class="fa fa-envelope"></i> EnsaKh@Industry.com</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i> +212554665422</a></li>
                                </ul>  
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
										
											<li><a href="contact.html">contacts</a></li>
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
										
										<li><a class="pagess" href="services.html ">Services</a>
								
										</li>
										<li><a class="pagess" href="project-2.html">Projects</a>
											
										</li>
										
										<li><a href="contact.html">contacts</a></li>
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
                                <h3>Contact us</h3>
                            </div>
                            <ul>
                                <li class="home-bread">Home</li>
                                <li>Contact</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
         <!-- Start contact Area -->
        <div class="map-area">
            <div class="container">
                <div class="row">
                    <!-- Start contact icon column -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <!-- Start Map -->
                        <div class="map-main">
                            <div id="googleMap" style="width:100%;height:450px;"></div>
                        </div>
                        <!-- End Map -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Start contact Area -->
        <div class="contact-page area-padding">
            <div class="container">
                <div class="row">
                   <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-head">
                            <h3>Contactez-nous</h3>
                            <p>L'acceptation universelle du site Web a donné aux commerçants une formidable opportunité d'effectuer des transactions transfrontalières instantanément et à moindre coût.</p>
                            <div class="contact-icon">
								<div class="contact-inner">
									<h5>Location :</h5>
									<a href="#"><i class="fa fa-map"></i><span>BP 77 Bd Beni Amir, Khouribga </span></a>
									<a href="#"><i class="fa fa-phone"></i><span>+212554665422</span></a>
									<a href="#"><i class="fa fa-envelope"></i><span>EnsaKh@Industry.com</span></a>
								</div>
							</div>
                        </div>
                    </div>
                    <!-- End contact icon -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form">
                            <div class="row">
                                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="Nom" class="form-control" placeholder="Nom" >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="email" class="form-control"  placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject" >
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="Message" rows="7" placeholder="Message" class="form-control" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    
                                    <input style="margin-left: 20px;" type="submit"  class="contact-btn" value="Submit"> 
                                </form>  
                            </div>
                        </div>
                    </div>
                    <!-- End contact Form -->
                </div>
            </div>
        </div>
        <!-- Start Footer bottom Area -->
        <footer>
            <div class="footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-5 col-xs-12">
                            <div class="footer-content">
                                <div class="footer-head">
                                    <div class="footer-logo">
                                    	<a href="#"><img src="img/logo/logo2.png" alt=""></a>
                                    </div>
                                    <p>
                                    Vous recherchez des conseils professionnels pour votre nouvelle entreprise. Profitez de l'occasion . <br> Soyez les Bienvenue!.
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
                                    Cherchez-vous des conseils professionnels pour votre nouvelle entreprise. Soyez les Bienvenue !
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

		<!-- jquery latest version -->
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
		<!-- bootstrap js -->
		<script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBceNl50o3BU6LrsIGJxSL9tKKvqBKIeVs"></script>
        <script src="js/mapcode.js"></script>
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