<!DOCTYPE html>
<html>
	<head>
		<title>Bài 3</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/bai3.css" />
	</head>
	<body>
		<h1>Bài Tập Array</h1><br />
		<?php 
			//tạo mãng arHocVien
			$arHocVien = array(
				1 => array(
					'Ten_HocVien' => 'Nguyễn Văn Thảo',
					'DiemTrungBinh' => 95,
					'CapChungNhan' => 1
					),
				2 => array(
					'Ten_HocVien' => 'Huỳnh Thị Thanh Thủy',
					'DiemTrungBinh' => 85,
					'CapChungNhan' => 0
					),
				3 => array(
					'Ten_HocVien' => 'Ngô Việt Anh',
					'DiemTrungBinh' => 98,
					'CapChungNhan' => 1
					),
				4 => array(
					'Ten_HocVien' => 'Thái Hoàng Bảo Thy',
					'DiemTrungBinh' => 100,
					'CapChungNhan' => 1
					),
				);

			// echo "<pre>";
			// print_r($arHocVien);
			// echo "</pre>";
		?>

		<h2>Câu a - view mãng arHocVien</h2><br />
		<table>
			<tr class="head">
				<th>ID_HocVien</th>
				<th>Ten_HocVien</th>
				<th>DiemTrungBinh</th>
				<th>CapChungNhan</th>
			</tr>
			<?php
				foreach ($arHocVien as $ID_HocVien => $v) {
					echo "<tr>";
						echo '<td>'.$ID_HocVien.'</td>';
						echo '<td class="name">'.$v['Ten_HocVien'].'</td>';
						echo '<td>'.$v['DiemTrungBinh'].'</td>';
						echo '<td>'.$v['CapChungNhan'].'</td>';
					echo "</tr>";
				}
			?>
		</table>
		<br />

		<h2>Câu b - view những học viên được cấp chứng nhận</h2><br />
		<table>
			<tr class="head">
				<th>ID_HocVien</th>
				<th>Ten_HocVien</th>
				<th>DiemTrungBinh</th>
				<th>CapChungNhan</th>
			</tr>
			<?php
				$ok = "Được cấp";
				foreach ($arHocVien as $ID_HocVien => $v) {
					if ($v['CapChungNhan'] == 1) {
						echo "<tr>";
						echo '<td>'.$ID_HocVien.'</td>';
						echo '<td class="name">'.$v['Ten_HocVien'].'</td>';
						echo '<td>'.$v['DiemTrungBinh'].'</td>';
						echo '<td>'.$ok.'</td>';
					echo "</tr>";
					}
				}
			?>
		</table>
		<br />

		<h2>Câu c - thêm 2 học viên vào mãng arHocVien rồi view mãng arHocVien</h2><br />
		<?php
			//thêm 2 học viên vào mãng arHocVien
			$arHocVien[5] = array(
				'Ten_HocVien' => 'Nguyễn Huy Hoàng',
				'DiemTrungBinh' => 80,
				'CapChungNhan' => 0
				);
			$arHocVien[6] = array(
				'Ten_HocVien' => 'Huỳnh Mạnh',
				'DiemTrungBinh' => 90,
				'CapChungNhan' => 1
				);
		?>
		<!-- view mãng arHocVien -->
		<table>
			<tr class="head">
				<th>ID_HocVien</th>
				<th>Ten_HocVien</th>
				<th>DiemTrungBinh</th>
				<th>CapChungNhan</th>
			</tr>
			<?php
				foreach ($arHocVien as $ID_HocVien => $v) {
					echo "<tr>";
						echo '<td>'.$ID_HocVien.'</td>';
						echo '<td class="name">'.$v['Ten_HocVien'].'</td>';
						echo '<td>'.$v['DiemTrungBinh'].'</td>';
						echo '<td>'.$v['CapChungNhan'].'</td>';
					echo "</tr>";
				}
			?>
		</table>
		<br />

		<h2>Câu d - những học viên sau sẽ bị xóa khỏi mãng arHocVien vì ko được cấp chứng nhận</h2><br />
		<!-- xóa học viên ko được cấp chứng nhận -->
		<table>
			<tr class="head">
				<th>ID_HocVien</th>
				<th>Ten_HocVien</th>
				<th>DiemTrungBinh</th>
				<th>CapChungNhan</th>
			</tr>
			<?php
				foreach ($arHocVien as $ID_HocVien => $v) {
					if ($v['CapChungNhan'] == 0) {
						echo "<tr>";
							echo '<td>'.$ID_HocVien.'</td>';
							echo '<td class="name">'.$v['Ten_HocVien'].'</td>';
							echo '<td>'.$v['DiemTrungBinh'].'</td>';
							echo '<td>'.$v['CapChungNhan'].'</td>';
						echo "</tr>";
						unset($arHocVien[$ID_HocVien]);//xóa học viên k được cấp chứng nhận
					}
				}
			?>
		</table>
		<br />

		<h2>Câu e - view những học viên còn lại của mãng arHocVien được cấp chứng nhận</h2><br />
		<table>
			<tr class="head">
				<th>ID_HocVien</th>
				<th>Ten_HocVien</th>
				<th>DiemTrungBinh</th>
				<th>CapChungNhan</th>
			</tr>
			<?php
				$tong = 0;
				foreach ($arHocVien as $ID_HocVien => $v) {
					echo "<tr>";
						echo '<td>'.$ID_HocVien.'</td>';
						echo '<td class="name">'.$v['Ten_HocVien'].'</td>';
						echo '<td>'.$v['DiemTrungBinh'].'</td>';
						echo '<td>'.$v['CapChungNhan'].'</td>';
					echo "</tr>";
					$tong += $v['DiemTrungBinh'];
				}
			?>
			<tr>
				<td colspan="2" class="dtb">Điểm trung bình</td>
				<td colspan="2" class="dtb"><?php echo number_format($tong/count($arHocVien),2,',','.'); ?></td>
			</tr>
		</table>
	</body>
</html>