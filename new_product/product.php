<?php
    include($_SERVER['DOCUMENT_ROOT'].'/Tito_lab5/new_product/controller/prodCont.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <!--bootstrap styling link-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="stylesheet/customize.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!--header section -->
    <div class="headArea">

    </div>
    <!--menu section-->
    <div class="menuItems">
      <a href="index.php">mercado</a>
      <a class="active"  href="#product">Product</a>
      <a href="account.php">Account</a>
      <a href="pages/Register.php">Sign Up</a>
      <button id="shopCart" style="font-size:24px"> <i class="fa fa-shopping-cart"></i>Cart</button>
      <!--Ssearch form -->
      <div class="searchArea">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" placeholder="Search.." id="search" name="search">
            <input type="submit" value="submit">
        </form>  
      </div>
      
      


    </div>
    <!--container for content area-->
    
    <div class="row">

         <?php 
         /*displays user searched products*/
         if(isset($_POST['search'])){
            searchDisplay($_POST['search']);

         }
         /*displays all products*/
         else{
       
         displayProducts();
          }
         ?> 
    </div>
    
</body>
</html>