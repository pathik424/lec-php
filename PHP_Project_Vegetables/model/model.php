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












}



?>