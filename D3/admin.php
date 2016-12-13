<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>Bài Tập</title>
	</head>
	<body>
		<h3>Trang admin</h3>
		<?php
			if (isset($_SESSION['user_info'])) {
				echo 'user : '.$_SESSION['user_info']['username'].'<br />';
				echo 'pass : '.$_SESSION['user_info']['password'];
			}
		?>
	</body>
</html>