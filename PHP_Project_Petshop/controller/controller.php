<?php
session_start();

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
               $professional = $this->select("professionals");
                require_once("view/header.php");
                require_once("view/home.php");
                require_once("view/footer.php");
                break;

            case '/about':
               $professional = $this->select("professionals");
                 require_once("view/header.php");
                 require_once("view/about.php");
                 require_once("view/footer.php");
                 break;

            case '/service':
                 require_once("view/header.php");
                 require_once("view/service.php");
                 require_once("view/footer.php");
                 break;
             
             
            case '/cart':
               $cart = $this->select("products");
               require_once("view/header.php");
               require_once("view/cart.php");
               require_once("view/footer.php");
               break;    
             
                 

            case '/product':
                $products =  $this->select('products');
                 
               
                 require_once("view/header.php");
                 require_once("view/ourproduct.php");
                 require_once("view/product.php");
                 require_once("view/footer.php");
                 break;

            case '/treat':
                $treats =  $this->select('treat');
                 require_once("view/header.php");
                 require_once("view/ourproduct.php");
                 require_once("view/treat.php");
                 require_once("view/footer.php");
                 break;
                 
             
            case '/chews':
                $chewss =  $this->select('chews');
                 require_once("view/header.php");
                 require_once("view/ourproduct.php");
                 require_once("view/chews.php");
                 require_once("view/footer.php");
                 break;
              
             
            case '/toys':
               $toy =  $this->select('toys');
                require_once("view/header.php");
                require_once("view/ourproduct.php");
                require_once("view/toys.php");
                require_once("view/footer.php");
                break;
                
                
             
            case '/beds':
               $bed =  $this->select('beds');
                require_once("view/header.php");
                require_once("view/ourproduct.php");
                require_once("view/beds.php");
                require_once("view/footer.php");
                break;
                
                
            
                case '/collar':
                    $collars =  $this->select('collar');
                     require_once("view/header.php");
                     require_once("view/ourproduct.php");
                     require_once("view/collar.php");
                     require_once("view/footer.php");
                     break;


                 case '/bowl':
                         $bowls =  $this->select('bowl');
                          require_once("view/header.php");
                          require_once("view/ourproduct.php");
                          require_once("view/bowl.php");
                          require_once("view/footer.php");
                          break;        


                 case '/health':
                         $healths =  $this->select('health');
                          require_once("view/header.php");
                          require_once("view/ourproduct.php");
                          require_once("view/health.php");
                          require_once("view/footer.php");
                          break;            






            case '/price':
               $professional = $this->select("professionals");
                 require_once("view/header.php");
                 require_once("view/price.php");
                 require_once("view/footer.php");
                 break;

            case '/team':
               $professional = $this->select("professionals");
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
               if(isset($_REQUEST['submit']))
               {
                    // echo "<pre>";
                    // print_r($_REQUEST);
                    // print_r($_FILES);
                    // echo "</pre>"; 

                    
                    
                    $data =array(
                    
                    "name" => $_REQUEST['name'],     
                    "email" => $_REQUEST['email'],     
                    "mobile" => $_REQUEST['mobile'],     
                    "subject" => $_REQUEST['subject'],     
                    "message" => $_REQUEST['message'],     
                    );

                    $this->insert("contact",$data);
                    header("location:contact");
               
               }

               //  $contact = $this->select("contact");
                 require_once("view/header.php");
                 require_once("view/contact.php");
                 require_once("view/footer.php");
                 break;


            case '/admin-dashboard':
               

                $this->selectwhere("pet_registration",3);
                 require_once("view/admin/adminheader.php");
                 require_once("view/admin/adminhome.php");
                 require_once("view/admin/adminfooter.php");
                 
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


//TREAT ____________PRODUCT

                    case '/admin-add-treat':

                         if(isset($_REQUEST['add']))
                         {
                              // echo "<pre>";
                              // print_r($_REQUEST);
                              // print_r($_FILES);
                              // echo "</pre>";
          
                              $image = "upload/treat/".time().$_FILES['image']["name"];
                              move_uploaded_file($_FILES['image']['tmp_name'],$image);
                              
                              $data =array(
                              
                              "description" => $_REQUEST['description'],     
                              "price" => $_REQUEST['price'],     
                              "image" => $image     
          
                              );
          
          
          
                              $this->insert("treat",$data);
                         }
          
          
                         require_once("view/admin/adminheader.php");
                         require_once("view/admin/addtreat.php");
                         require_once("view/admin/adminfooter.php");
                         
                         break;
          
                       case '/admin-treat':
              
                               $treat = $this->select("treat");
                              //  echo "<pre>";
                              //  print_r($products);
                              //  echo "</pre>";
                              //  exit;
                              if(isset($_REQUEST['delete_btn']))
                              {
                                   $this->delete("treat","$_REQUEST[delete_btn]");
                              }
                               
          
                              require_once("view/admin/adminheader.php");
                              require_once("view/admin/admintreat.php");
                              require_once("view/admin/adminfooter.php");
                              
                              break;

                              case '/admin-updatetreat': // for update user data
                                   if(isset($_REQUEST['update-tr'])) // update-btn allusers ma click kare to
                                   {
                                   //    echo "<pre>";
                                      $response = $this->selectwhere("treat",$_REQUEST["update-tr"]); // data connect karva mate selectwhere qquery in model 
                                   //    print_r($response);
                                   //    echo "</pre>";
                                   //    exit;
                                      
                                      require_once("view/admin/adminheader.php");
                                      require_once("view/admin/updatetreat.php");
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
                                                 $image = "upload/treat/".time().$_FILES['image']["name"];
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
                                      $response = $this->update("treat",$data,$_REQUEST['update']); // $id e update button mathi ave che updateuser form
                                      // echo $response;
                                      header("location:admin-treat"); // update par cllick kare etle users ma jase
                                  } 
                                  else
                                  {
                                     header("location:admin-dashbaord");
                                  }
                                  break;
                                                 
//TREAT ____________PRODUCT



//CHEWS ____________PRODUCT

case '/admin-add-chews':

     if(isset($_REQUEST['add']))
     {
          // echo "<pre>";
          // print_r($_REQUEST);
          // print_r($_FILES);
          // echo "</pre>";

          $image = "upload/chews/".time().$_FILES['image']["name"];
          move_uploaded_file($_FILES['image']['tmp_name'],$image);
          
          $data =array(
          
          "description" => $_REQUEST['description'],     
          "price" => $_REQUEST['price'],     
          "image" => $image     

          );



          $this->insert("chews",$data);
     }


     require_once("view/admin/adminheader.php");
     require_once("view/admin/addchews.php");
     require_once("view/admin/adminfooter.php");
     
     break;

   case '/admin-chews':

           $chews = $this->select("chews");
          //  echo "<pre>";
          //  print_r($products);
          //  echo "</pre>";
          //  exit;
          if(isset($_REQUEST['delete_btn']))
          {
               $this->delete("chews","$_REQUEST[delete_btn]");
          }
           

          require_once("view/admin/adminheader.php");
          require_once("view/admin/adminchews.php");
          require_once("view/admin/adminfooter.php");
          
          break;

          case '/admin-updatechews': // for update user data
               if(isset($_REQUEST['update-ch'])) // update-btn allusers ma click kare to
               {
               //    echo "<pre>";
                  $response = $this->selectwhere("chews",$_REQUEST["update-ch"]); // data connect karva mate selectwhere qquery in model 
               //    print_r($response);
               //    echo "</pre>";
               //    exit;
                  
                  require_once("view/admin/adminheader.php");
                  require_once("view/admin/updatechews.php");
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
                             $image = "upload/chews/".time().$_FILES['image']["name"];
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
                  $response = $this->update("chews",$data,$_REQUEST['update']); // $id e update button mathi ave che updateuser form
                  // echo $response;
                  header("location:admin-chews"); // update par cllick kare etle users ma jase
              } 
              else
              {
                 header("location:admin-dashbaord");
              }
              break;
                             
//CHEWS ____________PRODUCT 

//TOYS ____________PRODUCT

case '/admin-add-toys':

     if(isset($_REQUEST['add']))
     {
          // echo "<pre>";
          // print_r($_REQUEST);
          // print_r($_FILES);
          // echo "</pre>";

          $image = "upload/toys/".time().$_FILES['image']["name"];
          move_uploaded_file($_FILES['image']['tmp_name'],$image);
          
          $data =array(
          
          "description" => $_REQUEST['description'],     
          "price" => $_REQUEST['price'],     
          "image" => $image     

          );



          $this->insert("toys",$data);
     }


     require_once("view/admin/adminheader.php");
     require_once("view/admin/addtoys.php");
     require_once("view/admin/adminfooter.php");
     
     break;

   case '/admin-toys':

           $toys = $this->select("toys");
          //  echo "<pre>";
          //  print_r($products);
          //  echo "</pre>";
          //  exit;
          if(isset($_REQUEST['delete_btn']))
          {
               $this->delete("toys","$_REQUEST[delete_btn]");
          }
           

          require_once("view/admin/adminheader.php");
          require_once("view/admin/admintoys.php");
          require_once("view/admin/adminfooter.php");
          
          break;

          case '/admin-updatetoys': // for update user data
               if(isset($_REQUEST['update-to'])) // update-btn allusers ma click kare to
               {
               //    echo "<pre>";
                  $response = $this->selectwhere("toys",$_REQUEST["update-to"]); // data connect karva mate selectwhere qquery in model 
               //    print_r($response);
               //    echo "</pre>";
               //    exit;
                  
                  require_once("view/admin/adminheader.php");
                  require_once("view/admin/updatetoys.php");
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
                             $image = "upload/toys/".time().$_FILES['image']["name"];
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
                  $response = $this->update("toys",$data,$_REQUEST['update']); // $id e update button mathi ave che updateuser form
                  // echo $response;
                  header("location:admin-toys"); // update par cllick kare etle users ma jase
              } 
              else
              {
                 header("location:admin-dashbaord");
              }
              break;
                             
//TOYS ____________PRODUCT

//BEDS ____________PRODUCT

case '/admin-add-beds':

     if(isset($_REQUEST['add']))
     {
          // echo "<pre>";
          // print_r($_REQUEST);
          // print_r($_FILES);
          // echo "</pre>";

          $image = "upload/beds/".time().$_FILES['image']["name"];
          move_uploaded_file($_FILES['image']['tmp_name'],$image);
          
          $data =array(
          
          "description" => $_REQUEST['description'],     
          "price" => $_REQUEST['price'],     
          "image" => $image     

          );



          $this->insert("beds",$data);
     }


     require_once("view/admin/adminheader.php");
     require_once("view/admin/addbeds.php");
     require_once("view/admin/adminfooter.php");
     
     break;

   case '/admin-beds':

           $beds = $this->select("beds");
          //  echo "<pre>";
          //  print_r($products);
          //  echo "</pre>";
          //  exit;
          if(isset($_REQUEST['delete_btn']))
          {
               $this->delete("beds","$_REQUEST[delete_btn]");
          }
           

          require_once("view/admin/adminheader.php");
          require_once("view/admin/adminbeds.php");
          require_once("view/admin/adminfooter.php");
          
          break;

          case '/admin-updatebeds': // for update user data
               if(isset($_REQUEST['update-be'])) // update-btn allusers ma click kare to
               {
               //    echo "<pre>";
                  $response = $this->selectwhere("beds",$_REQUEST["update-be"]); // data connect karva mate selectwhere qquery in model 
               //    print_r($response);
               //    echo "</pre>";
               //    exit;
                  
                  require_once("view/admin/adminheader.php");
                  require_once("view/admin/updatebeds.php");
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
                             $image = "upload/beds/".time().$_FILES['image']["name"];
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
                  $response = $this->update("beds",$data,$_REQUEST['update']); // $id e update button mathi ave che updateuser form
                  // echo $response;
                  header("location:admin-beds"); // update par cllick kare etle users ma jase
              } 
              else
              {
                 header("location:admin-dashbaord");
              }
              break;
                             
//BEDS ____________PRODUCT


//COLLAR ____________PRODUCT

case '/admin-add-collar':

     if(isset($_REQUEST['add']))
     {
          // echo "<pre>";
          // print_r($_REQUEST);
          // print_r($_FILES);
          // echo "</pre>";

          $image = "upload/collar/".time().$_FILES['image']["name"];
          move_uploaded_file($_FILES['image']['tmp_name'],$image);
          
          $data =array(
          
          "description" => $_REQUEST['description'],     
          "price" => $_REQUEST['price'],     
          "image" => $image     

          );



          $this->insert("collar",$data);
     }


     require_once("view/admin/adminheader.php");
     require_once("view/admin/addcollar.php");
     require_once("view/admin/adminfooter.php");
     
     break;

   case '/admin-collar':

           $collar = $this->select("collar");
          //  echo "<pre>";
          //  print_r($products);
          //  echo "</pre>";
          //  exit;
          if(isset($_REQUEST['delete_btn']))
          {
               $this->delete("collar","$_REQUEST[delete_btn]");
          }
           

          require_once("view/admin/adminheader.php");
          require_once("view/admin/admincollar.php");
          require_once("view/admin/adminfooter.php");
          
          break;

          case '/admin-updatecollar': // for update user data
               if(isset($_REQUEST['update-co'])) // update-btn allusers ma click kare to
               {
               //    echo "<pre>";
                  $response = $this->selectwhere("collar",$_REQUEST["update-co"]); // data connect karva mate selectwhere qquery in model 
               //    print_r($response);
               //    echo "</pre>";
               //    exit;
                  
                  require_once("view/admin/adminheader.php");
                  require_once("view/admin/updatecollar.php");
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
                             $image = "upload/collar/".time().$_FILES['image']["name"];
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
                  $response = $this->update("collar",$data,$_REQUEST['update']); // $id e update button mathi ave che updateuser form
                  // echo $response;
                  header("location:admin-collar"); // update par cllick kare etle users ma jase
              } 
              else
              {
                 header("location:admin-dashbaord");
              }
              break;
                             
//COLLAR ____________PRODUCT

//BOWL ____________PRODUCT

case '/admin-add-bowl':

     if(isset($_REQUEST['add']))
     {
          // echo "<pre>";
          // print_r($_REQUEST);
          // print_r($_FILES);
          // echo "</pre>";

          $image = "upload/bowl/".time().$_FILES['image']["name"];
          move_uploaded_file($_FILES['image']['tmp_name'],$image);
          
          $data =array(
          
          "description" => $_REQUEST['description'],     
          "price" => $_REQUEST['price'],     
          "image" => $image     

          );



          $this->insert("bowl",$data);
     }


     require_once("view/admin/adminheader.php");
     require_once("view/admin/addbowl.php");
     require_once("view/admin/adminfooter.php");
     
     break;

   case '/admin-bowl':

           $bowl = $this->select("bowl");
          //  echo "<pre>";
          //  print_r($products);
          //  echo "</pre>";
          //  exit;
          if(isset($_REQUEST['delete_btn']))
          {
               $this->delete("bowl","$_REQUEST[delete_btn]");
          }
           

          require_once("view/admin/adminheader.php");
          require_once("view/admin/adminbowl.php");
          require_once("view/admin/adminfooter.php");
          
          break;

          case '/admin-updatebowl': // for update user data
               if(isset($_REQUEST['update-bo'])) // update-btn allusers ma click kare to
               {
               //    echo "<pre>";
                  $response = $this->selectwhere("bowl",$_REQUEST["update-bo"]); // data connect karva mate selectwhere qquery in model 
               //    print_r($response);
               //    echo "</pre>";
               //    exit;
                  
                  require_once("view/admin/adminheader.php");
                  require_once("view/admin/updatebowl.php");
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
                             $image = "upload/bowl/".time().$_FILES['image']["name"];
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
                  $response = $this->update("bowl",$data,$_REQUEST['update']); // $id e update button mathi ave che updateuser form
                  // echo $response;
                  header("location:admin-bowl"); // update par cllick kare etle users ma jase
              } 
              else
              {
                 header("location:admin-dashbaord");
              }
              break;
                             
//BOWl ____________PRODUCT



//Health ____________PRODUCT

case '/admin-add-health':

     if(isset($_REQUEST['add']))
     {
          // echo "<pre>";
          // print_r($_REQUEST);
          // print_r($_FILES);
          // echo "</pre>";

          $image = "upload/health/".time().$_FILES['image']["name"];
          move_uploaded_file($_FILES['image']['tmp_name'],$image);
          
          $data =array(
          
          "description" => $_REQUEST['description'],     
          "price" => $_REQUEST['price'],     
          "image" => $image     

          );



          $this->insert("health",$data);
     }


     require_once("view/admin/adminheader.php");
     require_once("view/admin/addhealth.php");
     require_once("view/admin/adminfooter.php");
     
     break;

   case '/admin-health':

           $health = $this->select("health");
          //  echo "<pre>";
          //  print_r($products);
          //  echo "</pre>";
          //  exit;
          if(isset($_REQUEST['delete_btn']))
          {
               $this->delete("health","$_REQUEST[delete_btn]");
          }
           

          require_once("view/admin/adminheader.php");
          require_once("view/admin/adminhealth.php");
          require_once("view/admin/adminfooter.php");
          
          break;

          case '/admin-updatehealth': // for update user data
               if(isset($_REQUEST['update-he'])) // update-btn allusers ma click kare to
               {
               //    echo "<pre>";
                  $response = $this->selectwhere("health",$_REQUEST["update-he"]); // data connect karva mate selectwhere qquery in model 
               //    print_r($response);
               //    echo "</pre>";
               //    exit;
                  
                  require_once("view/admin/adminheader.php");
                  require_once("view/admin/updatehealth.php");
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
                             $image = "upload/health/".time().$_FILES['image']["name"];
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
                  $response = $this->update("health",$data,$_REQUEST['update']); // $id e update button mathi ave che updateuser form
                  // echo $response;
                  header("location:admin-bowl"); // update par cllick kare etle users ma jase
              } 
              else
              {
                 header("location:admin-dashbaord");
              }
              break;
                             
//HEALTH ____________PRODUCT



           
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
                    

            case '/admin-update': // for update user data
                 if(isset($_REQUEST['update-btn'])) // update-btn allusers ma click kare to
                 {
                    // echo "<pre>";
                    $response = $this->selectwhere("pet_registration",$_REQUEST["update-btn"]); // data connect karva mate selectwhere qquery in model 
                    // print_r($response);
                    // echo "</pre>";
                    // exit;
                    
                    require_once("view/admin/adminheader.php");
                    require_once("view/admin/updateuser.php");
                    require_once("view/admin/adminfooter.php");     
                 }
                 else if(isset($_REQUEST['update'])) // update user nu click karva mate update button from updateuser form
                 {  
                         //    echo "<pre>";
                         //    print_r($_REQUEST);
                         //    print_r($_FILES);
                         //    echo "</pre>"; 
                         //    exit;
                    
                          if($_FILES['image']['error'] == UPLOAD_ERR_OK)
                              
                              {  
                               $image = "upload/".time().$_FILES['image']["name"];
                               move_uploaded_file($_FILES['image']['tmp_name'],$image);
                              } 
                          else
                               {
                                   $image = $_REQUEST["old_profile_pic"];
                               }


                    // $data e values data ne array ma adjust karyo
                    $data = array(
                         "fullname" => $_REQUEST["fullname"],
                         "username" => $_REQUEST["username"],
                         "email" => $_REQUEST["email"],
                         "mobile" => $_REQUEST["mobile"],
                         "role_as" => $_REQUEST["role_as"],
                         "password" => $_REQUEST["password"],
                         "image" => $image
                    );
                    $response = $this->update("pet_registration",$data,$_REQUEST['update']); // $id e update button mathi ave che updateuser form
                    // echo $response;
                    header("location:admin-users"); // update par cllick kare etle users ma jase
                } 
                else
                {
                   header("location:admin-dashbaord");
                }
                break;
             
             
             
            case '/admin-updateproduct': // for update user data
               if(isset($_REQUEST['update-pr'])) // update-btn allusers ma click kare to
               {
               //    echo "<pre>";
                  $response = $this->selectwhere("products",$_REQUEST["update-pr"]); // data connect karva mate selectwhere qquery in model 
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
                  header("location:admin-products"); // update par cllick kare etle users ma jase
              } 
              else
              {
                 header("location:admin-dashbaord");
              }
              break;

              
              


              case '/admin-professionals': // for update user data
                
               $professional = $this->select("professionals");
               //  echo "<pre>";
               //  print_r($products);
               //  echo "</pre>";
               //  exit;
               if(isset($_REQUEST['delete_btn']))
               {
                    $this->delete("professionals","$_REQUEST[delete_btn]");
               }
                

               require_once("view/admin/adminheader.php");
               require_once("view/admin/adminallprofessionals.php");
               require_once("view/admin/adminfooter.php");
               
               break;
           
           
               case '/admin-updateprofessional': // for update user data
                    if(isset($_REQUEST['update-pro'])) // update-btn allusers ma click kare to
                    {
                    //    echo "<pre>";
                       $response = $this->selectwhere("professionals",$_REQUEST["update-pro"]); // data connect karva mate selectwhere qquery in model 
                    //    print_r($response);
                    //    echo "</pre>";
                    //    exit;
                       
                       require_once("view/admin/adminheader.php");
                       require_once("view/admin/adminupdateprofessionals.php");
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
                                  $image = "upload/professionals/".time().$_FILES['image']["name"];
                                  move_uploaded_file($_FILES['image']['tmp_name'],$image);
                                 } 
                             else
                                  {
                                      $image = $_REQUEST["old_profile_pic"];
                                  }
     
     
                       // $data e values data ne array ma adjust karyo
                       $data = array(
                            "designation" => $_REQUEST["designation"],
                            "name" => $_REQUEST["name"],
                            "image" => $image
                       );
                       $response = $this->update("professionals",$data,$_REQUEST['update']); // $id e update button mathi ave che updateuser form
                       // echo $response;
                       header("location:admin-professionals"); // update par cllick kare etle users ma jase
                   } 
                   else
                   {
                      header("location:admin-dashbaord");
                   }
                   break;



                   case '/admin-add-professor':

                    if(isset($_REQUEST['add']))
                    {
                         echo "<pre>";
                         print_r($_REQUEST);
                         print_r($_FILES);
                         echo "</pre>";
     
                         $image = "upload/professionals/".time().$_FILES['image']["name"];
                         move_uploaded_file($_FILES['image']['tmp_name'],$image);
                         
                         $data =array(
                         
                         "designation" => $_REQUEST['designation'],     
                         "name" => $_REQUEST['name'],     
                         "image" => $image     
     
                         );
     
     
     
                         $this->insert("professionals",$data);
                    }
     
     
                    require_once("view/admin/adminheader.php");
                    require_once("view/admin/addprofessors.php");
                    require_once("view/admin/adminfooter.php");
                    
                    break;

                    
            case '/admin-contact': 

                
                    $contact = $this->select("contact");
                    //  echo "<pre>";
                    //  print_r($contact);
                    //  echo "</pre>";
                    //  exit;

                    if(isset($_REQUEST['delete_btn']))
                    {
                         $this->delete("contact","$_REQUEST[delete_btn]");
                    }


                    require_once("view/admin/adminheader.php");
                    require_once("view/admin/admincontact.php");
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

            case '/logout':


               header("location:register");
               break;
                       

            
       
        }
    }

    else{
        header("location:register"); // server ma create path_info karvu hoy to//
    }
}
}

$obj = new controller; // run karayu inheritancee//
