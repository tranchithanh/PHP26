<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>VinaTAB EDU - Mon PHP</title>			
		<style>
		.pagination{list-style:none;}
		.pagination li{float: left; margin-right: 10px;}
		</style>
	</head>
	<body>
		<h1>Ví dụ Phân trang cách viết 2</h1>			
		<ul class="pagination">
		<?php for ($i = 1; $i <= 6; $i++) { 
			?>
			<li><a href="" title="">Trang <?php echo $i?></a></li>
		<?php }?>
		</ul>
	</body>
</html>