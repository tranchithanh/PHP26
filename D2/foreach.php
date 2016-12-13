<!DOCTYPE html>
<html>
	<head>
		<title>FOREACH</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h2>FOREACH</h2>
		<?php
			$arrStudent = array(
				'hv1' => array(
					'hoten' => 'Nguyễn Văn A',
					'HTML' => 90,
					'CSS' => 100,
					'PHP' => 95
					),
				'hv2' => array(
					'hoten' => 'Nguyễn Văn B',
					'HTML' => 100,
					'CSS' => 90,
					'PHP' => 80
					),
				'hv3' => array(
					'hoten' => 'Nguyễn Văn C',
					'HTML' => 85,
					'CSS' => 90,
					'PHP' => 80
					),
				);

			echo "<pre>";
				print_r($arrStudent);
			echo "</pre>";

			//in ra tên và điểm , điểm trung bình của học viên

			foreach ($arrStudent as $key => $arHocVien) {
				echo $key.'<br />';
				echo 'Tên học viên : '.$arHocVien['hoten'].'<br />';
				echo 'Điểm HTML : '.$arHocVien['HTML'].'<br />';
				echo 'Điểm CSS : '.$arHocVien['CSS'].'<br />';
				echo 'Điểm PHP : '.$arHocVien['PHP'].'<br />';
				$diemtb = ($arHocVien['HTML']+$arHocVien['CSS']+$arHocVien['PHP'])/3;
				if ($diemtb >= 90) {
					echo 'Điểm trung bình >= 90 : <strong>'.$diemtb.'</strong><br /><br />';
				}else{
					echo 'Điểm trung bình < 90 : <strong>'.$diemtb.'</strong><br /><br />';
				}
				
			}
		?>
	</body>
</html>