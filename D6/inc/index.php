<?php
	$sql = "SELECT * FROM tintuc";

	$result = $mysqli->query($sql);
?>

<h3>Tin tức</h3>
<div class="main-content items-new">
	<ul>
		<?php 
		while ($arTinTuc = mysqli_fetch_assoc($result)) {
			$tentintuc = $arTinTuc['TenTinTuc'];
			$mota = $arTinTuc['MoTa'];
		?>
		<li>
			<h2>
				<a href="detail.php" title=""><?php echo $tentintuc; ?></a>
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