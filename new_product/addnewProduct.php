
<!DOCTYPE html>
<html>
<head>
	<title>New Product</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 
      <!--customized website css-->
    <link rel="stylesheet" type="text/css" href="stylesheet/customize.css">
     <link rel="stylesheet" type="text/css" href="stylesheet/add.css">
  <?php
	include_once($_SERVER['DOCUMENT_ROOT'] . '/Tito_lab5/new_product/controller/prodCont.php');
	
?>

  
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
     </div><!-- end of menu section-->

	<div class="productinsert">
		<div class="wrapper">
			<form>
				Title<input type="text" name="pTitle" placeholder="Product Title"><br>
				Category<select name="cat"><?php  cats();?></select><br>
				Brand<select name="brand" id="pBrand">
					<?php  brands(); ?>
						
					</select><br>
				Price<input type="text" name="pPrice" placeholder="Price $"><br>
				Description<input rows="5" name="pDes" placeholder="description"><br>
				Image<input id="pImg" type="file" name="pImg"><br>
				Message<input id="msg" type="text" class="form-control" rows="5" name="pKwd" placeholder="keywords"><br>
				<input type="submit" value="Add Product" name="addp">

			</form>
		</div>
	<div>
		

</body>
</html>