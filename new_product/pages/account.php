
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="../stylesheet/customize.css">
    <script type="text/javascript" src="../javascript/responsive.js"></script>
</head>
<body>

          <!--header section -->
    <div class="headArea">

    </div>
    <!--menu section-->
    <div class="menuItems">
      <a class="active" href="../index.php">mercado</a>
      <a href="../product.php">Product</a>
      <a href="#">Account</a>
      <a href="cart.php">Cart</a>
     
      <!--Ssearch form -->
      <div class="searchArea">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" placeholder="Search.." id='search' name="search">
            <input type="submit" value="Submit">
        </form>  
      </div>
      
      


    </div><!--end of menuItems-->

    <div style="padding-left: 7%; padding-top: 1%;">
        <form name="productForm" onsubmit="return validForm()" method="POST" >
            <fieldset class="formField">
            <label>Email:
            <input type="email" id="mail" name="mail" ></label> <br>
            <label>Password:
            <input type="password" id="pwd" name="pwd" ></label><br>
            <input type="submit" value="Sign In">
            </fieldset>
        </form>
    </div>

</body>
</html>