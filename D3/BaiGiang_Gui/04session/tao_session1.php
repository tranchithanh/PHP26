<?php session_start();?>
<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
	</head>
	<body>		
		<h1>$_SESSION - tạo biến session riêng biệt</h1>
		<ul>
			<li><a href="tao_session1.php" title="">Tạo session</a></li>
			<li><a href="lay_session1.php" title="">Lấy session</a></li>
			<li><a href="huy_session1.php" title="">Hủy session</a></li>
			<li><a href="huy_session_all.php" title="">Hủy hết session</a></li>
		</ul>
		<?php
		//tạo session chứa username = admin, password = 123456
		$_SESSION["username"] = "admin";
		$_SESSION["password"] = 123456;
		?>		
	</body>
</html>
