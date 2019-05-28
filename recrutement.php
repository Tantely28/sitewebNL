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
    <section class="page-title" style="background-image:url(images/background/recrutement.png)">
    	<div class="auto-container">
        	<h1></h1>
            <ul class="page-breadcrumb">
                <li style="font-weight: bold; font-size: 20px; text-shadow: 1px 2px 5px #000000 "><a href="index.php">Accueil</a></li>
                <li>Recrutement</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Gallery Section-->
    <section class="gallery-section">
    	<div class="auto-container">
        	
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                
                
                
                <div class="filter-list row clearfix">
					
                    <!--Gallery Item Two-->
                    <div class="gallery-item-two mix all col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="images/recrutement/chef de projet.jpg" alt="">
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="recrutement-detail.php" class="link"><span class="icon flaticon-unlink"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            <h3><a href="recrutement-detail.php">Chef de projet</a></h3>
                            <div class="text">15/04/2019</div>
                        </div>
                    </div>
                    
                    
    			</div>
            </div>
        </div>
    </section>
    <!--End Gallery Section-->
    
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
<script src="js/mixitup.js"></script>
<script src="js/script.js"></script>
</body>
</html>