<!DOCTYPE html>
<html>
	<head>
		<title>Bài 3</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/bai3.css" />
	</head>
	<body>
		<div class="wrapper">
			<h2 class="title">Thay thế chuỗi</h2>
			<?php 
				$goc = "";
				$tugoc = "";
				$thaythe = "";
				$dathaythe = "";

				if (isset($_POST['dathaythe'])) {
					$goc = $_POST['goc'];
					$tugoc = $_POST['tugoc'];
					$thaythe = $_POST['thaythe'];

					$dathaythe = str_replace($tugoc, $thaythe, $goc);
					
					//nếu ko tìm thấy
					if ($dathaythe == $goc) {
						if ($tugoc == "") {
							$dathaythe = "Nhập vào từ để tìm kiếm";
						} else {
						$dathaythe = "Không tìm thấy từ: '$tugoc'";
						}
					}
				}
			?>
			<div class="cont">
				<form action="" method="post">
					<p>Đoạn văn gốc</p>
					<textarea name="goc" cols="80"><?php echo $goc; ?></textarea><br />
					<p>
						Từ gốc <input type="text" name="tugoc" value="<?php echo $tugoc; ?>" />
						thay thế bằng <input type="text" name="thaythe" value="<?php echo $thaythe; ?>" />
					</p>
					<textarea name="dathaythe" cols="80"><?php echo $dathaythe; ?></textarea>
					<div class="thuchien">
						<input type="submit" name="thuchien" value="Thực hiện" />
					</div>
				</form>
			</div>
		</div>
	</body>
</html>