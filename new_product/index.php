<?php
    session_start(); 
    require($_SERVER['DOCUMENT_ROOT'] . '/Tito_lab5/new_product/controller/prodCont.php');
    $ip_add =getHostByName(getHostName());
    addproduct($ip_add);



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
    <!--font awesome icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--customized website css-->
    <link rel="stylesheet" type="text/css" href="stylesheet/customize.css">
    
</head>
<body>
    <!--header section -->
    <div class="headArea">

    </div>
    <!--menu section-->
    <div class="menuItems">
      <a class="active" href="index.php">mercado</a>
      <a href="product.php">Product</a>
      <a href="pages/account.php">Account</a>
      <a href="pages/cart.php">Cart</a>
      <a href="pages/Register.php">Sign Up</a>
      <!--Ssearch form -->
      <div class="searchArea">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" placeholder="Search.." id='search' name="search">
            <input type="submit" value="Submit">
        </form>  
      </div>
      
      


    </div><!--end of menuItems-->
    <!--container for content area-->
    <div id="contentContainer">
        <!--sidebar section-->
        <div class="sidebarArea">
            <!--categories-->
            <h2>Categories:</h2>
            <ul>
                <li>
                    category 1
                </li>
                <li>
                   category 2 
                </li>
                <li>
                    category 3
                </li>
                <li>
                    category 4
                </li>
            </ul>
            <!--brands-->
            <h2>Brands:</h2>
            <ul>
                <li>
                    brand 1
                </li>
                <li>
                   brand 2 
                </li>
                <li>
                    brand 3
                </li>
                <li>
                    brand 4
                </li>
            </ul>


        </div>
        <!--breadcrumb section-->
        <div class="breadcrumbsArea">
            <h2><?php  if(isset($_SESSION['user'])){
                echo $_SESSION['message']; }else{
        echo "Welcome Guest";
    } ?></h2>
            <!--cart-->
            <form action="addnewProduct.php">
            <input type="submit"  style="font-size:24px;  margin-top: -4%; float: right; margin-right: 15%;" value="Add New Product" ></form>
            <div style="float:left; margin-left: 10px;">Total Quantity <?php echo $_SESSION['price'] ?></div>
            <div style="float:left; margin-left:10px; ">Total Price <?php echo $_SESSION['amount']
            ?></div>

        </div>
        <!--content div-->
        <div  class="row" style="height: 75%; width: 73%; float: right;margin-left: 2%; margin-top: 0.4%;">
            <?php 
                if(isset($_POST['search'])){

                    searchDisplay($_POST['search']);
                }
                else{
                    displayProducts();

                }?>

        
        </div>
    </div>
    <!--footer-->
    <div>
    <footer class="footerArea" style="margin-top: 2%;">
        <div id="copyr">Copyright &copy; mercado.com</div>
        <div id="dayTime"><datetime>2018-01-30  10:00</datetime></div>
        <div><p>phone : +233500417705</p></div>
    </footer>
    </div>
    
</body>
</html>