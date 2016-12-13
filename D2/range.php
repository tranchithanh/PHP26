<!DOCTYPE html>
<html>
	<head>
		<title>RANGE</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h2>RANGE</h2>
		<?php
			//tạo ra các tháng
			$arrThang = range(1, 12);

			echo "<pre>";
				print_r($arrThang);
			echo "</pre>";
		?>

		<select name="">
			<option>--Chọn--</option>
			<?php foreach ($arrThang as $thang) {?>
				<option value=""><?php echo $thang?></option>
			<?php }?>
		</select>
	</body>
</html>