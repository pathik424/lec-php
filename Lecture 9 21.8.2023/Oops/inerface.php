<?php

interface pizz_hut
{
    Public function pathik();
    Public function pathik11();
    Public function pathik12();
    Public function pathik13();

    class pizz_shop implements pizz_hut

    {
     public function pathik()
     {
        echo "pathik<br>";
     }   
     public function pathik11()
     {
        echo "pathik11<br>";
     }   
     public function pathik12()
     {
        echo "pathik12<br>";
     }   
     public function pathik13()
     {
        echo "pathik13<br>";
     }   
    }
    


    
    
}


?>