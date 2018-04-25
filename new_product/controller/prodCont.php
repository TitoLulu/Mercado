<?php 

//include_once('./database/prodclass.php');
include($_SERVER['DOCUMENT_ROOT'] . '/Tito_lab5/new_product/database/prodclass.php');
/*category dropdown*/
function cats()
{
	$obj = new ProdClass();

	$obj->selectCat();

	$row = $obj->fetch();
	foreach ($row as $row) {
		echo '<option value="'.$row['cat_id'].'">'.$row['cat_name'].'</option>';
	}
}

/*brand dropdown*/
function brands(){
	$obj=new ProdClass();
	$obj->selectBrand();
	$row = $obj->fetch();

	foreach ($row as $row) {
		echo '<option value="'.$row['brand_id'].'">'.$row['brand_name'].'</option>';
	}
}


/*displays 3 products on index content area*/
function displayProducts(){
	$obj=new ProdClass();
	$obj->fetchProduct();
	$rows=$obj->fetch();
	foreach($rows as $row){
		$image=$row['product_image'];
		$image=str_replace("../","",$image);
		echo '<div class="col-md-3" >
		<img src="'.$image.'" style="height:160px;">
                <div><a href="./pages/viewPage.php"><button class="but">View</button></a></div>
                <div >'.$row['product_price'].'</div>
                <form action="" method="POST">
                <div><button type="submit" value="'.$row['product_id'].'" name="cartpost">Add to Cart</button></div>
                </form>
            </div>';

	
	}
}

/*function adds item to cart*/
if (isset($_POST['cartpost'])){
	$p_id=$_POST['cartpost'];
	$ip_add =getHostByName(getHostName());
	$qty='1';
	$obj=new ProdClass();
	$res = $obj->insertCart($p_id,$ip_add,$qty);

}

/*add product from cart*/
function addproduct($ip_add){
	$num=0;
	$p=0;
	$sub=0;
	$amount=0;
	$price=0;
	$obj=new ProdClass();
	$obj->fetchCart($ip_add);
	$rows=$obj->fetch();
	foreach($rows as $row){
		$qty=$row['qty'];;
		$num+=$qty;
		$id=$row['p_id'];
		$q="SELECT product_price, product_id, product_image FROM products where product_id='$id'";

		$obj->query($q);
		$price=$obj->fetch();
		foreach($price as $row){
			$p=$row['product_price'];
			$pid=$row['product_id'];
			$pimg=$row['product_image'];
			//$pname=$row['product_title'];


	}
	$sub=$p* $qty;
	$amount =$amount + $sub;

	
	//session_start();
	
	$_SESSION['price']=$num;
	$_SESSION['amount']=$amount;
	$_SESSION['p']=$p;
	$_SESSION['p_id']=$pid;
	$_SESSION['p_img']=$pimg;
	//$_SESSION['prod_name']=$pname;

	
	}
	

		
	
}
//add item quantity
if (isset($_POST['addItem'])){

	$qty=$_POST['addqty'];
	$p_id=$_POST['id'];
	$ip_add=getHostByName(getHostName());
	$obj=new ProdClass();
 	$res=$obj->updateCart($ip_add,$p_id,$qty);
 	if($res){
 		$_SESSION['price'] =$qty;
 	}



}

/*delete item from cart*/

if(isset($_POST['deleteItem'])){
	$p_id=$_POST['id'];
	$ip_add=getHostByName(getHostName());
	$obj=new ProdClass();
	$res=$obj->deleteCart($ip_add,$p_id);


}

/*fetches product with keyword similar to user entered keyword*/

function searchDisplay($search){
	 $obj=new ProdClass();
	 $obj->fetchkeyedProduct($search);
	 $rows = $obj->fetch();
	 foreach($rows as $row){
	 	$image=$row['product_image'];
		$image=str_replace("../","",$image);
	 	echo '<div class="col" >
		<img src="'.$image.'" style="height:160px;">
                <div><a href="./pages/viewPage.php"><button class="but">View</button></div>
                <div >'.$row['product_price'].'</div>
                <div><a href=""><button class="but">Add to Cart</button></a></div>
                
                
            </div>';
        }
}
	




if(isset($_POST['submit']) &!empty($_POST['submit']))
{

 $pTitle=$_POST['pTitle'];
 $cat=$_POST['cat'];
 $brand=$_POST['brand'];
 $pPrice=$_POST['pPrice'];
 /*$pImg=$_POST['PImg'];*/
 $pDes=$_POST['pDes'];
 $pkwd=$_POST['pKwd'];
 echo $pTitle, $cat, $brand,$pPrice;

 /*path to store uploaded image*/

 $img = addslashes($_FILES['pImg']['tmp_name']);
 $Img2 = addslashes($_FILES['pImg']['name']);
 $img = file_get_contents($img);
 $target= "../images/".basename($_FILES['pImg']['name']);





 $obj=new ProdClass();
 $res = $obj->insertnewProduct($pTitle,$pPrice,$cat,$brand,$target,$pDes,$pkwd);

 var_dump($res) ;
  /*move uploaded image to images folder*/
   if(move_uploaded_file($_FILES['pImg']['tmp_name'], $target)){
 	return true;
 }else{
 	return false;
 }

}

/*--------------------------------
Register New customer
----------------------------------*/
$mailErr= $nameErr = $passErr= $countryErr= $cityErr= $contactErr= $addressErr= $imgErr= $ctelErr= "" ;
if (isset($_POST['Register']) &!empty($_POST['Register'])){
	if(empty($_POST['cmail'])){
		$mailErr= "Email Required";
	}else{
		$email=test_input($_POST['cmail']);
	}

	if(empty($_POST['cname'])){
		$nameErr="Name Required";
	}else{
		$name=test_input($_POST['cname']);
	}
	if(empty($_POST['cpass'])){
		$passErr="Password Required";
	}else{
		$pass=test_input($_POST['cpass']);
	}

	if(empty($_POST['country'])){
		$countryErr="Country Required";
	}else{
		$country=test_input($_POST['country']);
	}
	if(empty($_POST['city'])){
		$cityErr="City Required";
	}else{
		$city=test_input($_POST['city']);
	}
	if(empty($_POST['ctel'])){
		$ctelErr="Telephone Number Required";
	}else{
		$contact=test_input($_POST['ctel']);
	}

	if(empty($_POST['caddress'])){
		$addressErr="Address Required";
	}else{
		$address=test_input($_POST['caddress']);
	}
	

	$ip=getHostByName(getHostName());

	 /*path to store uploaded image*/

	 $img = addslashes($_FILES['cimage']['tmp_name']);
	 $Img2 = addslashes($_FILES['cimage']['name']);
	 $img = file_get_contents($img);
	 $image= "../images/".basename($_FILES['cimage']['name']);


	 if(isset($ip,$name,$email,$pass,$country,$city,$contact,$image,$address)){

		 $obj=new ProdClass();
		 $res = $obj->newcustomer($ip,$name,$email,$pass,$country,$city,$contact,$image,$address);

		 	 /*move uploaded image to images folder*/
		 if(move_uploaded_file($_FILES['cimage']['tmp_name'], $image) and $res){
		 	header("Location: Login.php");
		 	return true;
		 }else{
		 	return false;
		 }
	}






 
}

function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
}

/*----------------------------------------------------------
Search customer in customer database
-----------------------------------------------------------*/
if(isset($_POST['Login']) &!empty($_POST['Login'])){

	$email=$_POST['cmail'];
	$pass=$_POST['pass'];


	$obj=new ProdClass();
 	$res = $obj->login($email, $pass);
 	$rows = $obj->fetch();
 	foreach ($rows as $row){
 		if($email = $row['customer_email'] && $pass=$row['customer_pass']){
 			session_start();
 			$_SESSION['user']=$row['customer_id'];
 			$_SESSION['email']=$row['customer_email'];
 			$name=$row['customer_name'];
 			$message="Welcome".$name;
 			$_SESSION['message']=$message;
 			//$_SESSION['name']=$name;
 			header("Location: ../index.php?status=$message");
 			echo "<p>$message</p>";
 			 

 		}else{
 			header("Location: /Register.php");
 			
 		}
 	} 
 

}



 ?>
