<form action="" method = "get" >

<input type="text" name="name" placeholder="please enter name">

<button name="submit">submit</button>

</form>


<?php

if(isset($_REQUEST['submit']))

{
    $name = $_REQUEST['name'];
    
    
    
    switch ($name) {
        case 'pathik':
            echo "he is a good boy";
            break;
    case 'ankit':
        echo "he is a bad boy";
        break;

    default:
    echo "please enter valid name";
    break;
}
}

?>