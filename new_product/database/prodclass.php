<?php 
	include_once('dbconnectClass.php');

/**
* 
*/
class ProdClass extends Dbconnect
{
	


 public function selectCat()
	{
		    $sql="SELECT cat_id, cat_name FROM categories";
        	return $this->query($sql);
	}

public function fetchProduct(){
	$sql="SELECT product_image, product_id, product_title, product_price FROM products";
	return $this->query($sql);
}

public function fetchkeyedProduct($search){
	$sql="SELECT product_image, product_title,product_price, product_keywords FROM products WHERE product_keywords like '%".$search."%'";
	return $this->query($sql);
}
//insert product id, client ip address, and quantity
public function insertCart($p_id,$ip_add,$qty){
	$sql="INSERT INTO cart(p_id, ip_add,qty) VALUES ('$p_id','$ip_add','$qty')";
	return $this->query($sql);
}
//update cart quantity
public function updateCart($ip_add, $p_id,$qty){
	$sql="UPDATE cart SET qty='$qty' WHERE ip_add='$ip_add' and p_id='$p_id'";
	return $this->query($sql);

}
//fetch cart
public function deleteCart($ip_add,$p_id){
	$sql="DELETE FROM cart WHERE ip_add='$ip_add'";
	return $this->query($sql);
}

public function fetchCart($ip_add){
	$sql="SELECT * FROM cart WHERE ip_add='$ip_add'";
	
	return $this->query($sql);
}



public function selectBrand(){

	$sql="SELECT brand_id, brand_name FROM brands";
	return $this->query($sql);
}


 
 public function insertnewProduct($pTitle,$pPrice,$cat,$brand,$pImg,$pDes,$pKwd)
 {
	$sql="INSERT into products(product_title, product_price, product_cat,product_brand,
	product_image,product_desc,product_keywords) values
	 ('$pTitle','$pPrice','$cat','$brand','$pImg','$pDes','$pKwd')";
	return $this->query($sql);

}


public function newcustomer($ip,$name,$email,$pass,$country,$city,$contact,$image,$address){
	$sql="INSERT into customer(customer_ip,customer_name,customer_email, customer_pass,customer_country, customer_city, customer_contact, customer_image, customer_address) values
	('$ip','$name','$email','$pass','$country','$city','$contact','$image','$address')";
	return $this->query($sql);
}

public function login($email, $pass){
	$sql="SELECT * FROM customer WHERE customer_email='$email' AND customer_pass='$pass'";
	return $this->query($sql);
}

public function recordorder($product_id,$customer_id, $invoice_no, $qty,$status){

	$sql="INSERT INTO orders (product_id, customer_id, invoice_no,qty,status) VALUES ('$product_id','$customer_id', '$invoice_no', '$qty','$status')";
	return $this->query($sql);

}
public function recordpayment($amt,$customer_id,$product_id,$currency)
{
	$sql="INSERT INTO payment (amt,customer_id,product_id,currency) VALUES ('$amt','$customer_id','$product_id','$currency')";
	return $this->query($sql);
}

public function displayorderdetails($customer_id){
	$sql="SELECT invoice_no,qty,order_date,status FROM orders WHERE customer_id = '$customer_id' limit 1";
	return $this->query($sql);

}

public function customerdetails($customer_id){
	$sql="SELECT customer_id, customer_name, customer_email, customer_country, customer_city, customer_contact, customer_address FROM customer WHERE customer_id='$customer_id'";
	return $this->query($sql);
}
}

 ?>