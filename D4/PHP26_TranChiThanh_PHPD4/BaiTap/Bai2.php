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
			<h2 class="title">Upload ảnh</h2>
			<?php 
				//kiểm tra người dùng nhấn up hình ?
				if (isset($_POST['submit'])) {
					//lấy tên file
					$nameFile = $_FILES['chonanh']['name'];
					//kiểm tra đã chọn file ?
					if ($nameFile == "") {
						echo "<div class='cont' style='color:red;'>Vui lòng chọn hình ảnh !</div>";
					}else{//đã chọn file
						//đổi tên file theo định dạng như ý
						$nameDefault = "portal_";
						$nameFileNew = $nameDefault.time().'.'.end(explode('.', $nameFile));
						//lấy đường dẫn tạm của file
						$tmp_name = $_FILES['chonanh']['tmp_name'];
						//lấy path gốc
						$path_root = $_SERVER['DOCUMENT_ROOT'];
						//tạo path của file up lên host
						$path_upfile = $path_root.'/PHP26/D4/PHP26_TranChiThanh_PHPD4/BaiTap/hinhanh/'.$nameFileNew;
						//kiểm tra up file lên host ?
						if (move_uploaded_file($tmp_name, $path_upfile)) {
							echo "<div class='cont' style='color:green;'>Đã up file '{$nameFile}' thành công và đổi tên thành '{$nameFileNew}'.</div>";
						}else{
							echo "<div class='cont' style='color:red;'>Up file '{$nameFile}' thất bại !</div>";
						}
					}
				}
			?>
			<div class="cont">
				<form action="" method="post" enctype="multipart/form-data">
					Hình ảnh : <input type="file" name="chonanh" value="" /><br />
					<input type="submit" name="submit" value="Up hình" />
				</form>
			</div>
		</div>
	</body>
</html>