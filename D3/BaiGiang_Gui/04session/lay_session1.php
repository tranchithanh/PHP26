<?php session_start();?>
<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
	</head>
	<body>
	
		<h1>$_SESSION - lấy biến session riêng biệt</h1>
		<ul>
			<li><a href="tao_session1.php" title="">Tạo session</a></li>
			<li><a href="lay_session1.php" title="">Lấy session</a></li>
			<li><a href="huy_session1.php" title="">Hủy session</a></li>
			<li><a href="huy_session_all.php" title="">Hủy hết session</a></li>
		</ul>
		<?php
		//kiểm tra nếu tồn tại session thì in ra
		if (isset($_SESSION["username"])){
			$user = $_SESSION["username"];
			echo "Username lấy từ session là: {$user}";
		}
		if (isset($_SESSION["password"])){
			$pass = $_SESSION["password"];
			echo "Password lấy từ session là: {$pass}";
		}
		?>		
	</body>
</html>
