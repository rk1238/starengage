<?php
include'BrandRegistration.php';
$phonenumber=$_REQUEST["phonenumber"];
$firstname=$_REQUEST["firstname"];
$lastname=$_REQUEST["lastname"];
$companyname=$_REQUEST["companyname"];
$email=$_REQUEST["email"];
$website=$_REQUEST["website"];
$country=$_REQUEST["country"];
$gender=$_REQUEST["gender"];
$password=$_REQUEST["password"];

//connection for password hashing

$hashpassword=new PasswordHash();
$hashedpassword=$hashpassword->passwordHashing($firstname,$password);

//cretating connection
$connectionforbran=new ConnectionForBrand();
$connectionstatus=$connectionforbran->getConnection();
if (!$connectionstatus)
{
	die('Could not connect:');
}
//setting values to the onject
$brandpesonregister=new BrandPerson($phonenumber,$firstname,$lastname,$companyname,$email,$website,$country,$gender,$hashedpassword);

//set object to the RegisterBrandPerson class to register

$registerbrandperson=new RegisterBrandPerson();
$finalresult=$registerbrandperson->theRegisterBrandPerson($brandpesonregister);
echo $finalresult;












?>