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





}








?>