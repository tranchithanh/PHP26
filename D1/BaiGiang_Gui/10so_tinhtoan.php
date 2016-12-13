<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>VinaTAB EDU - Mon PHP</title>			
	</head>
	<body>
		<h1>Tính toán trong số</h1>			
		<?php
		$dongia = 2900000;
		$so_luong = 3;
		$uu_dai = 0.1;
		
		// tổng hphí 3 học viên
		$tongtien = $dongia * $so_luong;
		// học phí 3 học  viên được ưu đãi
		$tienuudai = $tongtien * $uu_dai;
		// tổng hphí 3 học viên phải đóng
		$thanhtien = $tongtien - $tienuudai;
		
		// in thông tin
		echo "<br />Tổng học phí 3 học viên {$tongtien}";
		echo "<br />Tổng học phí ưu đãi {$tienuudai}";
		echo "<br />Học phí 3 học viên cần đóng {$thanhtien}";
		?>
	</body>
</html>