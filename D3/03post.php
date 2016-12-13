<?php session_start();?>
<html>
	<head>
		<title>VinaTAB EDU - LT PHP</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h1>$_POST</h1>
		<?php
			echo "<pre>";
				print_r($_POST);
			echo "<pre>";

			$name = "";
			$tuoi = "";

			if (isset($_POST['submit'])){
				echo $_POST['fname'].'<br />'.$_POST['age'];
			}
			//demo session
			$tuoi = $_SESSION['tuoi'];
			echo "<br />tuổi : {$tuoi}";
		?>
		<form action="04post.php" method="post">
			Name: <input type="text" name="fname" value="<?php echo $name;?>" />
			<br /><br />
			Age: <input type="text" name="age" value="<?php echo $tuoi;?>" />
			<br /><br />
			<input type="submit" name="submit" value="submit" />
		</form>
	
		
	</body>
</html>
