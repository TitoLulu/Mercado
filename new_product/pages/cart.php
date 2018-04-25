<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/Tito_lab5/new_product/controller/prodCont.php');
    $ip_add =getHostByName(getHostName());
 
    addproduct($ip_add);
    

?>
<!DOCTYPE html>
<html>
<head>
	<title>cart</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="../stylesheet/customize.css">
    <style>
	

</style>
</head>
<body>
	    <!--header section -->
    <div class="headArea">

    </div>
    <!--menu section-->
    <div class="menuItems">
      <a class="active" href="../index.php">mercado</a>
      <a href="../product.php">Product</a>
      <a href="pages/account.html">Account</a>
      <a href="pages/cart.php">Cart</a>
      <a href="#signUp">Sign Up</a>
      <!--<button id="shopCart" style="font-size:24px" href="pages/cart.php"> <i class="fa fa-shopping-cart" > </i>Cart</button>-->
      <!--Ssearch form -->
      <div class="searchArea">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" placeholder="Search.." id='search' name="search">
            <input type="submit" value="Submit">
        </form>  
      </div>
      
      


    </div>
    <!--display cart-->
    <table style="width:100%" border="5">
  <tr>
    <th>image</th>
    <th>unit price</th> 
    <th>Quantity</th>
    <th>Total Price</th>
    <th>change quantity</th>
    <th>Remove from Cart</th>
  </tr>
  <tr>
  	<td><img src="<?php echo  $_SESSION['p_img']?>" width=150; height=100></img></td>
    <td><?php echo $_SESSION['p'] ?></td>
    <td><?php echo $_SESSION['price'] ?></td> 
    <td><?php  echo $_SESSION['amount'] ?></td>
    <td>
    	<form method="POST" id="addItemform" >
				<input type="text" id="addqty" name="addqty">
				<input type="hidden" name="id" value="<?php echo $_SESSION['p_id'] ?>">
				<button href="#" type="submit" value="submit" name="addItem">change Quantity</button>
		</form>
	</td>

	 <td>
    	<form method="POST" id="deleteItemform" >
				<input type="hidden" name="id" value="<?php echo $_SESSION['p_id'] ?>">
				<button href="#" type="submit" value="submit" name="deleteItem">Remove from Cart</button>
		</form>
	</td>
  </tr>

 
</table>
  <form action="../index.php">
    <input type="submit" value="Continue Shopping" />
</form>
  <div><form action="Checkout.php"><button href="">Check Out</button></form></div>


	
</body>
</html>