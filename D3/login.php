<?php session_start();?>
<!DOCTYPE html>
<html>
	<head>
		<title>Bài Tập</title>
	</head>
	<body>
		<?php
			if (isset($_POST['submit'])) {
				$user = $_POST['user'];
				$pass = $_POST['pass'];

				if ($user == "admin" && $pass == 123456) {
					//đăng nhạp đúng

					//tạo mãng chứa thông tin nhận đc
					$arrUserInfo = array(
						'username' => $user,
						'password' => $pass
						);
					//đưa mãng vào session
					$_SESSION['user_info'] = $arrUserInfo;

					//chuyển hướng sang admin.php
					header("location: admin.php");

				}else{
					//đăng nhập sai
					echo "<p style='color:red;'>Sai tên đăng nhập hoặc mật khẩu</p>";
				}
			}

		?>
		<form action="" method="post">
			Username : <input type="text" name="user" value="" /><br />
			Password : <input type="password" name="pass" value="" /><br />
			<input type="submit" name="submit" value="Đăng Nhập" />
		</form>
	</body>
</html>