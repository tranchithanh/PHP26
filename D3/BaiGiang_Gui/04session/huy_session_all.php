<?php session_start();?>
<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
	</head>
	<body>
	
		<h1>$_SESSION - hủy hết biến session</h1>
		<ul>
			<li><a href="tao_session1.php" title="">Tạo session</a></li>
			<li><a href="lay_session1.php" title="">Lấy session</a></li>
			<li><a href="huy_session1.php" title="">Hủy session</a></li>
			<li><a href="huy_session_all.php" title="">Hủy hết session</a></li>
		</ul>
		<?php
		session_destroy();
		?>		
	</body>
</html>
