<?php



// There are two types of functions
    // 1 User-Defined 
    // 2 System Defined
        // 1 With parameter
        // 2 Without parameter



function hello()

{
    echo "Hello<br>";
}

hello();

?>

<?php


function hello2($print)

{
    echo $print."<br>";
}

hello2("hello from function");

?>

<?php


function add($a,$b)

{
    echo $a+$b."<br>";
}

$x=55;
$y=45;
add(10,20);
add(100,20);
add($x,$y);
add(100.56,57.3465);
// add("hello "," function"); for this you can write like echo $a.$b;

echo "this is a system defined function<br>";

?>


<?php

function input ($a,$b)
{
    echo $a+$b. "<br>";
}

if(isset($_REQUEST['submit']))

{
    input($_REQUEST['a'],$_REQUEST['b']);
}
?>





<form action="" method = "get" >

<input type="text" name="a" placeholder="please enter value a">
<input type="text" name="b" placeholder="please enter value b">

<button name="submit">submit</button>

</form>

