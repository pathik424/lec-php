Fill&pass.ph<?php

echo "<pre>";
$arr = array("Rajkot","Nadiad","Baroda","Gandhinagar","Maheshana");


print_r($arr);

print_r(array_fill(0,3,$arr));



print_r(array_pad($arr,6,"pathik"));
// var_dump(array_pad($arr,3,null));



?>