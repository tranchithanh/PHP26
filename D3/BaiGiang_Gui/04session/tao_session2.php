<?php session_start();?>
<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
	</head>
	<body>		
		<h1>$_SESSION - tạo biến session dạng mảng</h1>
		<ul>
			<li><a href="tao_session2.php" title="">Tạo session</a></li>
			<li><a href="lay_session2.php" title="">Lấy session</a></li>
			<li><a href="huy_session2.php" title="">Hủy session</a></li>
			<li><a href="huy_session_all.php" title="">Hủy hết session</a></li>
		</ul>
		<?php
		//tạo mảng chứa username = admin, password = 123456
		$arUser = array(
			"username" => "admin",
			"password" => 123456
		);
		//tạo session lưu thông tin mảng trên
		$_SESSION["userinfo"] = $arUser;
		?>		
	</body>
</html>
