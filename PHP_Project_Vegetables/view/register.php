
<?php

// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";


?>



<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
ob_start();
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
$OTP = rand(1000,9999);
if (isset($_REQUEST['Submit'])) {
    $mail->isSMTP();                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                     // Enable SMTP authentication
    $mail->Username   = 'p4pathik424@gmail.com';                     //SMTP username
    $mail->Password   = 'fmxrbwdsonafxzgl';  // your password 2step varified 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;                
    $mail->Port = 587;     //587 is used for Outgoing Mail (SMTP) Server.
    $mail->setFrom('p4pathik424@gmail.com', 'Millenium Schoool');
    $mail->addAddress($_REQUEST['email']);   // Add a recipient
    $mail->isHTML(true);  // Set email format to HTML
    
    // : OTP : $OTP
    $bodyContent = "<h1 style='color:Black;'>Welcome to The Millennium School</h1>";
    $bodyContent .= '<p>Congratulations and welcome to the team! We are excited to have you at [company name]. We know you’re going to be a valuable asset to our company and are looking forward to the positive impact you’re going to have here.</p>';
    $bodyContent .= '<p>We also want to welcome you to [city, state, town, etc.]! I’ve attached a list of resources our team put together to help you settle in. You’ll find recommendations on everything from schools and daycare centers to restaurants, neighborhoods and fitness centers. Please let me know if you need more assistance with your relocation.</p>';
    $bodyContent .= '<p>We are looking forward to your start date of Monday, July 13. Please arrive by 9:30 a.m. at [office location] and park anywhere in our parking lot. Once you arrive, check in with Mary at the reception desk. I’ll meet you in the lobby to give you a tour of the office, introduce you to the team and set you up at your workstation</p>';
    $bodyContent .= '<p>If you have any questions before Monday, feel free to email or call me at [direct line number]. I’m also happy to answer any questions you have about life in [city, state, town, etc.].</p>';
    $bodyContent .= '<p>Looking forward to working with you!</p>';
    $bodyContent .= '<p>[Manager signature]</p>';
    // $bodyContent .= "<h1 style='color:red;'>welcome to mail send session</h1>";
    $bodyContent .= "<img src='https://tmsnoidaextension.com/blog/wp-content/uploads/2022/01/gr-noida-overview.jpg' alt='' height='400px' width='400px'>";
// 

    $mail->Body    = $bodyContent."<br>".$_REQUEST["body"];
    $mail->Subject = 'Thanks For Signing up & Welcome to our team';
    if(!$mail->send()) {
      echo 'Message was not sent.';
      echo 'Mailer error: ' . $mail->ErrorInfo;
    } else {
      echo 'Message has been sent.';
    }
  }    
?>


<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <!-- Body of Form starts -->
  	<div class="container">
      <form method="post" autocomplete="on">
        <!--First name-->
    		<div class="box">
          <label for="firstName"  class="fl fontLabel"> Full Name: </label>
    			<div class="new iconBox">
            <i class="fa fa-user" aria-hidden="true"></i>
          </div>
    			<div class="fr">
    					<input type="text" name="full_name" placeholder="Full Name"
              class="textBox" autofocus="on" required>
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--First name-->


        <!--Second name-->
    		<div class="box">
          <label for="UserName" class="fl fontLabel"> User Name: </label>
    			<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="user_name" placeholder="User Name" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Second name-->


    		<!---Phone No.------>
    		<div class="box">
          <label for="phone" class="fl fontLabel"> Phone No.: </label>
    			<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="text" required name="phone_no" maxlength="10" placeholder="Phone No." class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Phone No.---->


    		<!---Email ID---->
    		<div class="box">
          <label for="email" class="fl fontLabel"> Email ID: </label>
    			<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="email" required name="email_id" placeholder="Email Id" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Email ID----->


    		<!---Password------>
    		<div class="box">
          <label for="password" class="fl fontLabel"> Password </label>
    			<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="Password" required name="password" placeholder="Password" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Password---->

    		<!-- -Gender---
    		<div class="box radio">
          <label for="gender" class="fl fontLabel"> Gender: </label>
    				<input type="radio" name="Gender" value="Male" required> Male &nbsp; &nbsp; &nbsp; &nbsp;
    				<input type="radio" name="Gender" value="Female" required> Female
    		</div> -->
    		<!---Gender--->


    		<!-- Terms and Conditions------>
    		<!-- <div class="box terms">
    				<input type="checkbox" name="Terms" required> &nbsp; I accept the terms and conditions
    		</div> -->
    		<!--Terms and Conditions---- -->



    		<!---Submit Button------>
    		<div class="box" style="background: #2d3e3f">
    				<input type="Submit" name="register" class="submit" value="SUBMIT">
    		</div>
    		<!---Submit Button----->
            <h6>Already have an account? <a href="login">Login now</a></h6>
      </form>
  </div>
  <!--Body of Form ends--->
  </body>
</html>

<style>
    *{
	padding: 0;
	margin: 0;
}
body{
  background: url(http://wrbbradio.org/wp-content/uploads/2016/10/grey-background-07.jpg) no-repeat center fixed;
  background-size: cover;
}

.container{
	background: #2d3e3f;
	width: 350px;
	height: 400px;
	padding-bottom: 20px;
	position: absolute;
	top:50%;
	left: 50%;
	transform: translate(-50%, -50%);
	margin: auto;
  padding: 70px 50px 20px 50px;
}


.fl{
	float: left;
  width: 110px;
  line-height: 35px;
}

.fontLabel{
  color: white;
}

.fr{
	float: right;
}

.clr{
	clear: both;
}

.box{
	width: 360px;
	height: 35px;
	margin-top: 10px;
	font-family: verdana;
	font-size: 12px;
}

.textBox{
	height: 35px;
	width: 190px;
	border: none;
  padding-left: 20px;
}

.new{
  float: left;
}

.iconBox{
	height: 35px;
	width: 40px;
	line-height: 38px;
	text-align: center;
  background: #ff6600;
}

.radio{
	color: white;
	background: #2d3e3f;
	line-height: 38px;
}

.terms{
	line-height: 35px;
	text-align: center;
	background: #2d3e3f;
	color: white;
}

.submit{
	float: right;
	border: none;
	color: white;
	width: 110px;
	height: 35px;
	background: #ff6600;
	text-transform: uppercase;
  cursor: pointer;
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */

}


</style>