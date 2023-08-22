<?php

function input ($a,$b)
{
    echo $a*$b. "<br>";
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
