<?php
	$mysqli = new mysqli("127.0.0.1","root","","tintuc");

	$mysqli -> set_charset("utf8");

	if (mysqli_connect_errno()) {
		echo "can't connect to database <br />".mysqli_connect_errno();
		exit();
	}
?>