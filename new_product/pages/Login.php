<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/Tito_lab5/new_product/controller/prodCont.php'); 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login |</title>
	<link rel="stylesheet" type="text/css" href="../stylesheet/customize.css">
	<link rel="stylesheet" type="text/css" href="../stylesheet/login.css">
	<script type="text/javascript" src="../javascript/login.js">
	</script>
</head>
<body>
		    <!--header section -->
    <div class="headArea">

    </div>
    <!--menu section-->
    <div class="menuItems">
      <a class="active" href="../index.php">mercado</a>
      <a href="product.php">Product</a>
      <a href="account.php">Account</a>
      <a href="cart.php">Cart</a>
     
      <!--Ssearch form -->
      <div class="searchArea">
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="text" placeholder="Search.." id='search' name="search">
            <input type="submit" value="Submit">
        </form>  
      </div>
      
      


    </div><!--end of menuItems-->
<div class="form-cont">
	<div class="wrapper">
		<form name="loginf" action="" onsubmit="return validateloginf()" method="post" enctype="multipart/form-data">
			Email<input type="email" name="cmail" id="cmail" placeholder="email"><br>
			Password<input type="text" name="pass" id="pass" placeholder="Password"><br>
			
			<input type="submit" name="Login">
			
		</form>

		<div>
			<a href="Register.php">or Register</a>
		</div>
	</div>
</div>

</body>
</html>