<?php



// There are two types of functions
    // 1 User-Defined 
    // 2 System Defined
        // 1 With parameter
        // 2 Without parameter

Function hello()

{
    echo "hello <br>";
}

hello();
hello();
hello();

function hello2($print)
    {
        echo $print."<br>";
    }

    hello2("hello from function");


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

    function input($a,$b)
    {
        // echo $a+$b."<br>";
        echo $a.$b."<br>";
    }

    echo "this is a system defined function<br>";
    
    if(isset($_REQUEST['submit']))
    {
        // print_r($_REQUEST);
        input($_REQUEST['a'],$_REQUEST['b']);
    }
    
    
    ?>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    
    <form action="" method="get">
    
    <input type="text" name="a" placeholder="Enter value of A">
    <input type="text" name="b" placeholder="Enter value of B">
    <button name="submit">Submit</button>
    
    </form>        