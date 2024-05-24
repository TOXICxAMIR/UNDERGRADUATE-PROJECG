<?php
session_start();
require("config.php");
////code
 
if(!isset($_SESSION['auser']))
{
	header("location:index.php");
}

//// code insert
//// add code
$error="";
$msg="";
if(isset($_POST['add']))
{
	
	$title=$_POST['title'];
	$content=$_POST['content'];
	$ptype=$_POST['ptype'];
	$Model=$_POST['Model'];
	$petrolcapacity=$_POST['petrolcapacity'];
	$passengerscapacity=$_POST['passengerscapacity'];
	$seat=$_POST['seat'];
	$stype=$_POST['stype'];
	$dieselcapacity=$_POST['dieselcapacity'];
	$Mileagecovered=$_POST['Mileagecovered'];
	$color=$_POST['color'];
	$price=$_POST['price'];
	$city=$_POST['city'];
	$asize=$_POST['asize'];
	$loc=$_POST['loc'];
	$state=$_POST['state'];
	$status=$_POST['status'];
	$uid=$_SESSION['uid'];
	$feature=$_POST['feature'];
	$transmission=$_POST['transmission'];
	$bodytype=$_POST['bodytype'];
	$doors=$_POST['doors'];
	
	$CountryofMade=$_POST['CountryofMade'];

	$isFeatured=$_POST['isFeatured'];
	
	$aimage=$_FILES['aimage']['name'];
	$aimage1=$_FILES['aimage1']['name'];
	$aimage2=$_FILES['aimage2']['name'];
	$aimage3=$_FILES['aimage3']['name'];
	$aimage4=$_FILES['aimage4']['name'];
	

	
	$temp_name  =$_FILES['aimage']['tmp_name'];
	$temp_name1 =$_FILES['aimage1']['tmp_name'];
	$temp_name2 =$_FILES['aimage2']['tmp_name'];
	$temp_name3 =$_FILES['aimage3']['tmp_name'];
	$temp_name4 =$_FILES['aimage4']['tmp_name'];
	

	
	move_uploaded_file($temp_name,"admin/property/$aimage");
	move_uploaded_file($temp_name1,"admin/property/$aimage1");
	move_uploaded_file($temp_name2,"admin/property/$aimage2");
	move_uploaded_file($temp_name3,"admin/property/$aimage3");
	move_uploaded_file($temp_name4,"admin/property/$aimage4");
	
	
	$sql="insert into vehicle (title,pcontent,type,Model,stype,petrol_capacity,diesel_capacity,passengers_capacity,Mileage_covered,seat,color,size,price,location,city,state,feature,pimage,pimage1,pimage2,pimage3,pimage4,uid,status,transmission,body_type,doors,Country_of_Made,isFeatured)
	values('$title','$content','$ptype','$Model','$stype','$petrolcapacity','$dieselcapacity','$passengerscapacity','$Mileagecovered','$seat','$color','$asize','$price',
	'$loc','$city','$state','$feature','$aimage','$aimage1','$aimage2','$aimage3','$aimage4','$uid','$status','$transmission','$bodytype','$doors','$CountryofMade', '$isFeatured')";
	$result=mysqli_query($con,$sql);
	if($result)
		{
			$msg="<p class='alert alert-success'>Vehicle Inserted Successfully</p>";
					
		}
		else
		{
			// $error="<p class='alert alert-warning'>Vehicle Not Inserted Some Error</p>";
			$error="<p class='alert alert-warning'>Vehicle Not Inserted: " . mysqli_error($con) . "</p>";
		}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>LM HOMES | Vehicles</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
    </head>
    <body>

		
			<!-- Header -->
			<?php include("header.php"); ?>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col">
								<br>
								<h3 class="page-title">Vehicle</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Vehicle</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Add Vehicle Details</h4>
								</div>
								<form method="post" enctype="multipart/form-data">
								<div class="card-body">
									<h5 class="card-title">Vehicle Detail</h5>
									<?php echo $error; ?>
									<?php echo $msg; ?>
									
									<div class="row">
											<div class="col-xl-12">
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Title</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="title" required placeholder="Enter Title">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-2 col-form-label">Content</label>
													<div class="col-lg-9">
														<textarea class="tinymce form-control" name="content" rows="10" cols="30"></textarea>
													</div>
												</div>
												
											</div>
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Vehicle Type</label>
													<div class="col-lg-9">
														<select class="form-control" required name="ptype">
															<option value="">Select Type</option>
												            <option value="lexus">lexus</option>
												            <option value="Range Rover">Range Rover</option>
												            <option value="Corolla">Corolla</option>
												            <option value="Camry">Camry</option>
												            <option value="Tesla">Tesla</option>
												            <option value="Nissan">Nissan</option>
                                                            <option value="Audi">Audi</option>
                                                            <option value="BMW">BMW</option>
                                                            <option value="Mercedes">Mercedes</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Selling Type</label>
													<div class="col-lg-9">
														<select class="form-control" required name="stype">
															<option value="">Select Status</option>
															<option value="rent">Rent</option>
															<option value="sale">Sale</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Diesel Capacity</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="dieselcapacity" required placeholder="Enter Diesel Capacity">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Mileage Covered</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="Mileagecovered" required placeholder="Enter Mileage Covered">
													</div>
												</div>
												
											</div>   
											<div class="form-group row">
													<label class="col-lg-3 col-form-label">Model</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="Model" required placeholder="Enter Model Number">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Petrol Capacity</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="petrolcapacity" required placeholder="Enter Petrol Capacity">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Passenger Capacity</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="passengerscapacity" required placeholder="Enter Passenger Capacity">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">seat</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="seat" required placeholder="Enter number seat  (only no 1 to 10)">
													</div>
												</div>
												
											</div>
										</div>
										<h5 class="text-secondary">Price & Location</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">color</label>
													<div class="col-lg-9">
														<select class="form-control" required name="color">
															<option value="">Select color</option>
															<option value="red">red</option>
															<option value="white">white</option>
															<option value="black">black</option>
															<option value="blue">blue</option>
															<option value="silver">silver</option>
														</select>
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Price</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="price" required placeholder="Enter Price">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">City</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="city" required placeholder="Enter City">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">State</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="state" required placeholder="Enter State">
													</div>
												</div>
											</div>
											<div class="form-group row">
													<label class="col-lg-3 col-form-label">Country Of Made</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="CountryofMade" required placeholder="Enter Country of Made">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Car Size</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="asize" required placeholder="Enter Car Size (in mm)">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Address</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="loc" required placeholder="Enter Address">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">transmission</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="transmission" required placeholder="Enter transmission">
													</div>
												</div>
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Body Type</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="bodytype" required placeholder="Enter Body Type">
													</div>
												</div>

												<div class="form-group row">
													<label class="col-lg-3 col-form-label">doors</label>
													<div class="col-lg-9">
														<input type="text" class="form-control" name="doors" required placeholder="Enter number of doors">
													</div>
												</div>
											</div>
										</div>
										
										<div class="form-group row">
											<label class="col-lg-2 col-form-label">Feature</label>
											<div class="col-lg-9">
											<p class="alert alert-danger">* Important Please Do Not Remove Below Content Only Change <b>Yes</b> Or <b>No</b> or Details and Do Not Add More Details</p>
											
											<textarea class="tinymce form-control" name="feature" rows="10" cols="30">
												<!---feature area start--->
												<div class="col-md-4">
														<ul>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Vehicle Age : </span>3 Years</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Passenger Space : </span>4</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">ABS : </span>Yes</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Bluetooth : </span>Yes</li>
														</ul>
													</div>
													<div class="col-md-4">
														<ul>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Type : </span>lexus</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Security : </span>Yes</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Petrol Capacity : </span>62 litre</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Remote Locking  : </span>Yes</li>
														
														</ul>
													</div>
													<div class="col-md-4">
														<ul>
														<li class="mb-3"><span class="text-secondary font-weight-bold">3rd Party : </span>No</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Air Conditioner : </span>Yes</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Power Window : </span>Yes</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Satellite Navigation : </span>Yes</li>
														</ul>
													</div>
												<!---feature area end---->
											</textarea>
											</div>
										</div>
												
										<h5 class="text-secondary">Image & Status</h5><hr>
										<div class="row">
											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 2</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage2" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 4</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage4" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Status</label>
													<div class="col-lg-9">
														<select class="form-control"  required name="status">
															<option value="">Select Status</option>
															<option value="available">Available</option>
															<option value="sold out">Sold Out</option>
														</select>
													</div>
												</div>

											<div class="col-xl-6">
												
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">Image 1</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage1" type="file" required="">
													</div>
												</div>
												<div class="form-group row">
													<label class="col-lg-3 col-form-label">image 3</label>
													<div class="col-lg-9">
														<input class="form-control" name="aimage3" type="file" required="">
													</div>
												</div>
											</div>
										</div>

										<hr>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group row">
													<label class="col-lg-3 col-form-label"><b>Is Featured?</b></label>
													<div class="col-lg-9">
														<select class="form-control" required name="isFeatured">
															<option value="">Select...</option>
															<option value="0">No</option>
															<option value="1">Yes</option>
														</select>
													</div>
												</div>
											</div>
										</div>

										
											<input type="submit" value="Submit Property" class="btn btn-info"name="add" style="margin-left:200px;">
										
								</div>
								</form>
							</div>
						</div>
					</div>
				
				</div>			
			</div>
			<!-- /Main Wrapper -->

		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		<script src="assets/plugins/tinymce/tinymce.min.js"></script>
		<script src="assets/plugins/tinymce/init-tinymce.min.js"></script>
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>

</html>