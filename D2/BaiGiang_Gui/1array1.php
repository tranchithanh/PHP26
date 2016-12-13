<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
	</head>
	<body>
	
	<h1>Mảng – array đầy đủ</h1>
	<?php 
	$mangHocVien = array(
		"hv1" => "Nguyễn Văn An",
		"hv2" => "Trần Việt Anh",
		"hv3" => "Nguyễn Thị Hồng Hải"
	);
	
	//in ra tên học viên thứ 2
	echo "Tên học viên thứ 2: " . $mangHocVien["hv2"];
	?>
	</body>
</html>
