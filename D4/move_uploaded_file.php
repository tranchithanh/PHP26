<html>
	<head>
		<title>Upload File</title>
		<meta charset="utf-8" />
	</head>
	<body>		
		<h1>Upload File</h1>
		<?php 
			if (isset($_POST['uphinh'])) {
				echo "<pre>";
				print_r($_POST);
				echo "</pre>";

				echo "<pre>";
				print_r($_FILES);
				echo "</pre>";

				$tenHinh = $_FILES['hinhanh']['name'];
				echo $tenHinh;

				//kiểm tra có up hình ko
				if ($tenHinh != "") {
					//co up ảnh
					//đổi tên hình
					echo $tenHinh;
					//hinh2.jpg => vinaenter-2342352.jpg
					$extention = end(explode('.', $tenHinh));//phần mở rộng file
					$tenHinhMoi = "vinaenter-".time().'.'.$extention;
					//up ảnh lên server
					$tmp_name = $_FILES['hinhanh']['tmp_name'];
					$path_upload = $_SERVER['DOCUMENT_ROOT']."/PHP26/file_upload/".$tenHinhMoi;
					
					move_uploaded_file($tmp_name, $path_upload);
					echo "<br />up ảnh thành công";
				}
			}
		?>
		<form action="" method="post" enctype="multipart/form-data">
			Họ tên <input type="text" name="name" value="" /><br /><br />
			File: <input type="file" name="hinhanh" value="" /><br /><br />
			<input type="submit" name="uphinh" value="Upload hình" />
		</form>
	</body>
</html>
