<?php


if(isset($_REQUEST['login']))
{
    if($_REQUEST['email'] == $_COOKIE['email'] && $_REQUEST['Password'] == $_COOKIE['Password'])
    {
      echo "Partyyyyyyyy";
    }  
else {

  echo "<script>alert('No Parttyyyyyy')</script>";
}

}

// echo "<pre>";
//  print_r($_REQUEST);
//  echo "</pre>";



?>










<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Transparent Login Form UI</title>
    <link rel="stylesheet" href="style.css">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="bg-img">
      <div class="content">
        <header>Student Login</header>
        <form action="#" method="post">
          <div class="field">
            <span class="fa fa-user"></span>
            <input type="text" required placeholder="Email" name="email">
          </div>
          <div class="field space">
            <span class="fa fa-lock"></span>
            <input type="password" class="pass-key" required placeholder="Password" name="Password">
            <span class="show">SHOW</span>
          </div>
          <div class="pass">
            <a href="#">Forgot Password?</a>
          </div>
          <div class="field">
            <input type="submit" value="LOGIN" name="login">
          </div>
        </form>
        
        </div>
        </div>
      </div>
    </div>

    <script>
      const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });
    </script>


  </body>
</html>
