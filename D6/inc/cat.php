<?php 
	$id_danhmuctin = $_GET['cid'];

	$queryTTByID = "SELECT * FROM tintuc WHERE ID_DanhMucTin = {$id_danhmuctin} ORDER BY ID_TinTuc DESC";

	$result = $mysqli->query($queryTTByID);

	$sql = "SELECT * FROM danhmuctin WHERE ID_DanhMucTin = {$id_danhmuctin}";
	$resul1 = $mysqli->query($sql);
	$arTenDanhMuc = mysqli_fetch_assoc($resul1);
	$tenDanhMucTin = $arTenDanhMuc['TenDanhMucTin'];
?>

<h3><?php echo $tenDanhMucTin; ?></h3>
<div class="main-content items-new">
	<ul>
	<?php
		while ($arTTByID = mysqli_fetch_assoc($result)) {
			$tenTinTuc = $arTTByID['TenTinTuc'];
			$mota = $arTTByID['MoTa'];
			$idTinTuc = $arTTByID['ID_TinTuc'];
	?>
		<li>
			<h2>
				<a href="detail.php?id=<?php echo $idTinTuc; ?>" title=""><?php echo $tenTinTuc;?></a>
			</h2>
			<div class="item">
				<p><?php echo $mota; ?></p>
				<div class="clr"></div>
			</div>
		</li>
		<?php
			}
		?>
	</ul>
</div>