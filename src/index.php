<?php
session_start();
// session_destroy();
include 'view.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="main">
        <?php
$productList=array(
array('index'=>0 ,'id'=>101,'image'=>'pr.jpg',"name" => "shirt101",'price' =>100),
array('index'=>1 ,'id'=>102,'image'=>'product1.jpg',"name" => "shirt103",'price' =>120),
array('index'=>2 ,'id'=>103,'image'=>'product2.webp',"name" => "shoes103",'price' =>110),
array('index'=>3 ,'id'=>104,'image'=>'product4.jpg',"name" => "shoes104",'price' =>150),
array('index'=>4 ,'id'=>105,'image'=>'product5.jpg',"name" => "shirt105",'price' =>130),

);

echo "<div id='div1'>
<form method='POST' action=''>";

$j=0;
foreach($productList as $key =>$value)
{
    echo "<div id='div2' class='productList'>
    <img src='images/".$value['image']." width='20px'>
    <h3 class='title'><a href='#'>Product".$value["id"]."</a></h3>
    <span>Price : $ ".$value['price']."</span>
    <input type='submit' value='add to cart' name='addtocart".$j."'>
    <input type='submit' value='buy now' name='buynow".$j."'>
    <input type='submit' value='wish list' name='wishlist".$j."'>
    <a href='#' class='add to cart' name='button1'>Add to cart</a>
    </div>
    ";
    $j++;
   
}
echo '</form></div>';




        ?>
        <form action="" method='POST'>
            <h1>My Cart</h1>

            <?php  displayAddToCart();
            ?>
            <br>
            <h1>BUY NOW</h1>


            <?php  displayBuyNow();
            ?>
              <br>
            <h1>Wish List</h1>


            <?php  displayWishList();
            ?>
              <br>

        </form>
    </div>
</body>
</html>