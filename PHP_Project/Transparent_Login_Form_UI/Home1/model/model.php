<?php


class model

{

public $connection;


public function __construct()

{

    try
        {

            $this->connection = new mysqli("localhost","root","","school");
            // echo "Connection was  successful";
        }
        catch(\Throwable $th)
        {
//             // echo "Connection was not successful";
        }

}
    public function register($data)
    {

        array_pop($data);

        

        $keysdata = array_keys($data);
        $valuesdata = array_values($data);

        // $keysdata = implode(",",$keysdata);
        // $valuesdata = implode("','",$valuesdata);

            echo "<pre>";
            print_r($keysdata);
            echo "<br>";
            print_r($valuesdata);
            echo "<br>";
            echo "</pre>";
        
        $sql = "INSERT INTO school_regi ($keysdata) VALUES ('$valuesdata')";
    //    $sql2 = "INSERT INTO users (fullname,username,phoneno,emailid,pass) VALUES ('$data[fullname]','$data[username]','$data[phoneno]','$data[emailid]','$data[pass]')";
        echo  $sql;
        $this->connection->query($sql);
        // $this->connection->query($sql2);

        
    }
    

}
// $model = new model;
// $model->register(save);

?>




