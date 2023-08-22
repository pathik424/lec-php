<?php


abstract class rbi
{
    abstract public function hello();
    abstract public function hello1();
}

class bank extends rbi
{
    public function interest()
    {
        echo "intrest<br>";
    }
     public function hello()
    {
        echo "intrest pathik<br>";
    }
     public function hello1()
    {
        echo "intrest nirav<br>";
    }
}

$pathik11 = new bank;
$pathik11->interest();
$pathik11->hello();
$pathik11->hello1();


?>