<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h3>Các hàm thường dùng trong chuỗi</h3>
		<?php
			$str1 = "Cố gắn học";
			$str2 = " sẽ thành tài";
			$sokytu = strlen($str2);
			echo "Số Ký tự của chuỗi 2 : {$sokytu}".'<br />';
			echo $str1.str_replace("sẽ", "ắt", $str2).'<br />';
			$str3 = str_replace("sẽ", "ắt", $str2);
			echo $str3;
		?>
	</body>
</html>