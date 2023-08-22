<?php

if(isset($_REQUEST['register']))
{


		
		// echo "<pre>";
		// print_r($_REQUEST);
		// echo "</pre>";

	setcookie("name",$_REQUEST['name'],time()+3600,"");
  setcookie("email",$_REQUEST['email'],time()+3600,"");
  setcookie("user-id",$_REQUEST['user-id'],time()+3600,"");
  setcookie("Password",$_REQUEST['Password'],time()+3600,"");
  
  header("location:studentlogin.php");
}
?>





<body>
<Form action="" method="post">

  <section>
    
    <div class="form-box">
      
      <div class="form-value">
        
        <form method="post">

          <h2>Register Page</h2>

          <div class="inputbox">

            <ion-icon name="mail-outline"></ion-icon>

            <input type="Name" name="name">

            <label>Name</label>

          </div>


          <div class="inputbox">

            <ion-icon name="mail-outline"></ion-icon>

            <input type="email" name="email">

            <label>Email</label>

          </div>
          
          <div class="inputbox">

            <ion-icon name="lock-closed-outline"></ion-icon>

            <input type="User-id" name="user-id">

            <label>User-id</label>

          </div>
          <div class="inputbox">

            <ion-icon name="lock-closed-outline"></ion-icon>

            <input type="password" name="Password">

            <label>Password</label>
            
          </div>
          
          
          
          
          <button name="register">Sign up</button>
          
          <div class="register">
            
            <p>Don't have an account? <a href="#">123</a></p>
            
          </div>
          
        </form>
        
      </div>
      
    </div>
    
  </section>
</Form>
  
  <!-- ion-icon installation: Start -->

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>

  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <!--ion-icon installation: End-->

</body>

<style>

* {
  margin: 0;

  padding: 0;

  font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
    "Lucida Sans", Arial, sans-serif;
}

section {
  display: flex;

  justify-content: center;

  align-items: center;

  min-height: 120vh;

  width: 100%;

  background: url("https://i.postimg.cc/SxB07GjW/beach-bg.jpg") no-repeat;

  background-position: center;

  background-size: cover;
}

.form-box {
  position: relative;

  width: 400px;

  height: 500px;

  background: transparent;

  border: none;

  border-radius: 20px;

  backdrop-filter: blur(15px) brightness(80%);

  display: flex;

  justify-content: center;

  align-items: center;
}

h2 {
  font-size: 2em;

  color: #fff;

  text-align: center;
}

.inputbox {
  position: relative;

  margin: 30px 0;

  width: 310px;

  border-bottom: 2px solid #fff;
}

.inputbox label {
  position: absolute;

  top: 50%;

  left: 5px;

  transform: translateY(-50%);

  color: #fff;

  font-size: 1em;

  pointer-events: none;

  transition: 0.5s;
}

/* animations: start */

input:focus ~ label,
input:valid ~ label {
  top: -5px;
}

/* animation:end */

.inputbox input {
  width: 100%;

  height: 50px;

  background: transparent;

  border: none;

  outline: none;

  font-size: 1em;

  padding: 0 35px 0 5px;

  color: #fff;
}

.inputbox ion-icon {
  position: absolute;

  right: 8px;

  color: #fff;

  font-size: 1.2em;

  top: 20px;
}

.forget {
  margin: -10px 0 17px;

  font-size: 0.9em;

  color: #fff;

  display: flex;

  justify-content: space-between;
}

.forget label input {
  margin-right: 3px;
}

.forget a {
  color: #fff;

  text-decoration: none;
}

.forget a:hover {
  text-decoration: underline;
}

button {
  width: 100%;

  height: 40px;

  border-radius: 40px;

  background-color: #fff;

  border: none;

  outline: none;

  cursor: pointer;

  font-size: 1em;

  font-weight: 600;
}

.register {
  font-size: 0.9em;

  color: #fff;

  text-align: center;

  margin: 25px 0 10px;
}

.register p a {
  text-decoration: none;

  color: #fff;

  font-weight: 600;
}

.register p a:hover {
  text-decoration: underline;
}

/* Responsiveness:Start */
@media screen and (max-width: 480px) {
  .form-box {
    width: 100%;
    border-radius: 0px;
  }
}
/* Responsiveness:End */


</style>