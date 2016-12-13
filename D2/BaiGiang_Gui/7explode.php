<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
	</head>
	<body>
	
	<h1>Hàm explode: tách chuỗi thàng mảng</h1>
	<?php
	$chuoi = "|Hoa hồng|Hoa huệ|Hoa lan";
	//tách chuỗi thành mảng
	$arChuoi = explode("|", $chuoi);
	//xem cấu trúc mảng arChuoi
	echo "<pre>";
	print_r($arChuoi);
	echo "</pre>";
	
	//in ra tên hoa thứ 2
	echo $arChuoi[1];
	?>
	</body>
</html>
