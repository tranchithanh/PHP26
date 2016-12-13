<?php
	$tenHoa = $_POST['aTenHoa'];
	$soLuong = $_POST['aSoLuong'];
	$giaBan = $_POST['aGiaBan'];

	$tongTien = $soLuong * $giaBan;
?>
<p> Tên Hoa : <?php echo $tenHoa; ?></p>
<p> Giá Bán : <?php echo $giaBan; ?></p>
<p> Số Lượng : <?php echo $soLuong; ?></p>
<p> Tổng Tiền : <?php echo $tongTien; ?></p>