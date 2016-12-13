<?php
	$query = "SELECT * FROM danhmuctin";

	$result = $mysqli->query($query);

?>
<h3>Danh mục tin</h3>
<ul>
	<?php 
		while ($arDanhMucTin = mysqli_fetch_assoc($result)) {
			$idDanhMucTin = $arDanhMucTin['ID_DanhMucTin'];
			$tenDanhMucTin = $arDanhMucTin['TenDanhMucTin'];
	?>

			<li><a href="cat.php?cid=<?php echo $idDanhMucTin; ?>" title=""><?php echo $tenDanhMucTin; ?></a></li>

	<?php
		}
	?>
</ul>