

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
ob_start();
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
$OTP = rand(1000,9999);
if (isset($_REQUEST['signup'])) {
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

<?php


if(isset($_REQUEST['signup']))
{
  
  setcookie("name",$_REQUEST['name'],time()+3600,"");
  setcookie("email",$_REQUEST['email'],time()+3600,"");
    setcookie("password",$_REQUEST['password'],time()+3600,"");

header("location:login.php");

}

?>


<!DOCTYPE html>
<html lang="en">
  
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Register form</title>
</head>

<body>
  <main>
    <div class="circle"></div>
    <div class="register-form-container">
      <form action="">
        <h1 class="form-title">
          Registration
        </h1>
        <div class="form-fields">
          <div class="form-field">
            <input type="text" placeholder="Name"  name="name">
          </div>
          <div class="form-field">
            <input type="email" placeholder="Email" name="email" required>
          </div>
          <div class="form-field">
            <input type="password" placeholder="Password" name="password" required minlength="8" maxlength="128">
          </div>
        </div>
        <div class="form-buttons">
          <button class="button" name="signup">Sign up</button>
          <div class="divider">or</div>
          <a href="#" class="button button-google">Google</a>
        </div>
      </form>
    </div>
  </main>
</body>

</html>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
  font-family: "Roboto", sans-serif;
}
input {
  height: 45px;
  width: 100%;
  color: #3b5983;
  font-size: 14px;
  line-height: 16px;
  border: 2px solid #e9f2ff;
  border-radius: 5px;
  padding-left: 25px;
}
input:focus {
  outline: none;
  border: 2px solid #c1d9fd;
}
input:valid {
  border-color: greenyellow;
}
input:invalid {
  border-color: orange;
}
input:not(:focus):invalid {
  border-color: #c1d9fd;
}
main {
  background: #f1f5fe;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.circle {
  position: absolute;
  z-index: 1;
  width: 2534px;
  height: 2534px;
  border-radius: 50%;
  background: #f7faff;
  box-shadow: 0px 4px 70px 6px rgba(217, 229, 255, 0.25);
  animation-name: fadeCircle;
  animation-duration: 0.7s;
  animation-timing-function: ease-in-out;
  animation-delay: 0.3s;
  animation-iteration-count: 1;
  animation-fill-mode: forwards;
}
@keyframes fadeCircle {
  0% {
    width: 2534px;
    height: 2534px;
  }
  25% {
    width: 2000px;
    height: 2000px;
  }
  50% {
    width: 1500px;
    height: 1500px;
  }
  75% {
    width: 1000px;
    height: 1000px;
  }
  100% {
    width: 534px;
    height: 534px;
  }
}
.register-form-container {
  opacity: 0;
  position: relative;
  z-index: 2;
  max-width: 415px;
  width: 100%;
  background: #ffffff;
  box-shadow: 0px 6px 50px rgba(217, 229, 255, 0.7);
  border-radius: 20px;
  padding-left: 30px;
  padding-right: 30px;
  padding-top: 38px;
  padding-bottom: 38px;
  animation-name: fadeForm;
  animation-duration: 0.7s;
  animation-timing-function: ease-in-out;
  animation-delay: 1.4s;
  animation-iteration-count: 1;
  animation-fill-mode: forwards;
}
@keyframes fadeForm {
  0% {
    opacity: 0;
  }
  25% {
    opacity: 0.25;
  }
  50% {
    opacity: 0.5;
  }
  75% {
    opacity: 0.75;
  }
  100% {
    opacity: 1;
  }
}
.form-title {
  color: #30507d;
  font-weight: 500;
  font-size: 20px;
  line-height: 23px;
  margin-bottom: 38px;
}
.form-field {
  margin-bottom: 13px;
}
.button {
  width: 100%;
  font-weight: bold;
  font-size: 14px;
  display: block;
  height: 45px;
  background: #247fff;
  border-radius: 5px;
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  line-height: 45px;
  cursor: pointer;
  border: none;
}
.button:hover {
  background-color: #0d6cf2;
}
a.button {
  text-decoration: none;
}
.button-google {
  color: #c6cfdc;
  background: #f2f6ff;
}
.button-google:hover {
  background: #e2e6f0;
  color: #fff;
}
.divider {
  font-weight: 500;
  font-size: 12px;
  line-height: 14px;
  color: #405d87;
  text-align: center;
  padding-top: 25px;
  padding-bottom: 25px;
}


</style>