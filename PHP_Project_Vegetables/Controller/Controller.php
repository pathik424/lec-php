<?php


// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";



class controller

{

public $baseurl = "http://localhost/lec-php/PHP_Project_Vegetables/assets/";
    
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

                case "/products":
                   require_once("view/header.php"); 
                   require_once("view/products.php"); 
                   require_once("view/footer.php"); 
                break;

                case "/blog":
                    require_once("view/header.php"); 
                    require_once("view/blog.php"); 
                    require_once("view/footer.php"); 
                 break;

                 case "/features":
                    require_once("view/header.php"); 
                    require_once("view/features.php"); 
                    require_once("view/footer.php"); 
                 break;

                 case "/testimonial":
                    require_once("view/header.php"); 
                    require_once("view/testimonial.php"); 
                    require_once("view/footer.php"); 
                 break;

                 case "/contact":
                    require_once("view/header.php"); 
                    require_once("view/contact.php"); 
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

