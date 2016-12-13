<!DOCTYPE html>
<html>
	<head>
		<title>Bài 1</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h2>Bài 1</h2>
		<?php
			//tạo mãng arNews
			$arNews = array(
				'n1' => array(
					'id_news' => 1,
					'name' => 'Tin Tức 1',
					'date_create' => '12/02/1014',
					'read' => 200
					),
				'n2' => array(
					'id_news' => 2,
					'name' => 'Tin Tức 2',
					'date_create' => '13/02/1014',
					'read' => 157
					),
				'n3' => array(
					'id_news' => 3,
					'name' => 'Tin Tức 3',
					'date_create' => '14/02/1014',
					'read' => 51
					),
				'n4' => array(
					'id_news' => 4,
					'name' => 'Tin Tức 4',
					'date_create' => '15/02/1014',
					'read' => 49
					),
				);
			// view mãng
			echo "<pre>";
				print_r($arNews);
			echo "</pre>";
			//câu a
			echo "<h3>a. In ra ngày đăng và lượt đọc của id_news=1 và id_news=3</h3>";
			foreach ($arNews as $news) {
				if ($news['id_news']==1 || $news['id_news']==3) {
					echo 'id_news = '.$news['id_news'].' có ngày đăng là : '.$news['date_create'].', lượt đọc là: '.$news['read'].'<br />';
				}
			}
			//câu b
			echo "<h3>b. Dùng foreach in ra thông tin các phần tử của mãng arNews gồm: id_news, name, read</h3>";
			foreach ($arNews as $key => $news) {
				echo 'Thông tin của tin tức có key là '.$key.'<br />';
				echo 'id_news : '.$news['id_news'].', tên tin tức : '.$news['name'].', lượt đọc : '.$news['read'].'<br />';
				echo "==================================<br />";
			}
			//câu c
			echo "<h3>c. Tính tổng lượt đọc của các phần tử mãng arNews có id_news là số lẽ</h3>";
			$tongLuotDocLe = 0;
			foreach ($arNews as $key => $news) {
				if ($news['id_news'] % 2 != 0) {
					$tongLuotDocLe += $news['read'];
				}
			}
			echo "Tổng lượt đọc của các phần tử mãng có id_news là số lẽ là : {$tongLuotDocLe}<br />";
			//câu d
			echo "<h3>d. Thêm phần tử vào mãng</h3>";
			$arNewsSize = count($arNews);
			$arNews['n5'] = array(
				'id_news' => 5,
				'name' => 'Tin Tức 5',
				'date_create' => '16/02/1014',
				'read' => 280
				);
			if (count($arNews)>$arNewsSize) {
				echo 'Đã thêm phần tử thứ '.count($arNews);
			}else{
				echo "Chưa thêm phần tử nào";
			}
			//câu e
			echo "<h3>e. Dùng print_r in ra cấu trúc mãng arNews</h3>";
			echo "<pre>";
				print_r($arNews);
			echo "</pre>";
		?>
	</body>
</html>