<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>
		
	</title>
	<link rel="stylesheet" type="text/css" href="../stylesheet/customize.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script src="../javascript/responsive.js"></script>
</head>
<body>
	    <!--header section -->
    <div class="headArea">

    </div>
    <!--menu section-->
    <div class="menuItems">
      <a class="active" href="../index.html">mercado</a>
      <a href="pages/product.html">Product</a>
      <a href="pages/account.html">Account</a>
      <a href="#signUp">Sign Up</a>
      <button id="shopCart" style="font-size:24px">Button <i class="fa fa-shopping-cart" href="#"></i></button>
      <!--Ssearch form -->
      <div class="searchArea">
        <form>
            <input type="text" placeholder="Search..">
            <button type="submit" href="#">Search</button>
        </form>  
      </div>
      
      


    </div>

	<!--product vie-->
	<div class="productView">
		<div class="prodPicture">
			<img src="">
		</div>
		<div class="prodDetails">
			<p> $ 1200</p>
			<form>
				<input type="number" name="quantity" min="1" max="100">
		  		<input type="submit" value="ADD TO CART">
	  		</form>
	  		<div class="descriptionTab">
	  			  <button class="linkTab" onclick="openDesc(event, 'Description')">Description</button>
  				  <button class="linkTab" onclick="openDesc(event, 'Review')">Reviews</button>
	  			
	  		</div>
  			<div id="Description" class="contentPage">
				<h3>Description</h3>
				<p>Lenovo IdeaPad 100-14IBD 80RK002UIH Notebook (Core i3
				(5th Gen)/4 GB/500 GB HDD/Windows 10),Black</p>
			</div>

			<div id="Review" class="contentPage">
				  <h3>Reviews</h3>
				  <p>Great performance, really appreciate the speed
				  	Good for gaming, graphics are great plus it does not hang
				  </p> 
			</div>

			
		</div>
		
	</div>
 
    <!--footer-->
    <footer class="footerArea">
        <div id="copyr">Copyright &copy; mercado.com</div>
        <div id="dayTime"><datetime>2018-01-30  10:00</datetime></div>

    </footer>

</body>
</html>