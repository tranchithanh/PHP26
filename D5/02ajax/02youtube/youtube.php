<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Phim youtube</title>
	<meta name="description" content="Thiet ke website, dao tap lap trinh">
	<meta name="keywords" content="hiet ke website, dao tap lap trinh">
	<link href="style.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
</head>
<body>
	<div class="wrapper">
		<!-- begin header -->
		<div id="header">
			<div class="header-left fl">
				<a href="index.html" title=""><img src="images/logo_edu.png" alt="" /></a>
			</div>
			<div class="header-right fr">
				<a href="index.html" title=""><img src="images/banner.jpg" alt="" /></a>
			</div>
			<div class="clr"></div>
		</div>
		<!-- end header -->
		
		<!-- begin menu -->
		<div id="menu">
			<ul>
				<li><a href="index.html" title="">Trang chủ</a></li>
				<li><a href="tintuc.html" title="">Tin tức</a></li>
				<li class="active"><a href="youtube.php" title="">Phim</a></li>
				<li><a href="lienhe.html" title="">Liên hệ</a></li>
			</ul>
			<div class="clr"></div>
		</div>
		<!-- end menu -->
		
		<!-- end content -->
		<?php
			$arrYouTube = array(
					"xkZcs1nf67I",
					"QSVS9Ygbkys",
					"FJ2jzaSQG_o",
					"EnxqiaIK-b4",
					"EQhZPepsEz8"
				);
		?>
		<div id="content">
			<div class="content-left fl">
				<h3>Châu Tinh Trì</h3>
				<ul>
					<?php 
						foreach ($arrYouTube as $tap => $ma) {
					?>
					<li>
						<a href="javascript:void(0);" title="" onclick="return getPhim('<?php echo $ma; ?>');">Châu Tinh Trì (T<?php echo $tap+1; ?>)</a>
					</li>
					<?php } ?>
				</ul>
			</div>
			<div class="content-right fr">
				<h3>Châu Tinh Trì</h3>
				<div class="main-content">
					<div id="video-youtube">
						
					</div>
				</div>
			</div>
			<div class="clr"></div>
		</div>
		<!-- end content -->
		
		<div id="footer">
			<p>Trung tâm đào tạo Lập trình viên VinaTAB EDU</p>
			<p>Copyright &copy 2014 - Designed by <a href="" title="">VinaTAB</a></p>
		</div>
	</div>
	<script type="text/javascript">
		function getPhim(ma){
			$.ajax({
					url: 'ajax/xuLyYouTube.php',//muốn truyền dữ liệu sang trang ajax.php
					type: 'POST',//POST : để lấy dữ liệu, GET: k bảo mật như POST
					cache: false,//lưu dữ liệu ng dùng
					data: {aMa:ma},//những giá trị muốn truyền đi
					success: function(data){
						//alert(data);
						$("#video-youtube").html(data);
					},
					error: function (){
						alert("Có Lỗi Xãy Ra !!!");
					}
			});
			return false;
		}
	</script>
</body>
</html>
