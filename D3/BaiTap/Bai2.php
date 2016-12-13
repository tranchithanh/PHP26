<!DOCTYPE html>
<html>
	<head>
		<title>Bài 2</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<div class="wrapper">
			<h2 class="title">Tính tiền</h2>
			<?php 
				$giaban = "";
				$soluong = "";
				$tongtien = "...";
				$i = false;

				if (isset($_POST['tinh'])) {
					$giaban = $_POST['giaban'];
					$soluong = $_POST['soluong'];
					if ($giaban!=""&&$soluong!="") {
						$tongtien = number_format($giaban * $soluong,0,',','.');
					} else{
						$i = true;
					}
				}
			?>
			<div class="cont">
				<form action="" method="post">
					<p class="name-flow">Tên hoa: Hoa hồng</p>
					<?php if ($i) {
						echo "<span style='color:red;'>Nhập số vào cả 2 ô</span><br />";
					} ?>
					Nhập giá bán: <input type="text" name="giaban" value="<?php echo $giaban; ?>" /><br />
					Số lượng: <input type="text" name="soluong" value="<?php echo $soluong; ?>" /><br />
					Tổng tiền: <strong><?php echo $tongtien.' VNĐ'; ?></strong><br />
					<input type="submit" name="tinh" value="Tính" />
				</form>
			</div>
		</div>
	</body>
</html>