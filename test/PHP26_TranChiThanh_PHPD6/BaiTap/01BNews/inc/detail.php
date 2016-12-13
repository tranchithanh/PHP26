<?php
	if (!isset($_GET['ID_TinTuc'])) {
		header("location: index.php");
		exit();
	}

	$ID_TinTuc = $_GET['ID_TinTuc'];

	$query = "SELECT ID_TinTuc,TenTinTuc,ChiTiet,ID_DanhMucTin FROM tintuc WHERE ID_TinTuc = {$ID_TinTuc}";

	$result = $mysqli->query($query);

	$arTinTuc = mysqli_fetch_assoc($result);

	$ID_TinTuc = $arTinTuc['ID_TinTuc'];
	$TenTinTuc = $arTinTuc['TenTinTuc'];
	$ChiTiet = $arTinTuc['ChiTiet'];
	$ID_DanhMucTin = $arTinTuc['ID_DanhMucTin'];
?>

<h1 class="title"><?php echo $TenTinTuc;?></h1>
<div class="items-new">
	<div class="new-detail">
		<p><?php echo $ChiTiet;?></p>
	</div>
</div>
<!-- rand sẽ lấy theo những tin mới nhất có cùng danh mục tin-->
<?php
	$queryRand = "SELECT * FROM tintuc WHERE ID_DanhMucTin = {$ID_DanhMucTin} ORDER BY ID_TinTuc DESC";

	$resultRand = $mysqli->query($queryRand);

	$tem = 2;//số tin trong tin liên quan
?>
<h2 class="title" style="margin-top:30px;color:#BBB">Tin tức liên quan</h2>
<div class="items-new">
	<ul>
		<?php
			while ($arRand = mysqli_fetch_assoc($resultRand)) {
				if ($tem != 0) {
					$ID_TinTucRand = $arRand['ID_TinTuc'];
					$TenTinTuc = $arRand['TenTinTuc'];
					$MoTa = $arRand['MoTa'];
					$HinhAnh = $arRand['HinhAnh'];
				}else{
					break;
				}
				if ($ID_TinTucRand!=$ID_TinTuc) {
		?>
		<li>
			<h2>
				<a href="detail.php?ID_TinTuc=<?php echo $ID_TinTucRand;?>" title="<?php echo $TenTinTuc;?>"><?php echo $TenTinTuc;?></a>
			</h2>
			<div class="item">
				<a href="detail.php?ID_TinTuc=<?php echo $ID_TinTucRand;?>" title="<?php echo $TenTinTuc;?>"><img src="images/tmp/<?php echo $HinhAnh;?>" alt="<?php echo $HinhAnh;?>"></a>
				<p><?php echo $MoTa;?></p>
				<div class="clr"></div>
			</div>
		</li>
		<?php $tem--;}} ?>
	</ul>
</div>