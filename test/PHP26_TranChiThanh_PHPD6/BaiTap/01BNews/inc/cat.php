<?php
	if (!isset($_GET['ID_DanhMucTin'])) {
		header("location: index.php");
		exit();
	}

	$ID_DanhMucTin = $_GET['ID_DanhMucTin'];

	$query = "SELECT * FROM tintuc WHERE ID_DanhMucTin = {$ID_DanhMucTin} ORDER BY ID_TinTuc DESC";

	$result = $mysqli->query($query);
?>
<?php
	$queryTenDanhMucTin = "SELECT TenDanhMucTin FROM danhmuctin WHERE ID_DanhMucTin = {$ID_DanhMucTin}";

	$resultTDMT = $mysqli->query($queryTenDanhMucTin);

	$arTDMT = mysqli_fetch_assoc($resultTDMT);

	$TenDanhMucTin = $arTDMT['TenDanhMucTin'];
?>
<h1 class="title">Tin tức >> <?php echo $TenDanhMucTin; ?></h1>
<div class="items-new">
	<ul>
		<?php
			while ($arTinTuc = mysqli_fetch_assoc($result)) {
				$ID_TinTuc = $arTinTuc['ID_TinTuc'];
				$TenTinTuc = $arTinTuc['TenTinTuc'];
				$MoTa = $arTinTuc['MoTa'];
				$HinhAnh = $arTinTuc['HinhAnh'];
		?>
		<li>
			<h2>
				<a href="detail.php?ID_TinTuc=<?php echo $ID_TinTuc;?>" title=""><?php echo $TenTinTuc;?></a>
			</h2>
			<div class="item">
				<a href="detail.php?ID_TinTuc=<?php echo $ID_TinTuc;?>" title=""><img src="images/tmp/<?php echo $HinhAnh;?>" alt="<?php echo $HinhAnh;?>" /></a>
				<p><?php echo $MoTa;?></p>
				<div class="clr"></div>
			</div>
		</li>
		<?php }?>
	</ul>
	
	<div class="paginator">
		<a href="#">Trang 1</a> | 
		<a href="#" class="active">Trang 2</a> |
		<a href="#">Trang 3</a> |
		<a href="#">Trang 4</a>
	</div>
</div>
