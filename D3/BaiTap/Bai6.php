<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Bài 6</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<div class="wrapper">
			<h2 class="title">Login</h2>
			<?php 
				$username = "";
				$password = "";

				if (isset($_POST['login'])) {
					$username = $_POST['username'];
					$password = $_POST['password'];
					//đưa vào SESSION
					$_SESSION['username'] = $username;
					$_SESSION['password'] = $password;
				}
			?>
			<div class="cont">
				<form action="" method="post">
					Tên đăng nhập: <input type="text" name="username" value="<?php echo $username; ?>" /><br />
					Mật khẩu: <input type="password" name="password" value="<?php echo $password; ?>" /><br />
					<input type="submit" name="login" value="Đăng nhập" />
				</form>
			</div>
		</div>
	</body>
</html>