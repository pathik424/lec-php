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


     public function insert($tbl,$data)

             {
                //   array_pop($data);
     
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
 
     
                 $sql = "INSERT INTO $tbl ($keysdata) VALUES ('$valuesdata')";
                 $this->connection->query($sql);


                 header("location:$_SERVER[PHP_SELF]"); // delete tahaya pachi pan e j page ma rakhe tena mate

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

    public function select($table)
    {

       $sql = "SELECT * FROM $table";
       //echo $sql;
       //exit;
      $patsql = $this->connection->query($sql);
      //print_r($patsql);
      //exit;//

      if($patsql->num_rows > 0)
      {

        while($data = $patsql->fetch_object())
        {
          $datas[] = $data;
        } 
        return $datas;
      }
}

public function delete($tbl,$id)

{
   $sql = "DELETE FROM $tbl WHERE id = $id";

   $this->connection->query($sql);
   header("location:$_SERVER[PHP_SELF]");

}

public function selectwhere($tbl,$id)

{
 $sql = "SELECT * FROM $tbl WHERE id = $id";
// echo $sql;
$patsql = $this->connection->query($sql);
//  exit;

 if($patsql->num_rows > 0)
    {
        $data = $patsql->fetch_object();
        // print_r($data);
        // exit;
    }
    else
    {
        $data = "something went wrong";
        // return $data;
    }
    return $data;

}
public function update($tbl,$values,$id)
{
   $sql = "UPDATE $tbl SET ";

   
 foreach($values as $key => $value)  
 {
     $sql .= " $key = '$value' , ";
 }
 $sql = rtrim($sql," , "); 

 $sql .= " WHERE id = $id";

 $sqlex = $this->connection->query($sql);
 if($sqlex->num_rows > 0)
 {
     $data = "Updated successfully";
 }
 else
 {
     $data = "Something went wrong";
    
 }
 return $data;

}











}



?>