<html>
	<head>
		<title>Card game</title>
		<meta charset="utf-8" />
		<link href="reset.css" type="text/css" rel="stylesheet" />
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<?php
			//khai báo các biến
			$arNut = range(1, 13);
			$arBoBai = array();
			$co="co";$ro="ro";$chuon="chuon";$bich="bich";$duoi = ".png";

			//tạo mãng arBoBai gồm 52 lá bài
			foreach ($arNut as $v) {
				$arBoBai["{$v}{$co}"]['Nuoc']="Cơ";
				$arBoBai["{$v}{$co}"]['Diem']=$v;
				$arBoBai["{$v}{$co}"]['TenHinhAnh']="{$v}{$co}{$duoi}";

				$arBoBai["{$v}{$ro}"]['Nuoc']="Rô";
				$arBoBai["{$v}{$ro}"]['Diem']=$v;
				$arBoBai["{$v}{$ro}"]['TenHinhAnh']="{$v}{$ro}{$duoi}";

				$arBoBai["{$v}{$chuon}"]['Nuoc']="Chuồn";
				$arBoBai["{$v}{$chuon}"]['Diem']=$v;
				$arBoBai["{$v}{$chuon}"]['TenHinhAnh']="{$v}{$chuon}{$duoi}";

				$arBoBai["{$v}{$bich}"]['Nuoc']="Bích";
				$arBoBai["{$v}{$bich}"]['Diem']=$v;
				$arBoBai["{$v}{$bich}"]['TenHinhAnh']="{$v}{$bich}{$duoi}";
			}

			// view mãng
			// echo "<pre>";
			// 	print_r($arBoBai);
			// echo "</pre>";

			//lấy ngẫu nhiên 3 khóa(tên quân bài) trong arBoBai, đưa vào mãng arRandom
			$soBaiMuonLay = 3;
			$arRandom = array_rand($arBoBai,$soBaiMuonLay);
		?>
		<div class="wrapper">
			<table>
				<tr>
					<th>Tên quân bài</th>
					<th>Nước bài</th>
					<th>Điểm</th>
					<th>Hình ảnh</th>
				</tr>
			<?php
				foreach ($arRandom as $key => $tenQuanBai) {
					echo "<tr>";
						echo '<td>'.$tenQuanBai.'</td>';
						echo '<td>'.$arBoBai["{$tenQuanBai}"]['Nuoc'].'</td>';
						echo '<td>'.$arBoBai["{$tenQuanBai}"]['Diem'].'</td>';
						echo '<td><img src="card/'.$arBoBai["{$tenQuanBai}"]['TenHinhAnh'].'" alt="" /></td>';
					echo "</tr>";
				}
			?>
				<tr class="footer">
					<td colspan="2">Quẻ của bạn hôm nay có điểm là: </td>
					<td colspan="2">
						<?php
							//Tính tổng điểm tất cả số quân bài lấy ngẫu nhiên
							$tongDiem = 0;
							foreach ($arRandom as $tenQuanBai) {
								$tongDiem += $arBoBai["{$tenQuanBai}"]['Diem'];
							}
							echo $tongDiem;
						?>
					</td>
				</tr>
			</table>
			<div class="clr"></div>
			<a href="Bai5.php" title="">Rút thăm bài</a>
		</div>
	</body>
</html>