<?php 
	$idtt = $_GET['id'];

	$queryTTByID = "SELECT * FROM tintuc WHERE ID_TinTuc = {$idtt} ORDER BY ID_TinTuc DESC";

	$result = $mysqli->query($queryTTByID);

	$arTinTuc = mysqli_fetch_assoc($result);

	$ChiTiet = $arTinTuc['ChiTiet'];
	$tenTT = $arTinTuc['TenTinTuc'];
?>

<h3><?php echo $tenTT; ?></h3>
<div class="main-content">

	<p><?php echo $ChiTiet; ?></p>
</div>