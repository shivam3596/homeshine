<?php

require 'connect.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['name']);
$email   = $conn->real_escape_string($_POST['email']);
$mobile   = $conn->real_escape_string($_POST['mobile']);
$query   = "INSERT into register (name,email,mobile) VALUES('" . $name . "','" . $email . "','" . $mobile . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}

echo "<p>Thank You For registration <br><b>redirecting to homepage...</b></p>";   
header( "refresh:3; url=main.php" );    

$conn->close();

?>
<style type="text/css" rel="stylesheet">
	p{
		font-size:30px;
		font-weight:800;
		text-align:center;
	}
	b{
		font-size:20px;
		text-align:center;
		color:red;
	}
	body{
		background-color:#e3e3e3;
	}
</style>