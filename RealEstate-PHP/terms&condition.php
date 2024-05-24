<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");								
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Real Estate PHP">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
<link rel="shortcut icon" href="images/favicon.ico">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!-- Css Link -->

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- Title -->
<title>Real Estate PHP</title>
</head>
<body>


<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	About Our Company -->
        <div class="full-row">
            <div class="container">
                            <h3 style="color: black;">Terms And Condition</h3>   
                            <ul class="ExploreBuying ps-3">
                <li><i class="i-svg icon-arrow"></i>1) Rental Agreement:<br>
                Outline the agreement between the company and the renter, including the rental period, rates, and payment terms.</li>
                <li><i class="i-svg icon-arrow"></i>2) Vehicle Usage:<br>
                Specify how the vehicle can be used, such as for personal use only, not for commercial purposes, and restrictions on where the vehicle can be driven (e.g., within certain geographic areas).
            </li>
                <li><i class="i-svg icon-arrow"></i>3) Insurance:<br>
                Clarify the insurance coverage for the vehicle, including any optional insurance that the renter can purchase for additional protection.
            </li>
                <li><i class="i-svg icon-arrow"></i>4) Driver Requirements: <br>
                Detail the requirements for drivers, such as minimum age, valid driver's license, and any restrictions on additional drivers.
            </li>
                <li><i class="i-svg icon-arrow"></i>5) Security Deposit: <br>
                Explain the security deposit amount, how it will be held, and the conditions under which it will be refunded.
            </li>
                <li><i class="i-svg icon-arrow"></i>6) Fuel Policy: <br>
                Describe the fuel policy, such as whether the vehicle should be returned with a full tank or if the company will charge for fuel.
            </li>
            </li>
                <li><i class="i-svg icon-arrow"></i>7)Maintenance and Repairs: <br>
                Clarify the responsibilities for maintenance and repairs, including reporting any damage to the vehicle during the rental period.
            </li>
            </li>
                <li><i class="i-svg icon-arrow"></i>8) Late Returns and Penalties: <br>
                Outline the consequences of late returns, including additional charges and penalties.
            </li>
            </li>
                <li><i class="i-svg icon-arrow"></i>9) Cancellation Policy: <br>
                Specify the cancellation policy, including any fees for canceling reservations within a certain timeframe.
            </li>
            </li>
                <li><i class="i-svg icon-arrow"></i>10) Privacy Policy:<br>
                Detail how the company will handle personal information collected from renters, in compliance with relevant privacy laws.
            </li>
            </ul>
            </div>
        </div>
        <!--	About Our Company -->        
        
       <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/greensock.js"></script> 
<script src="js/layerslider.transitions.js"></script> 
<script src="js/layerslider.kreaturamedia.jquery.js"></script> 
<!--jQuery Layer Slider --> 
<script src="js/popper.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="js/tmpl.js"></script> 
<script src="js/jquery.dependClass-0.1.js"></script> 
<script src="js/draggable-0.1.js"></script> 
<script src="js/jquery.slider.js"></script> 
<script src="js/wow.js"></script> 
<script src="js/jquery.cookie.js"></script> 
<script src="js/custom.js"></script>
</body>

</html>