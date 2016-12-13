<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Welcome Bài 6</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<div class="wrapper">
			<h2 class="title">Welcome</h2>
			<div class="cont">
				<?php
					$ad = "admin";
					if (isset($_SESSION['username']) && ($_SESSION['username']!=""&&$_SESSION['password']!="")) {
						$username = $_SESSION['username'];
						if ($username == $ad) {
							echo "Chào, {$ad}";
						}else{
							echo "Bạn không phải là {$ad}";
						}
					}else{
						echo "Bạn chưa đăng nhập";
					}
				?>
			</div>
		</div>
	</body>
</html>