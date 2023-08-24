<?php


echo "<pre>";
print_r($_SERVER);
echo "</pre>";



class controller

{

    public function __construct()

    {
        if(isset($_SERVER['PATH_INFO']))
        {
            echo "inside if";
            switch (($_SERVER['PATH_INFO'])) {
                case "/home":
                require_once("Templete/index.html"); 
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

