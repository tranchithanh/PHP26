<?php session_start();?>
<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
	</head>
	<body>
	
		<h1>$_SESSION - hủy biến session riêng biệt</h1>
		<ul>
			<li><a href="tao_session2.php" title="">Tạo session</a></li>
			<li><a href="lay_session2.php" title="">Lấy session</a></li>
			<li><a href="huy_session2.php" title="">Hủy session</a></li>
			<li><a href="huy_session_all.php" title="">Hủy hết session</a></li>
		</ul>
		<?php
		//kiểm tra nếu có session thì hủy
		if (isset($_SESSION["userinfo"]["username"])){
			unset($_SESSION["userinfo"]["username"]);
		}
		if (isset($_SESSION["userinfo"]["password"])){
			unset($_SESSION["userinfo"]["password"]);
		}
		?>		
	</body>
</html>
