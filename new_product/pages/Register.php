<?php
  require($_SERVER['DOCUMENT_ROOT'] . '/Tito_lab5/new_product/controller/prodCont.php'); 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Rgister |</title>
	<link rel="stylesheet" type="text/css" href="../stylesheet/customize.css">
	<link rel="stylesheet" type="text/css" href="../stylesheet/login.css">
	<script type="text/javascript" src="../javascript/register.js">
	</script>
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
     </div>
<div class="form-cont">
	<div class="wrapper">
		<form name="registerf" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return registerf()" method="post" enctype="multipart/form-data">
			Name<input type="text" name="cname" id="cname" autocomplete="name"><br>
			<span class="error"><?php echo$nameErr; ?></span><br>
			Email<input type="email" name="cmail" id="cmail" autocomplete="email"><br>
			<span class="error"><?php echo $mailErr; ?></span><br>
			Password<input type="text" name="cpass" id="cpass" autocomplete="password"><br>
			<span class="error"><?php echo $passErr; ?></span><br>
			Country<input type="text" name="country" id="country" autocomplete="country"><br>
			<span class="error"><?php echo $countryErr; ?></span><br>
			City<input type="text" name="city" id="city" autocomplete="city"><br>
			<span class="error"><?php echo $cityErr; ?></span><br>
			Contact<input type="int" name="ctel" id="ctel" autocomplete="telephone"><br>
			<span class="error"><?php echo $ctelErr;?></span><br>
			Image<input type="file" name="cimage" id="cimage"><br>
			<span class="error"><?php echo $imgErr;?></span><br>

			Address<input type="text" name="caddress" id="caddress" autocomplete="address">	<br>
			<span class="error"><?php echo $addressErr; ?></span><br>
			<input type="submit" name="Register">
		</form>
</div>
</div>

</body>
</html>