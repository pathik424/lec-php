<?php

class model // create class as a file name//

{

public $connection;

public function __construct() // construct lakhso to to direct call thaijase//
{

    try {
        $this->connection = new mysqli ("localhost","root","","petshop"); // mysql connection karva mate//
    } catch (\Throwable $th) {
        //throw $th;
    }

}

public function register($data)

{
    array_pop($data);
    
    $keysdata = array_keys($data);
    $valuesdata = array_values($data);

        $keysdata = implode(",",$keysdata);
        $valuesdata = implode("','",$valuesdata);

        // echo "<pre>";
        // print_r($keysdata);
        // echo "<br>";
        // print_r($valuesdata);
        // echo "<br>";
        // echo "</pre>";

    
    $sql = "INSERT INTO pet_registration ($keysdata) VALUES ('$valuesdata')";
    $this->connection->query($sql);



}


public function login($data)
{

    // if(isset($data['login'])) // data show karva mate je pan karyu hoy e
    // {

    //     echo "<pre>";
    //     print_r($_REQUEST);    
    //     echo "</pre>";    
    // }
    
    if(isset($data['login'])) // register data jode attached karva mate
    {
      $sql = "SELECT * FROM pet_registration WHERE (email = '$data[username]' OR username = '$data[username]') AND password = '$data[password]';"; 
      
    //   echo "<pre>";
    //   echo "$sql";
    //   echo "</pre>";
      
      $patsql = $this->connection->query($sql); // number of rows or another detail check

    //   echo "<pre>";
    //   print_r($patsql);
    //   echo "<pre>";

              if($patsql->num_rows > 0) // num_row true or false
         {
               $userdata = $patsql->fetch_object();
               echo "<pre>";
               print_r($userdata);
               echo "</pre>";
               echo "login suceess";
               if($userdata->role_as == 1)
               {
                echo "admin side";
                header("location:admin-dashboard");
               }
               else
               {
                echo "user side";
                header("location:home");
               }
         }
              else
         {
            echo "login Failed";
            echo "<script> alert('Invalid Username or Password')  </script>";
         }

    }
    else
        {
            // echo "inside else";

        }
    
}


}






?>