<?php


if(isset($_REQUEST['submit']))
{
 if($_REQUEST['name'] == $_COOKIE['name'] && $_REQUEST['password'] == $_COOKIE['password'])
{
    echo "successfull Login";
    header("location:home.php");
}
else
{
    echo "<script>alert('unsucessfull Login)</script>";
}
}
?>



<div class="wrapper">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <form action="">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="username" name="name" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remeber">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forget password?</a>
            </div>
            <input type="submit" class="btn" value="submit" name="submit">
            <div class="register">
                <p>Don't have an account ? </p>
                <a href="#"> Register</a>
            </div>
        </form>
    </div>


    <style>

*{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            display: flex;
            align-items: center;
            background-image: url("https://res.cloudinary.com/ddysmogx8/image/upload/v1690310033/GettyImages-1177482693_viqlun.webp");
           background-size: cover;
           background-position: center;
            justify-content: center;
            height: 100vh;
            font-family: sans-serif;
        }
        .wrapper{
            width: 350px;
            height: auto;
           background: transparent;
            padding: 10px 15px;
            margin: 10px 0;
            position: relative;
            border: 1px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(12px);
            border-radius: 20px;
        }
        .wrapper h1{
            font-size: 25px;
            color: #FFF;
            text-align: center;
        }
        .wrapper .input-box{
            display: flex;
            width: 100%;
            padding: 10px 12px;
            position: relative;
        }
        .wrapper .input-box input{
            width: 100%;
            padding: 10px 12px;
            border-radius: 20px;
            border: none;
            outline: none;
           background: transparent;
            border-bottom: 1px solid #fff;
        }

        input::placeholder{
            color: #FFF;
        }
        .wrapper .input-box .bx{
            position: absolute;
            right: 20px;
            top: 20px;
            
            
        }
        .wrapper .remeber{
            display: flex;
            justify-content: space-between;
            margin:20px 0;
        }
        .wrapper .remeber a{
            text-decoration:none;
        }
        .wrapper .remeber:hover a{
            text-decoration: underline;
        }
        .btn{
            width: 100%;
            height: 40px;
            border-radius: 20px;
            outline: none;
            border: none;
            outline: none;
            font-weight: 500;
            box-shadow: 0px 0px 5px black;
            margin-bottom: 10px;
            
        }
        input[value="Login"]{
            font-weight: 500;
        }
        .wrapper .register{
            display: inline-flex;
            justify-content:space-around;
            margin-left: 45px;
        }
        .register p,a{
            text-decoration: none;
            color: #fff;
            font-size: 16px;
            word-spacing: 1px;
           
        }
        .register:hover a{
            text-decoration: underline;
        }
    </style>