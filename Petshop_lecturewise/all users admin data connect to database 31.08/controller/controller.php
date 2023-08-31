<?php

require_once("model/model.php"); // model file attached kari //

class controller extends model // model.php connect karayu //

{



public $baseurl = "http://localhost/lec-php/PHP_Project_Petshop/assets/"; // url banavi ne php ni darek file ma jaine 
public $adminurl = "http://localhost/lec-php/PHP_Project_Petshop/assets/admin/"; // url banavi ne php ni darek file ma jaine for admin file
    public function __construct() // construct lakhso to to direct call thaijase//

    {

     parent::__construct(); // jo be construct hoy biji file ma to a lakhvu je pehla first batavu hoy to//
    //  echo "<pre>";
    //  print_r($_SERVER);
    //  echo "</pre>";
        
        if(isset($_SERVER['PATH_INFO'])) // server ma create path_info karvu hoy to//
        {
        switch (($_SERVER['PATH_INFO'])) { // server ma create path_info karvu hoy to//
            
            
            case '/home': //page connection//
                require_once("view/header.php");
                require_once("view/home.php");
                require_once("view/footer.php");
                break;

            case '/about':
                 require_once("view/header.php");
                 require_once("view/about.php");
                 require_once("view/footer.php");
                 break;

            case '/service':
                 require_once("view/header.php");
                 require_once("view/service.php");
                 require_once("view/footer.php");
                 break;

            case '/product':
                 require_once("view/header.php");
                 require_once("view/product.php");
                 require_once("view/footer.php");
                 break;

            case '/price':
                 require_once("view/header.php");
                 require_once("view/price.php");
                 require_once("view/footer.php");
                 break;

            case '/team':
                 require_once("view/header.php");
                 require_once("view/team.php");
                 require_once("view/footer.php");
                 break;

            case '/testimonial':
                 require_once("view/header.php");
                 require_once("view/testimonial.php");
                 require_once("view/footer.php");
                 break;

            case '/blog':
                 require_once("view/header.php");
                 require_once("view/blog.php");
                 require_once("view/footer.php");
                 break;

            case '/detail':
                 require_once("view/header.php");
                 require_once("view/detail.php");
                 require_once("view/footer.php");
                 break;

            case '/contact':
                 require_once("view/header.php");
                 require_once("view/contact.php");
                 require_once("view/footer.php");
                 break;


          case '/admin-dashboard':
                 require_once("view/admin/adminheader.php");
                 require_once("view/admin/adminhome.php");
                 require_once("view/admin/adminfooter.php");
                 
                 break;
           
          case '/admin-users':
               $fetch = $this->select("pet_registration"); // data connect thase database jode admin portel ma show thase
               // echo "<pre>";
               // print_r($fetch);
               // echo "</pre>";
               // exit;
               if(isset($_REQUEST['delete_btn']))
               {
                    $this->delete("pet_registration","$_REQUEST[delete_btn]");
               }


               require_once("view/admin/adminheader.php");
                  require_once("view/admin/allusers.php");
                  require_once("view/admin/adminfooter.php");
                    
                    break;       


            case "/register":
               if(isset($_REQUEST['register']))
               {
                   $data = $_REQUEST; //database jode connectt karva mate model.php//
                   $this->register($data); //database jode connectt karva mate model.php//
               //     echo "<pre>";
               //     print_r($_REQUEST);
               //     echo "</pre>";
               }
                 require_once("view/register.php"); 
                 break;

                 case '/login':
                 
                         $data = $_REQUEST;
                         $this->login($data);
                
                         require_once("view/login.php");
               
                    break;

          //   case '/logout':
          //                require_once("view/header.php");
          //                require_once("view/home.php");
          //                require_once("view/footer.php");
          //                break;
            
       
        }
    }

    else{
        header("location:home"); // server ma create path_info karvu hoy to//
    }
}
}

$obj = new controller; // run karayu inheritancee//
