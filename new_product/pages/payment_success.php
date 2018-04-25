<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../stylesheet/customize.css">
	<link rel="stylesheet" type="text/css" href="../stylesheet/payment_success.css">
	<?php 
	include($_SERVER['DOCUMENT_ROOT'] . '/Tito_lab5/new_product/controller/payment_processing_controller.php');
	//save transaction details  to orders table and payment details  payment table 
	session_start();
	$insertorder=recordorder();
	$insertpayment=recordpayment();
	$customer_id=$_SESSION['user'];
	//$name=$_SESSION['name'];
	//echo$name;
	$display=displayorder($customer_id);
	$custdls=custdtls($customer_id);



	?>
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
	<!--order display-->
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

	<div id="orderDtl">
		<table>
			<caption><h4>Your Order<h4></caption>
			<tr>
				<th colspan="4">Bill To </th>
				
			</tr>
			<tr>
				<th>Customer Name </th>
				<td colspan="3"><?php echo $_SESSION['customer_name'] ?></td>
			</tr>
			
			<tr><th>Email</th>
				<td><?php echo $_SESSION['email']?></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><?php echo $_SESSION['city']?></td>
				<td><?php echo $_SESSION['address']?></td>
				<td><?php echo $_SESSION['country']?></td>
			</tr>
			<tr>
				<th>Invoice Number</th>
				<th>Quantity</th>
				<th>Order Date</th>
				<th>Status</th>
			</tr>
			<tr>
			<td><?php echo $_SESSION['invoice'] ?></td>
			<td><?php echo $_SESSION['qty']?></td>
			<td><?php echo $_SESSION['date']?></td>
			<td><?php echo $_SESSION['status']?></td>
		</tr>
		</table>
		
	</div>
	<div id="msg">
		<h3>Thank You for Shopping with us  !</h3>
	</div>



	<!--send email to customer-->
	<div>
	<?php 
	$email=$_SESSION['email'];
	$invoice=$_SESSION['invoice'];
	$totalamount=$_SESSION['amount'];

	$message= emailtoclient($email,$invoice,$totalamount);

	?>
</div>
	
	

</body>
</html>