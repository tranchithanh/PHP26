<!DOCTYPE html>
<html>
	<head>
		<title>Demo</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			$mangHocVien = array(
				'hv1' =>'Trần Chí Thành', 
				'hv2' =>'Trương Thanh Nhật',
				'hv3' =>'Huỳnh Ngọc Rin'
				);
			$mangLop = array('12T2','CBC','13TXD2');

			echo "<h2>Mãng 1 chiều</h2>";
			echo "<pre>";
			print_r($mangHocVien);
			echo "</pre>";

			foreach ($mangHocVien as $key => $name) {
				echo $key.'   '.$name.'<br />';
			}

			echo "<pre>";
			print_r($mangLop);
			echo "</pre>";

			foreach ($mangLop as $lop) {
				echo $lop.'<br />';
			}

			echo "<br />";

			$i = 0;
			echo "<table>";
			for ($i=0; $i < count($mangHocVien); $i++) {
				echo "<tr>";
					echo '<td>'.$mangHocVien['hv'.($i+1)].'</td>';
					echo '<td>'.$mangLop[$i].'</td>';
				echo "</tr>";
			}
			echo "</table>";

			echo "<h2>Mãng 2 chiều</h2>";

			$arStudent = array(
				'st1' => array(
					'name' => 'Trần Chí Thành',
					'class' => '12T2',
					'point' => 0
					),
				'st2' => array(
					'name' => 'Trương Thanh Nhật',
					'class' => 'CBC',
					'point' => 0
					),
				'st3' => array(
					'name' => 'Huỳnh Ngọc Rin',
					'class' => '13TXD2',
					'point' => 0
					)
				);
			$arStudent2 = array(
				array('Trần Chí Thành','12T2',9.0,10.0,9.2),
				array('Trương Thanh Nhật','CBC',8.0,8.5,8.3),
				array('Huỳnh Ngọc Rin','13TXD2',9.0,8.5,9.2)
				);

			echo "<pre>";
			print_r($arStudent);
			echo "</pre>";

			echo "<pre>";
			print_r($arStudent2);
			echo "</pre>";

			$n=0;$m=0;
			for ($n=0; $n < count($arStudent2); $n++) { 
				for ($m=2; $m <= 4; $m++) { //cộng tổng 3 môn của 1 user
					$arStudent['st'.($n+1)]['point'] += $arStudent2[$n][$m];
				}
				$arStudent['st'.($n+1)]['point'] /= 3;//tính điểm trung bình 3 môn của 1 user
			}

			echo "<pre>";
			print_r($arStudent);
			echo "</pre>";
		?>
	</body>
</html>