<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>VinaTAB EDU - Mon PHP</title>			
	</head>
	<body>
		<h1>Các hàm thường dùng trong chuỗi</h1>			
		<?php
		$string1 = "Cố gắng học";
		$string2 = "Sẽ thành tài";		
		?>		
		<p>
			<strong>String length: </strong>
			<?php
			echo strlen($string1);
			?>
		</p>
		
		<p>
			<strong>String replace</strong>
			<?php
			echo str_replace("sẽ", "ắt", $string2);
			?>
		</p>
	</body>
</html>