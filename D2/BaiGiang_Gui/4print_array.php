<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
	</head>
	<body>
	
	<h1>Xem cấu trúc mảng</h1>
	<?php 
	$mangHocVien = array(
		"hv1" => "Nguyễn Văn An",
		"hv2" => "Trần Việt Anh",
		"hv3" => "Nguyễn Thị Hồng Hải"
	);
	
	//lệnh xem cấu trúc mảng
	echo "<pre>";
	print_r($mangHocVien);
	echo "</pre>";
	?>
	</body>
</html>
