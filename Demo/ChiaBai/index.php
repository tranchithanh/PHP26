<!DOCTYPE html>
<html>
	<head>
		<title>Demo Chia</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<?php
			$random = range(1, 13);
			$co="Cơ";$ro="Rô";$chuon="Chuồn";$bich="Bích";$duoi=".png";
			$arBoBai = array();

			foreach ($random as $key => $v) {
				$arBoBai[$v.'co']['Nuoc'] = $co;
				$arBoBai[$v.'co']['Diem'] = $v;
				$arBoBai[$v.'co']['TenHinhAnh'] = $v.'co'.$duoi;

				$arBoBai[$v.'ro']['Nuoc'] = $ro;
				$arBoBai[$v.'ro']['Diem'] = $v;
				$arBoBai[$v.'ro']['TenHinhAnh'] = $v.'ro'.$duoi;

				$arBoBai[$v.'chuon']['Nuoc'] = $chuon;
				$arBoBai[$v.'chuon']['Diem'] = $v;
				$arBoBai[$v.'chuon']['TenHinhAnh'] = $v.'chuon'.$duoi;

				$arBoBai[$v.'bich']['Nuoc'] = $bich;
				$arBoBai[$v.'bich']['Diem'] = $v;
				$arBoBai[$v.'bich']['TenHinhAnh'] = $v.'bich'.$duoi;
			}

			// echo "<pre>";print_r($arBoBai);echo "</pre>";

			$soNguoiChoi = 3;
			$loaiBai = 13;
			$randomChia = array_rand($arBoBai,$loaiBai);

			// echo "<pre>";print_r($randomChia);echo "</pre>";
		?>
		<div class="wrapper">
		<div class="reset">
			<a href="index.php" title="Chia Lại">Chia Lại</a>
		</div>
		<?php
			$i = 1;
			for ($i=1; $i<=$soNguoiChoi; $i++) {
				echo '<div class="people">';
					echo "<h4>User {$i}</h4>";
				foreach ($randomChia as $k => $v) {
					echo '<a href="#" title=""><img src="card/'.$arBoBai[$v]['TenHinhAnh'].'" alt="" /></a>';
					unset($arBoBai[$v]);
					unset($randomChia[$k]);
				}
				echo '</div>';
				$randomChia = array_rand($arBoBai,$loaiBai);
			}
		?>
			<div class="clr"></div>		
		</div>	
	</body>
</html>