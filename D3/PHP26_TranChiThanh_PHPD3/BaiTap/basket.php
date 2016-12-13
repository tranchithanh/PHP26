<?php session_start();ob_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Giỏ hàng</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<div class="wrapper">
			<h2 class="title">Giỏ hàng</h2>
			<table style="width:367px;line-height:30px;border:1px solid gray;">
				<tr style="background-color:gray;">
					<th>Tên Sản Phẩm</th>
					<th>Giá</th>
					<th>Số Lượng</th>
					<th>Tổng Tiền</th>
				</tr>
				<?php
				$thanhtien = 0;
				if (isset($_SESSION['arHoa'])) {
					foreach ($_SESSION['arHoa'] as $k => $id) {
						echo "<tr>";
							echo '<td><a href="" title="">'.$id['tenhoa'].'</a></td>';
							echo '<td style="text-align:right;">'.$id['gia'].'</td>';
							echo '<td style="text-align:right;">'.$id['soluong'].'</td>';
							echo '<td style="text-align:right;">'.number_format(($id['gia']*$id['soluong']),0,',','.').'</td>';
							$thanhtien += $id['gia']*$id['soluong'];
						echo "</tr>";
					}
				}
				?>
				<tr style="border-top:1px solid gray;">
					<td colspan="3" style="text-align:right;"><strong>Thành tiền:<strong></td>
					<td style="text-align:right;"><?php echo number_format($thanhtien,0,',','.'); ?></td>
				</tr>
			</table>
			<?php
				//tạo nút xóa cho dễ test :))
				if (isset($_POST['xoagh'])) {
					session_destroy();
					header("location: basket.php");exit();
				}
			?>
			<form action="" method="post"><input type="submit" name="xoagh" value="Xóa Giỏ Hàng"></form>
		</div>
	</body>
</html>
<?php ob_end_flush(); ?>