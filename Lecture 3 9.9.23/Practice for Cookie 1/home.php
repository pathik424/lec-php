
<?php 
session_start();



if(isset($_REQUEST['add']))
{

    echo "<pre>";
    print_r($_REQUEST);
    // print_r($_FILES);   
    echo "</pre>";
    
    $_SESSION["cartdata"][] =['price'=>$_REQUEST['price'],'image'=>$_REQUEST['image']];    
}
else
{
    echo "Erro";
}
?>





<!doctype html>
<html lang="en">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>
<body>
    <header>
        <div class="container">
        <div class="logo">
           <p class="main">H-H Travels</p>
           <p class="sub">Travel with Us</p>
        </div>
        <div class="links">
            <ul class="sec1">
                <!-- <li><a href="">Home</a></li> -->
                <!-- <li><a href="Packeges.php">Tours Packeges</a></li> -->
                <!-- <li><a href="">Services</a></li> -->
                <li><a href="Cart.php">Add to Cart</a></li>
                <li><a href="Productupload.php">File upload</a></li>
                <!-- <li><a href="">About</a></li> -->
            </ul>
        </div>
     </div>
    </header>

    <section class="section1"> 
        <div class="subsec">
            <div>
                <p class="heading">H-H Travels</p>
        </div>
        <div>
            <p class="subheading">Travel with Us</p>
        </div>
        <div>
            <button class="butt">
                Explore Packages
            </button>
        </div></div>

    </section>
    
    
    <h1>Home page</h1>
    
    <section>
    <?php

$products = $_SESSION["products"];
foreach($products as $product)
{
    
    // echo "<pre>";
    print_r($_REQUEST);
    // print_r($_FILES);   
    // print_r($product);
    // echo "</pre>";
    ?>
 <center>
     
     <form action="" method="post">
     <div class="card mt-4 mb-4" style="width: 18rem;">
        <img src="<?php echo $product['image'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <input type="hidden" name="image" value="<?php echo $product['image']?>">
            <input type="hidden" name="price" value="<?php echo $product['price']?>">
                <h4 class="card-text"><?php echo $product['price']?></h4>
                <button class="btn btn-success " name="add">Add to cart</button>
            </div>
        </div>        
    </form>
</center>
</section>
<?php } ?>    


<?php
// require_once('footer.php');
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    
</body>
</html>

<style>
body{
    background-image: url('https://images.saymedia-content.com/.image/t_share/MTc2MjY3NzE5MTI4NDU4NDEz/swat-valley-pakistan.jpg');
}
.container{
    width: 500px;
    height: 70px;
    border-radius: 20px;
    box-shadow: 2px 3px 5px black;
    display: flex;
    flex-direction: row;
    justify-content: flex-end;
    flex-wrap:wrap;
    align-items: center;
    background-color: rgba(28, 49, 41, 0.767);
    margin-top: 20px;
}
.logo{
    width: 150px;
    height: 50px;
    flex-grow: 7;
}
.main{
    color: white;
    font-weight: bold;
    text-transform: uppercase;
    padding: 5px;
    text-shadow: 2px 3px 5px black;
    letter-spacing: 2px;
}
.sub{
    color: white;
    font-weight: bold;
    margin-top: -20px;
    font-size: 10px;
    margin-left: 8px;
    letter-spacing: 3px;
}
ul{
    display: flex;
  flex-wrap:wrap;
    list-style-type: none;
    flex-direction: row;
    justify-content: flex-end;
    align-items: center;
    margin-left: 30px;
    margin-top: 20px !important;
    width: 500px;
    height: 50px;
}
li a{
    text-decoration: none;
    margin-right: 30px;
    color: white;
    text-transform: uppercase;
    font-weight: bold;
}
.section1{
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-top: 100px !important;
}
.subsec{
    width: 500px;
    height: 200px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    align-self: center;
}
.heading{
    color: white;
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
    text-transform: uppercase;
    font-size: 60px;
    letter-spacing: 6px;
    font-style: italic;
    text-shadow: 2px 4px 6px black;
}
.subheading{
    color: white;
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
    letter-spacing: 8px;
    font-size: 25px;
    margin-top: -20px;
}
.butt{
    width: 250px;
    height: 50px;
    background-color: transparent;
    border:2px solid rgb(141, 141, 148);
    color: white;
    text-transform: uppercase;
    font-weight: bold;
    border-radius: 20px;
}
.butt:hover{
    background-color:rgba(28, 49, 41, 0.767); ;
}

</style>