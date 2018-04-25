<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="../stylesheet/customize.css">
		<link rel="stylesheet" type="text/css" href="../stylesheet/payment_success.css">
</head>
<body>
	<!--header section -->
    <div class="headArea">

    </div>
    <!--menu section-->
    <div class="menuItems">
      <a class="active" href="../index.php">mercado</a>
      <a href="../product.php">Product</a>
      <a href="../pages/account.html">Account</a>
      <a href="../pages/cart.php">Cart</a>
     
      <!--Ssearch form -->
      <div class="searchArea">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" placeholder="Search.." id='search' name="search">
            <input type="submit" value="Submit">
        </form>  
      </div>
      
      


    </div><!--end of menuItems-->
	<!--order display-->

	<form action="payment_success.php" method="post" id="paypal">

	  <!-- Identify your business so that you can collect the payments. -->
	  <input type="hidden" name="business" value="herschelgomez@xyzzyu.com">

	  <!-- Specify a Buy Now button. -->
	  <input type="hidden" name="cmd" value="_xclick">

	  <!-- Specify details about the item that buyers will purchase. -->
	  <input type="hidden" name="item_name" value="<?php echo $_SESSION['prod_name']?>">
	  <input type="hidden" name="amount" value="<?php echo $_SESSION['p_id'] ?>">
	  <input type="hidden" name="amount" value="<?php echo $_SESSION['p'] ?>">
	  <input type="hidden" name="amount" value="<?php echo $_SESSION['price'] ?>">
	  <input type="hidden" name="currency_code" value="GHC">

	  <!-- Display the payment button. -->
	  <input type="image" name="submit" border="0" id="paybut"
	  src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
	  alt="Buy Now">
	  <img alt="" border="0" width="1" height="1"
	  src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

	</form>
</body>
</html>

