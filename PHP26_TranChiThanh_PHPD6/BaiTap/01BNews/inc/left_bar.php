<?php
	$query = "SELECT * FROM danhmuctin";

	$result = $mysqli->query($query);
?>
<h2>Danh mục tin</h2>
<ul>
	<?php
		while ($arDanhMucTin = mysqli_fetch_assoc($result)) {
			$ID_DanhMucTin = $arDanhMucTin['ID_DanhMucTin'];
			$TenDanhMucTin = $arDanhMucTin['TenDanhMucTin'];
	?>
	<li><a href="cat.php?ID_DanhMucTin=<?php echo $ID_DanhMucTin;?>"><?php echo $TenDanhMucTin; ?></a></li>
	<?php } ?>
</ul>