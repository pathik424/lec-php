<?php

if(isset($_REQUEST['register']))
{

	
    echo "Request Data"
	echo "<pre>";
	print_r($_REQUEST);
	echo "</pre>";
	
	// setcookie("email",$_REQUEST['email'],time()+3600,"");
	// setcookie("password",$_REQUEST['password'],time()+3600,"");
}

?>








<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v10 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<!-- <body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="#" method="post" id="myform">
				<div class="form-left">
					<h2>Employee Registration Form</h2>
					<div class="form-row">
						<select name="title">
						    <option class="option" value="title">Title</option>
						    <option class="option" value="title">Admin</option>
						    <option class="option" value="businessman">Faculty</option>
						    <option class="option" value="reporter">Trustee</option>
						    <option class="option" value="secretary">HR</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="first_name" id="first_name" class="input-text" placeholder="First Name" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="last_name" id="last_name" class="input-text" placeholder="Last Name" required>
						</div>
					</div>
					<div class="form-row">
						<select name="position">
						    <option value="position">Faculty Main Subject</option>
						    <option value="director">Maths</option>
						    <option value="manager">Accounts</option>
						    <option value="employee">Economics</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-row">
						<input type="text" name="company" class="company" id="company" placeholder="Educationional Background" required>
					</div>
					<div class="form-group">
						<div class="form-row form-row-3">
							<input type="text" name="business" class="business" id="business" placeholder="Last Company Name" required>
						</div>
						<div class="form-row form-row-4">
							<select name="employees">
							    <option value="employees">Expereience</option>
							    <option value="trainee">Fresher</option>
							    <option value="colleague">1 year</option>
							    <option value="colleague">2 years</option>
							    <option value="colleague">3 years</option>
							    <option value="colleague">4 years</option>
							    <option value="associate">5 years</option>
							    <option value="associate">5+ years</option>
							    <option value="associate">10+ years</option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					</div>
				</div>
				<div class="form-right">
					<h2>Contact Details</h2>
					<div class="form-row">
						<input type="text" name="street" class="street" id="street" placeholder="Street + Nr" required>
					</div>
					<div class="form-row">
						<input type="text" name="additional" class="additional" id="additional" placeholder="Additional Information" required>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="zip" class="zip" id="zip" placeholder="Zip Code" required>
						</div>
						<div class="form-row form-row-2">
							<select name="place">
							    <option value="place">Place</option>
							    <option value="Street">Street</option>
							    <option value="District">District</option>
							    <option value="City">City</option>
							</select>
							<span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>
					</div>
					<div class="form-row">
						<select name="country">
						    <option value="country">Country</option>
						    <option value="Vietnam">Vietnam</option>
						    <option value="Malaysia">Malaysia</option>
						    <option value="India">India</option>
						</select>
						<span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="code" class="code" id="code" placeholder="Code +" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="phone" class="phone" id="phone" placeholder="Phone Number" required>
						</div>
					</div> -->
					<div class="form-row">
						<input type="text" name="email" id="email" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Your Email">
					</div>
					<div class="form-row">
						<input type="text" name="password" id="password" class="input-text" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="Enter Password">
					</div>
					<!-- <div class="form-checkbox">
						<label class="container"><p>I do accept the <a href="#" class="text">Terms and Conditions</a> of your site.</p>
						  	<input type="checkbox" name="checkbox">
						  	<span class="checkmark"></span>
						</label>
					</div> -->
					
					<button type="submit" name="Register">Register</button>
				
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>