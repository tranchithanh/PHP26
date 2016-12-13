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
			<h2 class="title">Tính tổng</h2>
			<?php 
				$dayso = "";
				$tong = 0;

				if (isset($_POST['tinh'])) {
					$dayso = $_POST['dayso'];

					$arSo = explode(',', $dayso);

					foreach ($arSo as $k => $n) {
						$tong += $n;
					}
				}
			?>
			<div class="cont">
				<form action="" method="post">
					Dãy số: <input type="text" name="dayso" value="<?php echo $dayso; ?>" /><br />
					Tổng: <input type="text" name="tong" value="<?php echo $tong; ?>" /><br />
					<input type="submit" name="tinh" value="Tổng" />
				</form>
			</div>
		</div>
	</body>
</html>