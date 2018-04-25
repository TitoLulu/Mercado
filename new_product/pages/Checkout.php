<?php 
include($_SERVER['DOCUMENT_ROOT'] . '/Tito_lab5/new_product/controller/prodCont.php');

/*-------------------------------------------
if user session active direct to payment.php
else direct to login.php
--------------------------------------------*/
session_start();

if($_SESSION['user']){

	header('Location: Payment.php');

}
else{
	header('Location: Login.php');
}

?>