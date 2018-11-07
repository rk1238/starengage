<?php
$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

$myJSON = json_encode($myObj);

echo $myJSON;
$de=json_decode($myJSON,false);
echo $de->name;
?>
