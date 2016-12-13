<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
		<meta charset="utf-8" />
	</head>
	<body>
	
		<h1>$_GET</h1>
		<?php
			var_dump($_GET);

			$name = "";
			$age = "";
			echo "<pre>";
				print_r($_GET);
			echo "</pre>";

			if (isset($_GET['submit'])) {
				$name = $_GET['fname'];
				$age = $_GET['age'];
				echo "Tên : {$name}, Tuổi : {$age}";
			}
		?>
		<form action="02get.php" method="get">
			Name: <input type="text" name="fname" value="<?php echo $name;?>" />
			Age: <input type="text" name="age" value="<?php echo $age;?>" />
			<input type="submit" name="submit" value="submit" />
		</form>		
		
	</body>
</html>
