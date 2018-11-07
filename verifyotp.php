<?php

$realotp=$_COOKIE['otp'];
$enteredotp=$_REQUEST["otpvalue"];
if($realotp == $enteredotp)
{
	echo "otpsuccess";
}
else
{
	echo "notsuccess";
}
?>