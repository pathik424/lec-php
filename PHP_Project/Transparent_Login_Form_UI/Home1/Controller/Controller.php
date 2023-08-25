<?php


// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";



class controller

{
    public $baseurl = "http://localhost/lec-php/PHP_Project/Transparent_Login_Form_UI/Home1/assets/";  

    public function __construct()

    {
        if(isset($_SERVER['PATH_INFO']))
        {
            // echo "inside if";

        switch (($_SERVER['PATH_INFO'])) {
                
            case "/home":
                require_once("view/header.php"); 
                require_once("view/home.php"); 
                require_once("view/footer.php"); 
                break;

            case "/about":
                require_once("view/header.php"); 
                require_once("view/about.php"); 
                require_once("view/footer.php"); 
                break;

            case "/courses":
                require_once("view/header.php"); 
                require_once("view/courses.php"); 
                require_once("view/footer.php"); 
                break;

            case "/ourteam":
                require_once("view/header.php"); 
                require_once("view/ourteam.php"); 
                require_once("view/footer.php"); 
                break;

            case "/testi":
                require_once("view/header.php"); 
                require_once("view/testi.php"); 
                require_once("view/footer.php"); 
                break;

            case "/404":
                require_once("view/header.php"); 
                require_once("view/404.php"); 
                require_once("view/footer.php"); 
                break;

            case "/contact":
                require_once("view/header.php"); 
                require_once("view/contact.php"); 
                require_once("view/footer.php"); 
                break;

            case "/signup":
                 require_once("view/header.php"); 
                 require_once("view/signup.php"); 
                 require_once("view/footer.php"); 
                 break;  

             case "/login":
                 require_once("view/header.php"); 
                 require_once("view/login.php"); 
                 require_once("view/footer.php"); 
                 break;      
                        
            }
        }
        else {
            echo "Inside else";
            header("location:home");
        }
    }
    
}
$obj = new controller;

?>

