<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
	</head>
	<body>
	
		<h1>$_GET</h1>
		<?php
		//khởi tạo giá trị các biến
		$ten = "";
		$tuoi = "";
		//kiểm tra khi người dùng nhấn nút submit
		if (isset($_GET["submit"])){
			$ten = $_GET["fname"];
			$tuoi = $_GET["age"];
			?>
			Chào, <?php echo $ten;?><br />
			Tuổi của bạn là: <?php echo $tuoi;?><br />
			<?php
		}
		?>
		<form action="" method="get">
			Name: <input type="text" name="fname" value="<?php echo $ten?>" />
			Age: <input type="text" name="age" value="<?php echo $tuoi?>" />
			<input type="submit" name="submit" value="submit" />
		</form>		
		
	</body>
</html>
