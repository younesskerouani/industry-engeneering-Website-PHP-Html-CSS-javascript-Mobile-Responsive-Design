<?php
 include('config.php');

 

 if (isset($_POST['submit'])) {
     
    $Temps_de_production_planifie = $_POST['Temps_de_production_planifie'];
    $Temps_arrêt = $_POST['Temps_darrêt'];
    $temps_de_cycle_idéal = $_POST['temps_de_cycle_idéal'];
    $Nombre_de_pièces_total=$_POST['Nombre_de_pièces_total'];
    $Nombre_de_bonnes_pièces = $_POST['Nombre_de_bonnes_pièces'];

    $temps_d_exécution=$Temps_de_production_planifie-$Temps_arrêt;

    function disponibilite( float $temps_exec , float $Temps_planifie){
 
        return (float)($temps_exec/ $Temps_planifie);
    
      }
    
      function Performance(float $temps_de_cycle_idéal, float $Nombre_de_pièces_total, float $temps_d_exécution){
    
            return (float)($temps_de_cycle_idéal*$Nombre_de_pièces_total)/$temps_d_exécution;
      }
    
      function qualite(float $Nombre_de_bonnes_pièces, float $Nombre_de_pièces_total){
    
        return ($Nombre_de_bonnes_pièces/$Nombre_de_pièces_total);
      }
    
    
      function calculer_TRS(float $dispo ,float $Per ,float $qual )  {
    
        return (float)($dispo * $Per * $qual);
      
      }

 // disponibilite
 
  $disponibilite = disponibilite($temps_d_exécution,$Temps_de_production_planifie);
 
 //Performance

    $Performance = Performance( $temps_de_cycle_idéal, $Nombre_de_pièces_total, $temps_d_exécution);

  // qualite
        
    
    $qualite= qualite($Nombre_de_bonnes_pièces,$Nombre_de_pièces_total);

  // calculer TRS

      $TRS = calculer_TRS($disponibilite ,$Performance , $qualite );

    $insert_data = "INSERT INTO trs (disponibilite,performance,qualite,TRS) VALUES ('$disponibilite', '$Performance','$qualite','$TRS')";

    
    $run_data = mysqli_query($con, $insert_data);

    if ($run_data) {
      
        header('location:TRSshow.php');
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
                                            <li>Calculer TRS</li>  
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <!-- End breadcumb Area -->
        <!-- Welcome service area start -->

                    <div class="welcome-area bg-color area-padding">
                        <div class="container">
                            
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="section-headline text-center">
                                        <h3>Formule du TRS </h3>
                                        <p>Le TRS tient compte de toutes les pertes, ce qui donne une mesure du temps de fabrication réellement productif. Il est calculé comme ceci : <br>  </p>
                                    <br>  <p style="color: rgba(31, 209, 91, 0.692) ; font-weight: bold;">   TRS = Disponibilité × Performance × Qualité</p>
                                   <br>
                                   <p>Si les équations de la disponibilité, de la performance et de la qualité sont substituées dans l'équation ci-dessus et réduites à leur plus simple expression, le résultat est le suivant :</p>
                                   <br>  <p style="color: rgba(31, 209, 91, 0.692) ; font-weight: bold;">   TRS = (Nombre de bonnes pièces × Temps de Cycle Idéal) / Temps de Production Planifié</p>
                                   <br>
                                   <p>Il s'agit du premier calcul du TRS. Comme décrit auparavant, la multiplication du nombre de bonnes pièces par le temps de cycle idéal donne le temps de productivité totale (fabrication exclusivement de bonnes pièces, aussi vite que possible, sans temps d'arrêt).</p>

                                </div>
                                </div>
         
                                                                                        
                            </div>

                       </div>
                                            

                    </div>


                    <!----- start calculating -------------->
                    <div class="Services-area area-padding">
                        <div class="container">
            
                            <div class="row">

                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="section-headline text-center">
                                        
                                        <div class="subs-feilds">
                                            <div class="suscribe-input">
                            
                                                <button  class="add-btn" onclick="myFunct1()">Demarrer le calcul</button>
                                                
                                        </div>
                                        
                                        </div>
                                    </div>
                                </div>
   
                            </div>
                        </div>
                    </div>

                    <div id='hello' style="display: none;" class="faq-page-area area-padding" style="margin-left: 390px;">
                        <div class="container" >
                           
                                <!-- Start FAQ Start -->
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="faq-full">
                                        <div class="faq-details">
                                            <div class="panel-group" id="accordion">
                                                <!-- Panel Default -->
                                                <div class="panel panel-default">
                                                   
                                                    <div id="check1" class="panel-collapse collapse in">
                                                        <div class="panel-body">
                                                             <!-- Start Column Start -->
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="faq-content">
                                                            
                                                            <div class="faq-quote">
                                                                <div class="row">


                                                 <form  method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
                                                            <div class="col-md-12 col-sm-12 col-xs-12">

                                                                <h4>Saisir les données du Disponibilité:</h4>

                                                                <input type="text"  class="form-control"
                                                                name="Temps_de_production_planifie" placeholder="Temps de production planifié" >
                                                                <div class="help-block with-errors"></div>
                                                                <input type="text" class="email form-control"  name="Temps_darrêt" placeholder="Temps d'arrêt" >
                                                                <div class="help-block with-errors"></div>
                                                                
                                                                <br>

                                                                <h4>Saisir les données du Performance</h4>

                                                                <input type="text" id="name" class="form-control" name="temps_de_cycle_idéal" placeholder="temps de cycle idéal" >
                                                                                <div class="help-block with-errors"></div>
                                                                                <input type="text" class="email form-control"  name="Nombre_de_pièces_total" placeholder="Nombre de pièces total" >
                                                                                <div class="help-block with-errors"></div>
                                                                           

                                                                <h4>Saisir les données de qualité</h4>

                                                                <input type="text" id="name" class="form-control" name="Nombre_de_bonnes_pièces" placeholder="Nombre de bonnes pièces" >
                                                                <div class="help-block with-errors"></div>
                                                        
                                                              </div>
               
                                                            
                                                            
                                                                <input type="submit"  name="submit" class="quote-btn" value="Calculer" style="margin-left: 15px;">
                                                      
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                                <!-- End Column -->		
               </div>
           </div>
            </div>
                                                <!-- End Panel Default -->
                                               
                                            
                                                									
                                            </div>
                                        </div>
                                        <!-- End FAQ -->
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