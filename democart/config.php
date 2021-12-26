<?php
	$conn = new mysqli("localhost","root","","trasua");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>