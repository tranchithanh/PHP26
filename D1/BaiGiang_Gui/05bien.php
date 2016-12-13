<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>VinaTAB EDU - Mon PHP</title>			
	</head>
	<body>
		<h1>PHP kết hợp HTML</h1>			
		<?php
		$fullname = "VinaTAB";
		$username = "admin";
		$password = 123456;
		
		echo "Tên trung tâm là <strong>{$fullname}</strong>";
		?>
		<p>Website trung tâm là: <a href="http://vinatab.net" title="">http://vinatab.net</a></p>
		<?php		
		echo "Tên đăng nhập là <span color='red'>{$username}</span> 
			và mật khẩu là <span color=\"red\">{$password}</span>";
		?>		
	</body>
</html>