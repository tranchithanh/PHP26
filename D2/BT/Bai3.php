<!DOCTYPE html>
<html>
	<head>
		<title>Bài 3</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h2>Bài 3</h2>
		<?php
			//Dùng hàm range kết hợp HTML tạo ô lựa chọn ngày sinh
			//ngày : 1-31
			$arrNgay = range(1, 31);
			//tháng : 1-12
			$arrThang = range(1, 12);
			//năm : 2000-2020
			$arrNam = range(2000, 2020);
		?>
		<form>
			<div>
				<label>Ngày Sinh</label><br />
				<select name="chonngay">
					<option value="">--Chọn ngày--</option>
					<?php
						foreach ($arrNgay as $key => $ngay) {
							echo '<option value="'.$ngay.'">'.$ngay.'</option>';
						}
					?>
				</select>
				<label>/</label>
				<select name="chonthang">
					<option value="">--Chọn tháng--</option>
					<?php
						foreach ($arrThang as $key => $thang) {
							echo '<option value="'.$thang.'">'.$thang.'</option>';
						}
					?>
				</select>
				<label>/</label>
				<select name="chonnam">
					<option value="">--Chọn năm--</option>
					<?php
						foreach ($arrNam as $key => $nam) {
							echo '<option value="'.$nam.'">'.$nam.'</option>';
						}
					?>
				</select>
			</div>
		</form>
	</body>
</html>