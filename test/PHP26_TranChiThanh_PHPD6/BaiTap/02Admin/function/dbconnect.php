<?php
	$mysqli = new mysqli("localhost","root","","shophoa");

	$mysqli->set_charset("utf8");

	if (mysqli_connect_errno()){
		echo "can't connect to database<br />".mysqli_connect_errno();
		exit();
	}
?>