<?php

echo "<pre>";

$arr = array("hello","pathik");
print_r($arr);

$arr1 = array("name"=>"admin","age"=>18,"city"=>"ahmedabad");
print_r($arr1);

$array2 = array(
"DPS"=>
array("10th stadard"=>array("Maths Faculty Name"=>
array("age"=> "a","sex"=> "b","Faculty"=> "c","name"=> "d")
)
)
);
print_r($array2);
?>


<?php


$array3 = array(
    "Cricekt"=>
    array("england"=>
    array("batsman"=>
    array("Name"=>"pathik","Match"=>300),
    array("Name"=>"pathik","Match"=>300),
    array("Name"=>"pathik","Match"=>300) 
),
array("india"=>
array("batsman"=>
array("Name"=>"pathik","Match"=>300), 
array("Name"=>"pathik","Match"=>300), 
array("Name"=>"pathik","Match"=>300) 

)
)
)
);

print_r($array3);






$arr4 = 
array(
"DPS"=>
array("10th Standard"=>array(
"Ankit"=>array("Sports"=>89,"Music"=>87,"Drama"=>45),
"Pathik"=>array("Sports"=>99,"Music"=>97,"Drama"=>54)
),
"11th Standard"=>array(
"Saurav"=>array("Sports"=>89,"Music"=>87,"Drama"=>45),
"Shreyansh"=>array("Sports"=>89,"Music"=>87,"Drama"=>45)
),
"12th Standard"=>array(
"Jaimin"=>array("Sports"=>89,"Music"=>87,"Drama"=>45)
)
)
);




print_r($arr4);

?>