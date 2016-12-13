<!DOCTYPE html>
<html>
	<head>
		<title>Bài 2</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h2>Bài 2</h2>
		<?php
			//tạo mãng arHoa
			$arHoa = array(
				'h1' => array(
					'id_hoa' => 1,
					'ten' => 'Hoa hồng',
					'giaban' => 250000,
					'soluongmua' => 10
					),
				'h2' => array(
					'id_hoa' => 2,
					'ten' => 'Hoa huệ',
					'giaban' => 150000,
					'soluongmua' => 8
					),
				'h3' => array(
					'id_hoa' => 3,
					'ten' => 'Hoa hướng dương',
					'giaban' => 50000,
					'soluongmua' => 40
					),
				'h4' => array(
					'id_hoa' => 4,
					'ten' => 'Hoa ly',
					'giaban' => 300000,
					'soluongmua' => 9
					),
				);

			//Câu a
			echo "<h3>a. In ra cấu trúc mãng arHoa</h3>";
			echo "<pre>";
				print_r($arHoa);
			echo "</pre>";

			//Câu b
			echo "<h3>b. In ra thông tin các phần tử của mãng arHoa, gồm: id_hoa, ten, giaban, soluongmua, thanhtien (thanhtien = giaban*soluongmua)</h3>";
		?>
			<table width="600px" style="border:1px solid gray;">
				<tr style="text-align:left">
					<th>id_hoa</th>
					<th>Tên</th>
					<th>Giá Bán</th>
					<th>Số Lượng Mua</th>
					<th>Thành Tiền</th>
				</tr>
				<?php
					foreach ($arHoa as $key => $hoa) {
						echo "<tr>";
							echo '<td>'.$hoa['id_hoa'].'</td>';
							echo '<td>'.$hoa['ten'].'</td>';
							echo '<td>'.number_format($hoa['giaban'],0,',','.').'</td>';
							echo '<td>'.$hoa['soluongmua'].'</td>';
							echo '<td>'.number_format($hoa['giaban']*$hoa['soluongmua'],0,',','.').'</td>';
						echo "</tr>";
					}
				?>
			</table>
		<?php
			//Câu c
			echo "<h3>c. In ra thông tin các phần tử của mãng arHoa, gồm: id_hoa, ten, giaban, soluongmua, thanhtien (thanhtien = giaban*soluongmua)</h3>";
			echo "<h4>Nếu soluongmua >= 10 thanhtien giảm 10%, Nếu soluongmua >= 30 thanhtien giảm 20%</h4>";
		?>
			<table width="600px" style="border:1px solid gray;">
				<tr style="text-align:left">
					<th>id_hoa</th>
					<th>Tên</th>
					<th>Giá Bán</th>
					<th>Số Lượng Mua</th>
					<th>Thành Tiền</th>
				</tr>
				<?php
					foreach ($arHoa as $key => $hoa) {
						echo "<tr>";
							echo '<td>'.$hoa['id_hoa'].'</td>';
							echo '<td>'.$hoa['ten'].'</td>';
							echo '<td>'.number_format($hoa['giaban'],0,',','.').'</td>';
							echo '<td>'.$hoa['soluongmua'].'</td>';
							if ($hoa['soluongmua'] >= 30) {
								echo '<td>'.number_format($hoa['giaban']*$hoa['soluongmua']*0.8,0,',','.').' (giảm 20%)</td>';
							}elseif ($hoa['soluongmua'] >= 10) {
								echo '<td>'.number_format($hoa['giaban']*$hoa['soluongmua']*0.9,0,',','.').' (giảm 10%)</td>';
							}else{
								echo '<td>'.number_format($hoa['giaban']*$hoa['soluongmua'],0,',','.').'</td>';
							}
						echo "</tr>";
					}
				?>
			</table>
		<?php
			//Câu d
			echo "<h3>d. In ra giá bán và số lượng mua của Hoa hướng dương</h3>";
			foreach ($arHoa as $key => $hoa) {
				if ($hoa['ten'] == 'Hoa hướng dương') {
					echo $hoa['ten'].' có giá bán là : '.$hoa['giaban'].', và số lượng mua là : '.$hoa['soluongmua'].'<br />';
				}
			}

			//Câu e
			echo "<h3>e. Có bao nhiêu hoa có giá bán > 100000</h3>";
			$temp = 0;
			$strHoa = "";
			foreach ($arHoa as $key => $hoa) {
				if ($hoa['giaban'] > 100000) {
					$temp++;
					$strHoa = $strHoa.$hoa['ten'].",";
				}
			}
			echo "Có {$temp} loại hoa({$strHoa}) có giá bán > 100000<br />";
		?>
	</body>
</html>