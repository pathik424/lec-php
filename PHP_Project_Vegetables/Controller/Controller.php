<?php


// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";


require_once ("model/model.php");
class controller extends model

{

public $baseurl = "http://localhost/lec-php/PHP_Project_Vegetables/assets/";
public $adminurl = "http://localhost/lec-php/PHP_Project_Vegetables/assets/admin/";
    
    public function __construct()



    {

        parent::__construct();
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

                  $products =  $this->select('products');

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

                 case "/register":
                  if (isset($_REQUEST['register'])) {
                     
                     $data = $_REQUEST;
                     $this->register($data);
                  }




                  // require_once("view/header.php"); 
                  require_once("view/register.php"); 
                  // require_once("view/footer.php"); 
               break;

               case "/login":
                  // require_once("view/header.php");
                  // print_r($_REQUEST)
                  $data = $_REQUEST;
                  $this->login($data); 
                  require_once("view/login.php"); 
                  // require_once("view/footer.php"); 
               break;

               case '/admin-dashboard':
                  require_once("view/admin/adminheader.php");
                  require_once("view/admin/adminhome.php");
                  require_once("view/admin/adminfooter.php");
                  
                  break;

                  case '/admin-users':
                  $fetch = $this->select('fruit_register');
                     // echo "<pre>";
                     // print_r($fetch);
                     // echo "</pre>";
                     // exit;
                     if(isset($_REQUEST['delete_btn']))
                     {
                        $this->delete("fruit_register","$_REQUEST[delete_btn]");
                     }

                     require_once("view/admin/adminheader.php");
                     require_once("view/admin/allusers.php");
                     require_once("view/admin/adminfooter.php");
                     
                     break;

                     
               case '/admin-update':

                  if(isset($_REQUEST['update_btn']))
                  {
                     $response = $this->selectwhere ("fruit_register","$_REQUEST[update_btn]");
                     
                                       require_once("view/admin/adminheader.php");
                                       require_once("view/admin/updateuser.php");
                                       require_once("view/admin/adminfooter.php");        
                  }
                  else if(isset($_REQUEST['update']))
 {

   $data = array(
      "full_name" => $_REQUEST["full_name"],
      "user_name" => $_REQUEST["user_name"],
      "phone_no" => $_REQUEST["phone_no"],
      "email_id" => $_REQUEST["email_id"],
      "password" => $_REQUEST["password"],
      "role_as" => $_REQUEST["role_as"]);
      
      $response = $this->update("fruit_register",$data,$_REQUEST['update']);
      header("location:admin-users");
   }
   else
               {
                   header("location:admin-dashbaord");
               }
   break;

























                    
   case '/admin-add-product':

      if(isset($_REQUEST['add']))
      {
           echo "<pre>";
           print_r($_REQUEST);
           print_r($_FILES);
           echo "</pre>";

           $image = "upload/products/".time().$_FILES['image']["name"];
           move_uploaded_file($_FILES['image']['tmp_name'],$image);
           
           $data =array(
           
           "description" => $_REQUEST['description'],     
           "price" => $_REQUEST['price'],     
           "image" => $image     

           );



           $this->insert("products",$data);
      }


      require_once("view/admin/adminheader.php");
      require_once("view/admin/addproduct.php");
      require_once("view/admin/adminfooter.php");
      
      break;

    case '/admin-products':

            $products = $this->select("products");
           //  echo "<pre>";
           //  print_r($products);
           //  echo "</pre>";
           //  exit;
           if(isset($_REQUEST['delete_btn']))
           {
                $this->delete("products","$_REQUEST[delete_btn]");
           }
            

           require_once("view/admin/adminheader.php");
           require_once("view/admin/adminproduct.php");
           require_once("view/admin/adminfooter.php");
           
           break;


// ____________PRODUCT

           case '/admin-add-veg':

                if(isset($_REQUEST['add']))
                {
                     // echo "<pre>";
                     // print_r($_REQUEST);
                     // print_r($_FILES);
                     // echo "</pre>";
 
                     $image = "upload/product/".time().$_FILES['image']["name"];
                     move_uploaded_file($_FILES['image']['tmp_name'],$image);
                     
                     $data =array(
                     
                     "description" => $_REQUEST['description'],     
                     "price" => $_REQUEST['price'],     
                     "image" => $image     
 
                     );
 
 
 
                     $this->insert("products",$data);
                }
 
 
                require_once("view/admin/adminheader.php");
                require_once("view/admin/addproduct.php");
                require_once("view/admin/adminfooter.php");
                
                break;
 
              case '/admin-product':
     
                      $treat = $this->select("products");
                     //  echo "<pre>";
                     //  print_r($products);
                     //  echo "</pre>";
                     //  exit;
                     if(isset($_REQUEST['delete_btn']))
                     {
                          $this->delete("products","$_REQUEST[delete_btn]");
                     }
                      
 
                     require_once("view/admin/adminheader.php");
                     require_once("view/admin/adminproduct.php");
                     require_once("view/admin/adminfooter.php");
                     
                     break;

                     case '/admin-updateproduct': // for update user data
                          if(isset($_REQUEST['update-tr'])) // update-btn allusers ma click kare to
                          {
                          //    echo "<pre>";
                             $response = $this->selectwhere("products",$_REQUEST["update-tr"]); // data connect karva mate selectwhere qquery in model 
                          //    print_r($response);
                          //    echo "</pre>";
                          //    exit;
                             
                             require_once("view/admin/adminheader.php");
                             require_once("view/admin/updateproduct.php");
                             require_once("view/admin/adminfooter.php");     
                          }
                          else if(isset($_REQUEST['update'])) // update user nu click karva mate update button from updateuser form
                          {  
                                    //  echo "<pre>";
                                    //  print_r($_REQUEST);
                                    //  print_r($_FILES);
                                    //  echo "</pre>"; 
                                    //  exit;
                             
                                   if($_FILES['image']['error'] == UPLOAD_ERR_OK)
                                       
                                       {  
                                        $image = "upload/products/".time().$_FILES['image']["name"];
                                        move_uploaded_file($_FILES['image']['tmp_name'],$image);
                                       } 
                                   else
                                        {
                                            $image = $_REQUEST["old_profile_pic"];
                                        }
           
           
                             // $data e values data ne array ma adjust karyo
                             $data = array(
                                  "description" => $_REQUEST["description"],
                                  "price" => $_REQUEST["price"],
                                  "image" => $image
                             );
                             $response = $this->update("products",$data,$_REQUEST['update']); // $id e update button mathi ave che updateuser form
                             // echo $response;
                             header("location:admin-product"); // update par cllick kare etle users ma jase
                         } 
                         else
                         {
                            header("location:admin-dashboard");
                         }
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

