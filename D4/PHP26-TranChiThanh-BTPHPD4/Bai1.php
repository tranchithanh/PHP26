<!DOCTYPE html>
<html>
	<head>
		<title>Bài 1</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php 
			$arMonHoc = array(
				11 => array(
					'Ten_MonHoc' => 'HTML',
					'DoKho' => 80,
					),
				12 => array(
					'Ten_MonHoc' => 'CSS',
					'DoKho' => 85,
					),
				13 => array(
					'Ten_MonHoc' => 'PHP',
					'DoKho' => 90,
					),
				14 => array(
					'Ten_MonHoc' => 'MYSQL',
					'DoKho' => 90,
					),
				15 => array(
					'Ten_MonHoc' => 'CI_FRAMEWORK',
					'DoKho' => 95,
					),
				);
			echo "<h2>Câu a</h2>";
			echo "<pre>";
			print_r($arMonHoc);
			echo "</pre>";

			echo "<h2>Câu b</h2>";
			foreach ($arMonHoc as $key => $ID_MonHoc) {
				echo "ID_MonHoc là : ".$key.", Môn ".$ID_MonHoc['Ten_MonHoc'].' Có Độ Khó là : '.$ID_MonHoc['DoKho'].'<br />';
				echo "==============================================<br />";
			}

			echo "<h2>Câu c</h2>";
			echo "Những môn có độ khó >= 90 là : ";
			foreach ($arMonHoc as $key => $ID_MonHoc) {
				if ($ID_MonHoc['DoKho'] >= 90) {
					echo $ID_MonHoc['Ten_MonHoc'].', ';
				}
			}

			echo "<h2>Câu d</h2>";
			$tong = 0;
			foreach ($arMonHoc as $key => $ID_MonHoc) {
				if ($key % 2 != 0) {
					echo "Môn ".$ID_MonHoc['Ten_MonHoc'].' có ID_MonHoc là : '.$key.'<br />';
					$tong += $ID_MonHoc['DoKho'];
				}
			}
			echo "Tổng độ khó của những môn có id lẻ là {$tong}";
		?>
	</body>
</html>