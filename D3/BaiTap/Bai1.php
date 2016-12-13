<!DOCTYPE html>
<html>
	<head>
		<title>Bài 1</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<div class="wrapper">
			<h2 class="title">In câu chào</h2>
			<?php 
				$name = "";
				$outName = "";
				if (isset($_POST['incauchao']) && ($_POST['name'] != "")) {
					$name = ucwords($_POST['name']);
					$outName = "Chào bạn {$name}";
				}

			?>
			<div class="cont">
				<form action="" method="post">
					Nhập tên : <input type="text" name="name" value="<?php echo $name; ?>" /><br />
					Câu chào : <strong><?php echo $outName; ?></strong><br />
					<input type="submit" name="incauchao" value="In câu chào" />
				</form>
			</div>
		</div>
	</body>
</html>