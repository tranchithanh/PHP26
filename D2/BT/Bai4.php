<!DOCTYPE html>
<html>
	<head>
		<title>Bài 4</title>
		<meta charset="utf-8" />
	</head>
	<body>
		<h2>Bài 4</h2>
		<?php
			//Cho Url có dạng sau : http://vinaenter.edu.vn/lap-trinh-php-tu-az-online.html
			$strUrl = "http://vinaenter.edu.vn/lap-trinh-php-tu-az-online.html";
			//$strUrl = "http://www.nhaccuatui.com/bai-hat/noi-dau-minh-anh-chau-khai-phong-ft-trinh-dinh-quang.YhhLkHs37YEZ.html";
			echo "Url : {$strUrl}<br />";
			//Câu a
			echo "<h3>a. Lấy chuỗi php và online từ Url</h3>";
			$arrUrl = explode('/', $strUrl);//tách để lấy chuỗi : lap-trinh-php-tu-az-online.html
			$strLink = $arrUrl[count($arrUrl)-1];

			//tách chuỗi strLink để lấy chuỗi 'lap-trinh-php-tu-az-online'
			$arrLink = explode('.', $strLink);
			$strLink2 = $arrLink[0];

			//tách chuỗi strLink2 để lấy chuỗi cần lấy
			//vì đây là link url nên em làm 3 lần tách,nên có thể thay đổi Url bất kỳ
			$arrLink2 = explode('-', $strLink2);
			$txt1 = "php";
			$txt2 = "online";
			foreach ($arrLink2 as $key => $str) {
				if ($str == $txt1 || $str == $txt2){
					echo "{$key} => {$str}<br />";
				}
			}
			echo "Key tính theo mãng của chuỗi : '{$strLink2}' sau khi tách";

			//Câu b
			echo "<h3>b. Đếm dấu - trong chuỗi Url</h3>";
			$arrTemp = explode('-', $strUrl);
			echo 'Có '.(count($arrTemp)-1).' dấu "-" trong chuỗi : "'.$strUrl.'"';
		?>
	</body>
</html>