<?php session_start();?>
<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
	</head>
	<body>
	
		<h1>$_SESSION - lấy biến session riêng biệt</h1>
		<ul>
			<li><a href="tao_session2.php" title="">Tạo session</a></li>
			<li><a href="lay_session2.php" title="">Lấy session</a></li>
			<li><a href="huy_session2.php" title="">Hủy session</a></li>
			<li><a href="huy_session_all.php" title="">Hủy hết session</a></li>
		</ul>
		<?php
		//kiểm tra nếu tồn tại session thì in ra
		if (isset($_SESSION["userinfo"])){
			$arUser = $_SESSION["userinfo"];
			$username = $arUser["username"];
			$password = $arUser["password"];
			
			echo "Tên đăng nhập: {$username} và Mật khẩu: {$password}";
		}
		?>		
	</body>
</html>
