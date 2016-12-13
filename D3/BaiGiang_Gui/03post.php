<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
	</head>
	<body>
	
		<h1>$_POST</h1>
		<?php
		//khởi tạo giá trị các biến
		$ten = "";
		$tuoi = "";
		//kiểm tra khi người dùng nhấn nút submit
		if (isset($_POST["submit"])){
			$ten = $_POST["fname"];
			$tuoi = $_POST["age"];
			?>
			Chào, <?php echo $ten;?><br />
			Tuổi của bạn là: <?php echo $tuoi;?><br />
			<?php
		}
		?>
		<form action="" method="post">
			Name: <input type="text" name="fname" value="" />
			<br /><br />
			Age: <input type="text" name="age" value="" />
			<br /><br />
			<input type="submit" name="submit" value="submit" />
		</form>
	
		
	</body>
</html>
