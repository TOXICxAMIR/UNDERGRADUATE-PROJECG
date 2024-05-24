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
                            <h3 style="color: black;">FAQs</h3>   
                            <ul class="ExploreBuying ps-3">
                <li><i class="i-svg icon-arrow"></i>1) What is the monthly rent?<br>
                Answer: The monthly rent for the property is based on the location and type of real estates it is, it is  better to contact agent to know more about that particular real estates</li>
                <li><i class="i-svg icon-arrow"></i>2) Are utilities included in the rent? <br>
                Answer: Utilities such as water and trash are included in the rent. Tenants are responsible for electricity and gas.
            </li>
                <li><i class="i-svg icon-arrow"></i>3) Is the property pet-friendly? <br>
                Answer: Yes, this property is pet-friendly. However, a pet deposit and monthly pet rent may apply.
            </li>
                <li><i class="i-svg icon-arrow"></i>4) Are there any additional fees or charges? <br>
                Answer: There are no additional fees or charges apart from the rent and security deposit.
            </li>
                <li><i class="i-svg icon-arrow"></i>5) What is the lease term? <br>
                Answer: The lease term for this property is 12 months.
            </li>
                <li><i class="i-svg icon-arrow"></i>6) Are there any restrictions on guests or visitors? <br>
                Answer: There are no specific restrictions on guests or visitors, but we request that tenants notify us of any long-term guests staying for more than a week.
            </li>
            </li>
                <li><i class="i-svg icon-arrow"></i>7) What appliances are included? <br>
                Answer: The property comes with (list of appliances such as refrigerator, dishwasher, stove/oven, microwave, washer, dryer, etc.).
            </li>
            </li>
                <li><i class="i-svg icon-arrow"></i>8) What is the neighborhood like? <br>
                Answer: The neighborhood is (insert description of the neighborhood such as quiet, family-friendly, close to parks, shopping centers, etc.).
            </li>
            </li>
                <li><i class="i-svg icon-arrow"></i>9) How soon can I move in? <br>
                Answer: Move-in dates are subject to approval after the application process is completed. Typically, tenants can move in within (insert timeframe, e.g., 1-2 weeks) after approval.
            </li>
            </li>
                <li><i class="i-svg icon-arrow"></i>10) What happens if I need to break the lease early?<br>
                Answer: Breaking the lease early may incur penalties or require you to pay rent until a new tenant is found. Please refer to the lease agreement for details on early termination.
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