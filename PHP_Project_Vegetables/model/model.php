<?php


class model
{
     public $connection;

     public function __construct()

     {
        try {
            $this->connection = new mysqli("localhost","root","","fruit");
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


        $sql = "INSERT INTO fruit_register ($keysdata) VALUES ('$valuesdata')";
        $this->connection->query($sql);
         
    } 

    public function login($data)
    {

      // if(isset($data['login']))
      // {
      //   echo "<pre>";
      //   print_r($_REQUEST);
      //   echo "</pre>";
      // }
      if(isset($data['login']))
    {
      $SQL = "SELECT * FROM fruit_register WHERE (email_id = '$data[username]' OR user_name = '$data[username]') AND password = '$data[password]';";
      // echo $SQL;
      $patsql = $this->connection->query($SQL);
      
        // echo "<pre>";
        // print_r($patsql);
        // echo "</pre>";
      
        if($patsql->num_rows > 0)
        {
          $userdata = $patsql->fetch_object();
          // echo "Login Success";
          //   echo "<pre>";
          //   print_r($userdata);
          //   echo "</pre>";

          if($userdata->role_as == 1)
          {
            echo "Admin side";
                header("location:admin-dashboard");
          }
          else
          {
            echo "User Side";
                header("location:home");
          }

        }
        else
        {
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