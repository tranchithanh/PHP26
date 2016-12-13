<?php session_start();ob_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Bài 9</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<div class="wrapper">
			<h2 class="title">Mua hoa</h2>
			<?php 
				$id = "";
				$tenhoa = "";
				$soluong = "";
				$gia = "";

				if (isset($_POST['mua'])) {
					$id = $_POST['id'];
					$tenhoa = $_POST['tenhoa'];
					$soluong = $_POST['soluong'];
					$gia = $_POST['gia'];

					if (isset($_SESSION['arHoa'][$id])) {
						$_SESSION['arHoa'][$id]['soluong'] += $soluong;
					}else{
						$_SESSION['arHoa'][$id] = array(
								'tenhoa' => $tenhoa,
								'soluong' => $soluong,
								'gia' => $gia,
							);
					}
					//chuyển trang basket.php
					header("location: basket.php");
					exit();
					//view mãng SESSION
					// if (isset($_SESSION['arHoa'])) {
					// 	echo "<pre>";
					// 	print_r($_SESSION['arHoa']);
					// 	echo "</pre>";
					// 	//xóa tất cả SESSION
					// 	//session_destroy();
					// }
				}
			?>
			<div class="cont">
				<form action="" method="post">
					Id hoa: <input type="text" name="id" value="<?php echo $id; ?>" /><br />
					Tên hoa: <input type="text" name="tenhoa" value="<?php echo $tenhoa; ?>" /><br />
					Số lượng: <input type="text" name="soluong" value="<?php echo $soluong; ?>" /><br />
					Giá: <input type="text" name="gia" value="<?php echo $gia; ?>" /><br />
					<input type="submit" name="mua" value="Mua hoa" />
				</form>
			</div>
		</div>
	</body>
</html>
<?php ob_end_flush(); ?>