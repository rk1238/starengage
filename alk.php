<?php


$rok=array("ram_krishna92","itsme_radika","sai_chaitrika","rakulpreet","deepthi_sunainaa");
foreach ($rok as $value) {
$rk = file_get_contents('https://www.instagram.com/'.$value); //replace with user
preg_match('/\"edge_followed_by\"\:\s?\{\"count\"\:\s?([0-9]+)/',$rk,$m);
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<div class="w3-card-4">
	<div class="w3-container">
	<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Default_profile_picture_%28male%29_on_Facebook.jpg/600px-Default_profile_picture_%28male%29_on_Facebook.jpg" class="w3-round" alt="Norway" style="width:10%">
  <h3><?php echo"$value" ?></h3>
  <p><?php echo "followers $m[1]" ?></p>
  <button>Invite</button><br>
</div>
</div>
</html>
<style type="text/css">
	.w3-card-4
	{
		width:25%;
        background:red;
	}
</style>
<?php
}
?>
