<ul>
	<?php
		for ($i=1; $i < 8; $i++) { 
			echo "<li><a href='#'>Trang {$i}</a></li>";
		}
	?>
</ul>

<ul>
	<?php
		for ($i=1; $i < 8; $i++) {
	?>
	<li>
		<a href="#">Trang <?php echo $i; ?></a>
	</li>
	<?php
		}
	?>
</ul>

<style type="text/css">
	ul{
		list-style: none;
		width: 500px;
		margin: 20px auto;
	}
	ul li{
		float: left;
		margin-right: 20px;
	}
</style>