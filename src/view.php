<?php

if(!isset($_SESSION['addmycart']))
{
    $_SESSION['addmycart']=array();
}
if(!isset($_SESSION['buynow1']))
{
    $_SESSION['buynow1']=array();
}

if(!isset($_SESSION['wishlist']))
{
    $_SESSION['wishlist']=array();
}




if(isset($_POST['addtocart0']))
{
    $index='<img src="images/pr.jpg" width="20px">';
    $p=101;
    $q='Price : $ 100 ';

    $cart1=array($index,$p,$q,1);
    if(count($_SESSION['addmycart']) ==0)
    {
        array_push($_SESSION['addmycart'],$cart1);
    }
    else{
        $_SESSION['check']=0;
        for($i=0;$i <count($_SESSION['addmycart']);$i++)
        {
         if($_SESSION['addmycart'][$i][1]==101)
             {
               $_SESSION['check']=1;
               $_SESSION['addmycart'][$i][3]++;
}
}
        if( $_SESSION['check']==1)
{

}
else{
    array_push($_SESSION['addmycart'],$cart1);
}


        
    }
}



if(isset($_POST['addtocart1']))
{
    $index='<img src="images/product1.jpg" width="20px">';
    $p=102;
    $q='Price : $ 120 ';

    $cart1=array($index,$p,$q,1);
    if(count($_SESSION['addmycart']) ==0)
    {
        array_push($_SESSION['addmycart'],$cart1);
    }
    else{
        $_SESSION['check']=0;
        for($i=0;$i <count($_SESSION['addmycart']);$i++)
        {
if($_SESSION['addmycart'][$i][1]==102)
{
    $_SESSION['check']=1;
    $_SESSION['addmycart'][$i][3]++;
}
        }
        if( $_SESSION['check']==1)
{

}
else{
    array_push($_SESSION['addmycart'],$cart1);
}


        
    }
}
if(isset($_POST['addtocart2']))
{
    $index='<img src="images/product2.webp" width="20px">';
    $p=103;
    $q='Price : $ 110 ';

    $cart1=array($index,$p,$q,1);
    if(count($_SESSION['addmycart']) ==0)
    {
        array_push($_SESSION['addmycart'],$cart1);
    }
    else{
        $_SESSION['check']=0;
        for($i=0;$i <count($_SESSION['addmycart']);$i++)
        {
if($_SESSION['addmycart'][$i][1]==103)
{
    $_SESSION['check']=1;
    $_SESSION['addmycart'][$i][3]++;
}
        }
        if( $_SESSION['check']==1)
{

}
else{
    array_push($_SESSION['addmycart'],$cart1);
}


        
    }
}
if(isset($_POST['addtocart3']))
{
    $index='<img src="images/product4.jpg" width="20px">';
    $p=104;
    $q='Price : $ 150 ';

    $cart1=array($index,$p,$q,1);
    if(count($_SESSION['addmycart']) ==0)
    {
        array_push($_SESSION['addmycart'],$cart1);
    }
    else{
        $_SESSION['check']=0;
        for($i=0;$i <count($_SESSION['addmycart']);$i++)
        {
if($_SESSION['addmycart'][$i][1]==104)
{
    $_SESSION['check']=1;
    $_SESSION['addmycart'][$i][3]++;
}
        }
        if( $_SESSION['check']==1)
{

}
else{
    array_push($_SESSION['addmycart'],$cart1);
}


        
    }
}
if(isset($_POST['addtocart4']))
{
    $index='<img src="images/product5.jpg" width="20px">';
    $p=105;
    $q='Price : $ 130 ';

    $cart1=array($index,$p,$q,1);
    if(count($_SESSION['addmycart']) ==0)
    {
        array_push($_SESSION['addmycart'],$cart1);
    }
    else{
        $_SESSION['check']=0;
        for($i=0;$i <count($_SESSION['addmycart']);$i++)
        {
if($_SESSION['addmycart'][$i][1]==105)
{
    $_SESSION['check']=1;
    $_SESSION['addmycart'][$i][3]++;
}
        }
        if( $_SESSION['check']==1)
{

}
else{
    array_push($_SESSION['addmycart'],$cart1);
}


        
    }
}



//buy now


if(isset($_POST['buynow0']))
{
    $index='<img src="images/pr.jpg" width="20px">';
    $p=101;
    $q='Price : $ 100 ';

    $cart1=array($index,$p,$q,1);
    if(count($_SESSION['buynow1']) ==0)
    {
        array_push($_SESSION['buynow1'],$cart1);
    }
    else{
        $_SESSION['check']=0;
        for($i=0;$i <count($_SESSION['buynow1']);$i++)
        {
if($_SESSION['buynow1'][$i][1]==101)
{
    $_SESSION['check']=1;
    $_SESSION['buynow1'][$i][3]++;
}
        }
        if( $_SESSION['check']=1)
{

}
else{
    array_push($_SESSION['buynow1'],$cart1);
}


        
    }
}



if(isset($_POST['buynow1']))
{
    $index='<img src="images/product1.jpg" width="20px">';
    $p=102;
    $q='Price : $ 120 ';

    $cart1=array($index,$p,$q,1);
    if(count($_SESSION['buynow1']) ==0)
    {
        array_push($_SESSION['buynow1'],$cart1);
    }
    else{
        $_SESSION['check']=0;
        for($i=0;$i <count($_SESSION['buynow1']);$i++)
        {
if($_SESSION['buynow1'][$i][1]==102)
{
    $_SESSION['check']=1;
    $_SESSION['buynow1'][$i][3]++;
}
        }
        if( $_SESSION['check']==1)
{

}
else{
    array_push($_SESSION['buynow1'],$cart1);
}


        
    }
}
if(isset($_POST['buynow2']))
{
    $index='<img src="images/product2.webp" width="20px">';
    $p=103;
    $q='Price : $ 110 ';

    $cart1=array($index,$p,$q,1);
    if(count($_SESSION['buynow1']) ==0)
    {
        array_push($_SESSION['buynow1'],$cart1);
    }
    else{
        $_SESSION['check']=0;
        for($i=0;$i <count($_SESSION['buynow1']);$i++)
        {
if($_SESSION['buynow1'][$i][1]==103)
{
    $_SESSION['check']=1;
    $_SESSION['buynow1'][$i][3]++;
}
        }
        if( $_SESSION['check']==1)
{

}
else{
    array_push($_SESSION['buynow1'],$cart1);
}


        
    }
}
if(isset($_POST['buynow3']))
{
    $index='<img src="images/product4.jpg" width="20px">';
    $p=104;
    $q='Price : $ 150 ';

    $cart1=array($index,$p,$q,1);
    if(count($_SESSION['buynow1']) ==0)
    {
        array_push($_SESSION['buynow1'],$cart1);
    }
    else{
        $_SESSION['check']=0;
        for($i=0;$i <count($_SESSION['buynow1']);$i++)
        {
if($_SESSION['buynow1'][$i][1]==104)
{
    $_SESSION['check']=1;
    $_SESSION['buynow1'][$i][3]++;
}
        }
        if( $_SESSION['check']==1)
{

}
else{
    array_push($_SESSION['buynow1'],$cart1);
}


        
    }
}
if(isset($_POST['buynow4']))
{
    $index='<img src="images/product5.jpg" width="20px">';
    $p=105;
    $q='Price : $ 130 ';

    $cart1=array($index,$p,$q,1);
    if(count($_SESSION['buynow1']) ==0)
    {
        array_push($_SESSION['buynow1'],$cart1);
    }
    else{
        $_SESSION['check']=0;
        for($i=0;$i <count($_SESSION['buynow1']);$i++)
        {
if($_SESSION['buynow1'][$i][1]==105)
{
    $_SESSION['check']=1;
    $_SESSION['buynow1'][$i][3]++;
}
        }
        if( $_SESSION['check']==1)
{

}
else{
    array_push($_SESSION['buynow1'],$cart1);
}


        
    }
}



//wishList

if(isset($_POST['wishlist0']))
{
    $index='<img src="images/pr.jpg" width="20px">';
    $p=101;
    $q='Price : $ 100 ';

    $cart1=array($index,$p,$q,1);
    if(count($_SESSION['wishlist']) ==0)
    {
        array_push($_SESSION['wishlist'],$cart1);
    }
    else{
        $_SESSION['check']=0;
        for($i=0;$i <count($_SESSION['wishlist']);$i++)
        {
if($_SESSION['wishlist'][$i][1]==101)
{
    $_SESSION['check']=1;
    $_SESSION['wishlist'][$i][3]++;
}
        }
        if( $_SESSION['check']==1)
{

}
else{
    array_push($_SESSION['wishlist'],$cart1);
}


        
    }
}



if(isset($_POST['wishlist1']))
{
    $index='<img src="images/product1.jpg" width="20px">';
    $p=102;
    $q='Price : $ 120 ';

    $cart1=array($index,$p,$q,1);
    if(count($_SESSION['wishlist']) ==0)
    {
        array_push($_SESSION['wishlist'],$cart1);
    }
    else{
        $_SESSION['check']=0;
        for($i=0;$i <count($_SESSION['wishlist']);$i++)
        {
if($_SESSION['wishlist'][$i][1]==102)
{
    $_SESSION['check']=1;
    $_SESSION['wishlist'][$i][3]++;
}
        }
        if( $_SESSION['check']==1)
{

}
else{
    array_push($_SESSION['wishlist'],$cart1);
}


        
    }
}
if(isset($_POST['wishlist2']))
{
    $index='<img src="images/product2.webp" width="20px">';
    $p=103;
    $q='Price : $ 110 ';

    $cart1=array($index,$p,$q,1);
    if(count($_SESSION['wishlist']) ==0)
    {
        array_push($_SESSION['buynow1'],$cart1);
    }
    else{
        $_SESSION['check']=0;
        for($i=0;$i <count($_SESSION['wishlist']);$i++)
        {
if($_SESSION['wishlist'][$i][1]==103)
{
    $_SESSION['check']=1;
    $_SESSION['wishlist'][$i][3]++;
}
        }
        if( $_SESSION['check']==1)
{

}
else{
    array_push($_SESSION['wishlist'],$cart1);
}


        
    }
}
if(isset($_POST['wishlist3']))
{
    $index='<img src="images/product4.jpg" width="20px">';
    $p=104;
    $q='Price : $ 150 ';

    $cart1=array($index,$p,$q,1);
    if(count($_SESSION['wishlist']) ==0)
    {
        array_push($_SESSION['wishlist'],$cart1);
    }
    else{
        $_SESSION['check']=0;
        for($i=0;$i <count($_SESSION['wishlist']);$i++)
        {
if($_SESSION['wishlist'][$i][1]==104)
{
    $_SESSION['check']=1;
    $_SESSION['wishlist'][$i][3]++;
}
        }
        if( $_SESSION['check']==1)
{

}
else{
    array_push($_SESSION['wishlist'],$cart1);
}


        
    }
}
if(isset($_POST['wishlist4']))
{
    $index='<img src="images/product5.jpg" width="20px">';
    $p=105;
    $q='Price : $ 130 ';

    $cart1=array($index,$p,$q,1);
    if(count($_SESSION['wishlist']) ==0)
    {
        array_push($_SESSION['wishlist'],$cart1);
    }
    else{
        $_SESSION['check']=0;
        for($i=0;$i <count($_SESSION['wishlist']);$i++)
        {
if($_SESSION['wishlist'][$i][1]==105)
{
    $_SESSION['check']=1;
    $_SESSION['wishlist'][$i][3]++;
}
        }
        if( $_SESSION['check']==1)
{

}
else{
    array_push($_SESSION['wishlist'],$cart1);
}


        
    }
}



function displayAddToCart()
{
echo " <table><tr><th>image</th><th>id</th><th>price</th><th>quantity</th></tr>";
echo "<button type='submit' name='removeall1'>Remove All</button>";
echo "<button type='submit' name='add1'>add All in Buy</button>";

echo "<button type='submit' name='add2'>add All in wish</button>";
$i=0;
foreach($_SESSION['addmycart'] as $key => $value)
{
    echo "
    <tr>
    <td>$value[0]</td>
    <td>$value[1]</td>
    <td>$value[2]</td>
    <td>$value[3]</td>
    <td><input type='text' name='text".$i."' value=''></td>
    <td><input type='submit' name='edit".$i."' value='Edit'></td>
    <td><input type='submit' name='delet".$i."' value='Delete'></td>
    <td><input type='submit' name='movetowish".$i."' value='MoveToWish'></td>
    <td><input type='submit' name='movetobuy".$i."' value='MoveToBuy'></td>
    
    
    </tr>";
    $i++;
}
echo "</table>";

}




function displayBuyNow()
{
echo " <table><tr><th>image</th><th>id</th><th>price</th><th>quantity</th></tr>";
echo "<button type='submit' name='removeall2'>Remove All</button>";
echo "<button type='submit' name='add3'>add All in Buy</button>";

echo "<button type='submit' name='add4'>add All in wish</button>";
$i=0;
foreach($_SESSION['buynow1'] as $key => $value)
{
    echo "
    <tr>
    <td>$value[0]</td>
    <td>$value[1]</td>
    <td>$value[2]</td>
    <td>$value[3]</td>
    <td><input type='text' name='textt".$i."' value=''></td>
    <td><input type='submit' name='editt".$i."' value='Edit'></td>
    <td><input type='submit' name='delett".$i."' value='Delete'></td>
    <td><input type='submit' name='movetowishh".$i."' value='MoveToWish'></td>
    <td><input type='submit' name='movetobuyy".$i."' value='MoveToCart'></td>
    
    
    </tr>";
    $i++;
}
echo "</table>";

}




function displayWishList()
{
echo " <table><tr><th>image</th><th>id</th><th>price</th><th>quantity</th></tr>";
echo "<button type='submit' name='removeall3'>Remove All</button>";
echo "<button type='submit' name='add5'>add All in Buy</button>";

echo "<button type='submit' name='add6'>add All in wish</button>";
$i=0;
foreach($_SESSION['wishlist'] as $key => $value)
{
    echo "
    <tr>
    <td>$value[0]</td>
    <td>$value[1]</td>
    <td>$value[2]</td>
    <td>$value[3]</td>
    <td><input type='text' name='texttt".$i."' value=''></td>
    <td><input type='submit' name='edittt".$i."' value='Edit'></td>
    <td><input type='submit' name='delettt".$i."' value='Delete'></td>
    <td><input type='submit' name='movetowishhh".$i."' value='BuyNow'></td>
    <td><input type='submit' name='movetobuyyy".$i."' value='MoveToCart'></td>
    
    
    </tr>";
    $i++;
}
echo "</table>";

}


for($k=0;$k <count($_SESSION['addmycart']);$k++)
{
if(isset($_POST['movetobuy'.$i]))
{
    array_push($_SESSION['buynow1'],$_SESSION['addmycart'][$k]);
    array_splice($_SESSION['addmycart'],$k,1);
}




}


for($k=0;$k <count($_SESSION['buynow1']);$k++)
{
if(isset($_POST['movetobuyy'.$i]))
{
    array_push($_SESSION['addmycart'],$_SESSION['buynow1'][$k]);
    array_splice($_SESSION['buynow1'],$k,1);
}




}


for($k=0;$k <count($_SESSION['addmycart']);$k++)
{
if(isset($_POST['movetowish'.$i]))
{
    array_push($_SESSION['wishlist'],$_SESSION['addmycart'][$k]);
    array_splice($_SESSION['addmycart'],$k,1);
}




}

for($k=0;$k <count($_SESSION['buynow1']);$k++)
{
if(isset($_POST['movetowishh'.$i]))
{
    array_push($_SESSION['wishlist'],$_SESSION['buynow1'][$k]);
    array_splice($_SESSION['buynow1'],$k,1);
}




}


for($k=0;$k <count($_SESSION['wishlist']);$k++)
{
if(isset($_POST['movetowishhh'.$i]))
{
    array_push($_SESSION['buynow1'],$_SESSION['wishlist'][$k]);
    array_splice($_SESSION['wishlist'],$k,1);
}




}

for($k=0;$k <count($_SESSION['wishlist']);$k++)
{
if(isset($_POST['movetobuyyy'.$i]))
{
    array_push($_SESSION['buynow1'],$_SESSION['wishlist'][$k]);
    array_splice($_SESSION['wishlist'],$k,1);
}




}


for($k=0;$k <count($_SESSION['addmycart']);$k++)
{
if(isset($_POST['delet'.$k]))
{
    
    
    array_splice($_SESSION['addmycart'],$k,1);
}




}



for($k=0;$k <count($_SESSION['buynow1']);$k++)
{
if(isset($_POST['delett'.$k]))
{
    
    
    array_splice($_SESSION['buynow1'],$k,1);
}




}



for($k=0;$k <count($_SESSION['wishlist']);$k++)
{
if(isset($_POST['delettt'.$k]))
{
    
    
    array_splice($_SESSION['wishlist'],$k,1);
}




}




for($k=0;$k <count($_SESSION['addmycart']);$k++)
{



if(isset($_POST['edit'.$k]))


{
    foreach($_SESSION['addmycart'] as $key => $value)
{
    if($key == $k)
    {
    
        $_SESSION['addmycart'][$key][3]=$_POST['text'.$k];
    
    }
}

}


}



for($k=0;$k <count($_SESSION['buynow1']);$k++)
{



if(isset($_POST['editt'.$k]))


{
    foreach($_SESSION['buynow1'] as $key => $value)
{
    if($key == $k)
    {
    
        $_SESSION['buynow1'][$key][3]=$_POST['text'.$k];
    
    }
}

}


}



for($k=0;$k <count($_SESSION['wishlist']);$k++)
{



if(isset($_POST['edittt'.$k]))


{
    foreach($_SESSION['wishlist'] as $key => $value)
{
    if($key == $k)
    {
    
        $_SESSION['wishlist'][$key][3]=$_POST['text'.$k];
    
    }
}

}


}


if(isset($_POST['add2']))
{

    foreach($_SESSION['addmycart'] as $key => $value)
    {
        array_push($_SESSION['wishlist'],$_SESSION['addmycart'][$key]);
    }
    unset($_SESSION['addmycart']);
}


if(isset($_POST['add3']))
{

    foreach($_SESSION['buynow1'] as $key => $value)
    {
        array_push($_SESSION['addmycart'],$_SESSION['buynow1'][$key]);
    }
    unset($_SESSION['buynow1']);
}



if(isset($_POST['add4']))
{

    foreach($_SESSION['buynow1'] as $key => $value)
    {
        array_push($_SESSION['wishlist'],$_SESSION['buynow1'][$key]);
    }
    unset($_SESSION['buynow1']);
}



if(isset($_POST['add5']))
{

    foreach($_SESSION['wishlist'] as $key => $value)
    {
        array_push($_SESSION['addmycart'],$_SESSION['wishlist'][$key]);
    }
    unset($_SESSION['wishlist']);
}


if(isset($_POST['add6']))
{

    foreach($_SESSION['wishlist'] as $key => $value)
    {
        array_push($_SESSION['buynow1'],$_SESSION['wishlist'][$key]);
    }
    unset($_SESSION['wishlist']);
}


if(isset($_POST['add1']))
{

    foreach($_SESSION['addmycart'] as $key => $value)
    {
        array_push($_SESSION['buynow1'],$_SESSION['addmycart'][$key]);
    }
    unset($_SESSION['addmycart']);
}


if(isset($_POST['removeall1']))
{
    unset($_SESSION['addmycart']);
}

if(isset($_POST['removeall2']))
{
    unset($_SESSION['buynow1']);
}


if(isset($_POST['removeall3']))
{
    unset($_SESSION['wishlist']);
}

































?>