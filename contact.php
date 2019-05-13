<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>NL Technologie</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
     <?php
        include('header.php');
    ?>
    <!--End Main Header -->
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/contact.png">
    	<div class="auto-container">
        	<h1></h1>
            <ul class="page-breadcrumb">
            	<li><a href="index.php">Accueil</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<h2>Renseingement</h2>
            <div class="text">Vous pouvez utiliser le formulaire de contact ci-dessous pour toute demande de
 renseingement.</div>
        	<div class="row clearfix">
            	<!--Form Column-->
            	<div class="form-column col-md-6 col-sm-12 col-xs-12">
                	
                    <!--Contact Form-->
                    <div class="contact-form">
                        <form method="post" action="sendemail.php" id="contact-form">
                            <!--Form Group-->
                            <div class="form-group">
                                <input type="text" name="nom" value="" placeholder="Votre nom.*" required>
                            </div>
                        	<!--Form Group-->
                            <div class="form-group">
                                <input type="email" name="email" value="" placeholder="Votre adresse email.*" required>
                            </div>
                            <!--Form Group-->
                            <div class="form-group">
                                <input type="text" name="Titre" value="" placeholder="Titre*" required>
                            </div>
                            <!--Form Group-->
                            <div class="form-group">
                                <textarea name="message" placeholder="Votre message.*" ></textarea>
                            </div>
                            <!--Form Group-->
                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-two">Envoyer Message</button>
                            </div>
                        </form>
                    </div>
                    <!--Contact Form-->
                    
                </div>
                <!--Info Column-->
                <div class="info-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<ul>
                        	<li><span>Adresse:</span>Anjanahary II 137 101 <br>Antananarivo-Madagascar </li>
                            <li><span>Tel:</span>+261 34 58 880 22</li>
                            <li><span>email:</span>contact@nl-technology.org</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Contact Section-->
    
    <!--Map Section-->
    <!--<section class="map-section">-->
        <!--Map Outer-->
        <!--<div class="map-outer">-->
            <!--Map Canvas-->
            <!--<div class="map-canvas"
                data-zoom="12"
                data-lat="-37.817085"
                data-lng="144.955631"
                data-type="roadmap"
                data-hue="#ffc400"
                data-title="Envato"
                data-icon-path="images/icons/map-marker.png"
                data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div>
        </div>
    </section>-->
    <!--End Map Section-->
    
    <!--Main Footer-->
     <?php
        include('footer.php');
    ?>
    <!--End Main Footer-->
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/validate.js"></script>
<script src="js/script.js"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
</body>
</html>