<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
	</head>
	<body>
	
	<h1>Hàm range</h1>
	<?php
	//tạo ô lựa chọn ngày tháng
	//tạo mảng ngày từ 1-31
	$arNgay = range(1,31);
	
	//tạo mảng tháng từ 1-12
	$arThang = range(1,12);
	?>
	Chọn ngày sinh của bạn:<br />
	Ngày 
	<select name="ngay">
		<option value="">--Chọn ngày--</option>
		<?php foreach ($arNgay as $ngay){?>
		<option value="<?php echo $ngay?>"><?php echo $ngay?></option>
		<?}?>
	</select> / 
	<select name="thang">
		<option value="">--Chọn tháng--</option>
		<?php foreach ($arThang as $thang){?>
		<option value="<?php echo $thang?>"><?php echo $thang?></option>
		<?}?>
	</select> 
	
	</body>
</html>
