<?php
include("session.php");
	if(isset($_POST["updateBtn"])){
		include("conn.php");

		$sql = "UPDATE health_status SET 
		ic ='$_POST[ic]', 
		name='$_POST[phone_num]', 
		contact_email='$_POST[email_address]', 
		contact_address='$_POST[home_address]', 
		contact_gender='$_POST[gender]', 
		contact_relationship='$_POST[relationship]', 
		contact_dob='$_POST[dob]' 

		WHERE id=$_POST[id];";

		if (mysqli_query($con, $sql)) {
		mysqli_close($con);
		echo "<script>alert('Record updated!'); window.location.href='view.php';</script>";
		}

	}

?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Contact</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>