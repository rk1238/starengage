<?php

include 'C:\xampp\htdocs\stra\BrandRegistration.php';

	
$brandconnection=new ConnectionForBrand();
$check=$brandconnection->getConnection();
if($check)
{
	echo'success';
}
else
{
	echo'not success';
}
?>