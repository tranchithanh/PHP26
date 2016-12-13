<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>VinaTAB EDU - Mon PHP</title>			
	</head>
	<body>
		<h1>In HTML trong PHP</h1>			
		<?php
		$fullname = "VinaTAB";
		$username = "admin";
		$password = 123456;
		
		echo "Tên trung tâm là <strong>{$fullname}</strong>";
		echo "<br /><br />"; 
		echo "Tên đăng nhập là <span color='red'>{$username}</span> 
			và mật khẩu là <span color=\"red\">{$password}</span>";
		?>		
	</body>
</html>