<!DOCTYPE html>
<html>
	<head>
		<title>ARRAY IN ARRAY</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h2>ARRAY IN ARRAY</h2>
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

			echo 'Tên học viên thứ 3 : '.$arrStudent['hv1']['hoten'].'<br />';
			echo 'Điểm của học viên thứ 2 : HTML='.$arrStudent['hv2']['HTML'].', CSS='.$arrStudent['hv2']['CSS'].', PHP='.$arrStudent['hv2']['PHP'].'<br />';
			echo 'Điểm trung bình học viên 2 : '.($arrStudent['hv2']['HTML']+$arrStudent['hv2']['CSS']+$arrStudent['hv2']['PHP'])/3;
		?>
	</body>
</html>