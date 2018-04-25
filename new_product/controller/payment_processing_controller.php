<?php 

//include_once('./database/prodclass.php');
include($_SERVER['DOCUMENT_ROOT'] . '/Tito_lab5/new_product/database/prodclass.php');

function recordorder(){
	$product_id=$_SESSION['p_id'];
	$customer_id=$_SESSION['user'];
	$invoice_no=mt_rand();
	$qty=$_SESSION['price'];
	$email=$_SESSION['email']; 
	if($email){
		$status='Completed!';
	}else{
		$status='In Progress';
	}
	$obj=new ProdClass();
	$res = $obj->recordorder($product_id,$customer_id, $invoice_no, $qty,$status);

}

function recordpayment(){
	$amt=$_SESSION['amount'];
	$customer_id=$_SESSION['user'];
	$product_id=$_SESSION['p_id'];
	$currency='GHC';

	$obj=new ProdClass();
	$paymentresult=$obj->recordpayment($amt,$customer_id,$product_id,$currency);
}


function displayorder($customer_id){
	$obj=new ProdClass();
	$obj->displayorderdetails($customer_id);
	$result=$obj->fetch();
	foreach($result as $result){
	$_SESSION['invoice']=$result['invoice_no'];
	$_SESSION['qty']=$result['qty'];
	$_SESSION['date']=$result['order_date'];
	$_SESSION['status']=$result['status'];
}

function custdtls($customer_id){
	$obj=new ProdClass();
	$obj->customerdetails($customer_id);
	$result=$obj->fetch();
	foreach($result as $custdtl){
		//$_SESSION['id']=$custdtl['customer_id'];
		$_SESSION['customer_name']=$custdtl['customer_name'];
		$_SESSION['email']=$custdtl['customer_email'];
		$_SESSION['country']=$custdtl['customer_country'];
		$_SESSION['city']=$custdtl['customer_city'];
		$_SESSION['address']=$custdtl['customer_address'];
		$_SESSION['contact']=$custdtl['customer_contact'];
	}
}
}

function emailtoclient($email,$invoice,$totalamount){
    $message = 'Hello '.$_SESSION['customer_name'].'\n 
     This is to confirm purchase of a product from our website. We are currently processing your purchase and will get back to you with regard shipment details <br>
     Below are details of your purchase:
    Invoice Number:'.$invoice.'\n
        Date: '.date('Y-m-d').'\n
        Total Price: '.$totalamount.'
    <br>';
    $subject = 'Purchase Details';
    $header = 'From: titolulu6@mercado.com' . "r\n\" .  
    'Reply-To: titolulu6@mercado.com'" .
    'X-Mailer: PHP/' . phpversion();
  
    mail($email, $subject, $message, $header);

    
}



?>