<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
	</head>
	<body>
	
	<h1>Bài tập áp dụng foreach</h1>
	<?php 
	//Tạo mảng chứa 3 học viên: $arStudent. 
    //- Mỗi học viên gồm các thông tin: Họ tên, điểm môn HTML, CSS, PHP

	$arStudent = array(
		"hv1" => array(
			"hoten" => "Nguyễn Văn A",
			"diemHTML" => 70,
			"diemCSS" => 90,
			"diemPHP" => 80,
		),
		"hv2" => array(
			"hoten" => "Nguyễn Văn B",
			"diemHTML" => 95,
			"diemCSS" => 100,
			"diemPHP" => 90,
		),
		"hv3" => array(
			"hoten" => "Nguyễn Văn C",
			"diemHTML" => 90,
			"diemCSS" => 100,
			"diemPHP" => 95,
		),
	);
	
	//In ra tên, điểm từng môn và điểm trung bình của mỗi học viên
	foreach ($arStudent as $key => $arItem){
		//lấy họ tên
		$hoten = $arItem['hoten'];
		//lấy điểm từng môn
		$diemHTML = $arItem['diemHTML'];
		$diemCSS = $arItem['diemCSS'];
		$diemPHP = $arItem['diemPHP'];
		//tính điểm trung bình
		$diemTrungBinh = ($diemHTML + $diemCSS + $diemPHP) / 3;
		//in thông tin
		echo "<br />Họ tên học viên: {$hoten}";
		echo "<br />Điểm các môn:";
		echo "<br />HTML: {$diemHTML}<br />CSS: {$diemCSS}<br />PHP: {$diemPHP}";
		echo "<br />Điểm trung bình: {$diemTrungBinh}";
	}
	
	
	//In ra tên học viên, điểm từng môn và điểm trung bình của các học viên có điểm trung bình >= 9
	echo "<h2>Các học viên có điểm trung bình >= 9:</h2>";
	
	foreach ($arStudent as $key => $arItem){
		//lấy họ tên
		$hoten = $arItem['hoten'];
		//lấy điểm từng môn
		$diemHTML = $arItem['diemHTML'];
		$diemCSS = $arItem['diemCSS'];
		$diemPHP = $arItem['diemPHP'];
		//tính điểm trung bình
		$diemTrungBinh = ($diemHTML + $diemCSS + $diemPHP) / 3;
		
		//kiểm tra nếu $diemTrungBinh >= 9 thì in ra thông tin
		if ($diemTrungBinh >= 9){				
			echo "<br />Họ tên học viên: {$hoten}";
			echo "<br />Điểm các môn:";
			echo "<br />HTML: {$diemHTML}<br />CSS: {$diemCSS}<br />PHP: {$diemPHP}";
			echo "<br />Điểm trung bình: {$diemTrungBinh}";\
		}
	}
	
	?>
	</body>
</html>
