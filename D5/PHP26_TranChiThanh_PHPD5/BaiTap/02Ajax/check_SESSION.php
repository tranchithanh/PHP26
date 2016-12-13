<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Check SESSION</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<?php
			if (isset($_SESSION['arHoa'])) {
				echo "<pre>";
				print_r($_SESSION['arHoa']);
				echo "</pre>";
			}else{
				echo "SESSION rỗng !!!";
			}
		?>
	</body>
</html>