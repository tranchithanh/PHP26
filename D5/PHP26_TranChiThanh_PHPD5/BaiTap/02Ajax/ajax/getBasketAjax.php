<?php
	session_start();
	$id = $_POST['aID'];
	$tenhoa = $_POST['aTenHoa'];
	$soluong = $_POST['aSoLuong'];
	$gia = $_POST['aGia'];

	if (isset($_SESSION['arHoa'][$id])) {
		$_SESSION['arHoa'][$id]['soluong'] += $soluong;
	}else{
		$_SESSION['arHoa'][$id] = array(
				'tenhoa' => $tenhoa,
				'soluong' => $soluong,
				'gia' => $gia,
			);
	}
?>
<!-- view giỏ hàng -->
<table style="width:425px;line-height:30px;border:1px solid gray;">
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
				echo '<td><a style="padding-left:10px;" href="" title="">'.$id['tenhoa'].'</a></td>';
				echo '<td style="text-align:right;">'.number_format($id['gia'],0,',','.').'</td>';
				echo '<td style="text-align:right;">'.$id['soluong'].'</td>';
				echo '<td style="text-align:right;padding-right:10px;">'.number_format(($id['gia']*$id['soluong']),0,',','.').'</td>';
				$thanhtien += $id['gia']*$id['soluong'];
			echo "</tr>";
		}
	}
	?>
	<tr style="border-top:1px solid gray;">
		<td colspan="3" style="text-align:right;"><strong>Thành tiền:<strong></td>
		<td style="text-align:right;padding-right:10px;"><?php echo number_format($thanhtien,0,',','.'); ?></td>
	</tr>
</table>
<div class="del-basket">
	<a href="javascript:void(0);" title="" onclick="return delBasket();">Xóa giỏ hàng</a>
</div>