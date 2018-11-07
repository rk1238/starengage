<?php
$phonenumber=$_REQUEST["phonenumber"];
include 'BrandRegistration.php';
//getting phone number from brandregistration.html page

//create ref varible for MySQL connection from BrandRgistration.php useing the class ConnectionForBrand
$connectionforbran=new ConnectionForBrand();
$connectionstatus=$connectionforbran->getConnection();
if (!$connectionstatus)
{
	die('Could not connect: ');
}


else
{
	#this is for checking the phone number is alredy register or not
	checkNumberIsInOrNot($phonenumber,$connectionstatus);
}

#checking number in or not 
function checkNumberIsInOrNot($phonenumber,$connectionstatus)
{
	$checkingquery="SELECT * FROM branduser where phonenumber='$phonenumber'";
	$checkresult=mysqlI_query($connectionstatus,$checkingquery);
	if(mysqli_num_rows($checkresult)>0)
	{
		echo"numberfound";
	}
		else
	{
		sendIngOTP($phonenumber);
	}
}

#sending otp function and set cookie
function sendIngOTP($numbers)
{
	$numbers="91".$numbers;
	require('Textlocal.class.php'); 
	$Textlocal = new Textlocal(false, false, 'STVxzw8oWsI-yki0sGygDut6IMluJEL0j9GcqICl97');
	$numbers = array($numbers);
	$sender = 'TXTLCL';
	$otp=mt_rand(10000,99999);
	$message = "congrats! suresh eluru.your request for HIV test is taken.please free with us.we will inform as soon as possible.if you got +ve resulet we wiill give counciling to you. thank you!";
 	try
 	{
	$response = $Textlocal->sendSms($numbers, $message, $sender);
	setcookie('otp',$otp);
	echo 'sucessfullysentotptoyourmobile';
	}
	catch(Exception $e)
	{
		die('could not connect'.$e);
	}

}

?>