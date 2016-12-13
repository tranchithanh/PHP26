<html>
	<head>
		<title>Hoc PHP</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>Làm việc với URL: $_GET – lấy thông tin từ trang aurl.php</h1>
		<?php
		//lấy các biến truyền qua url
		$id = $_GET['id'];
		$name = $_GET['name'];
		
		//in thông tin
		echo "id nhận được: {$id} và name nhận được là: {$name}";
		?>
     </body>
</html>
