<!DOCTYPE html>
<html>
	<head>
		<title>Bài 4</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<div class="wrapper">
			<h2 class="title">Tính diện tích, chu vi hình chữ nhật</h2>
			<?php 
				$chieudai = "";
				$chieurong = "";
				$dientich = 0;
				$chuvi = 0;

				if (isset($_POST['tinh'])) {
					$chieudai = $_POST['chieudai'];
					$chieurong = $_POST['chieurong'];

					if ($chieudai != "" && $chieurong != "") {
						$dientich = $chieudai * $chieurong;
						$chuvi = ($chieudai + $chieurong)*2;
					}
				}
			?>
			<div class="cont">
				<form action="" method="post">
					Chiều dài: <input type="text" name="chieudai" value="<?php echo $chieudai; ?>" /><br />
					Chiều rộng: <input type="text" name="chieurong" value="<?php echo $chieurong; ?>" /><br />
					Diện tích: <input type="text" name="dientich" value="<?php echo $dientich; ?>" /><br />
					Chu vi: <input type="text" name="chuvi" value="<?php echo $chuvi; ?>" /><br />
					<input type="submit" name="tinh" value="Tính" />
				</form>
			</div>
		</div>
	</body>
</html>