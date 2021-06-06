<?php 
	require "simple_html_dom.php";
	require "monan.php";

	$links = array();

	for ($i = 1; $i <= 98; $i++) {
		$string = "https://monngonmoingay.com/tim-kiem-mon-ngon/page/$i/";
		array_push($links, $string);
	}

	$list_mon_an = array();

	$id = 0;

	for($i = 0; $i < count($links); $i++) {

		$html = file_get_html($links[$i]);
		$monans = $html->find("div.col-sm-3 div.one-recipes div.text-center");

		foreach ($monans as $monan) {

			// $image_link = "https://raw.githubusercontent.com/pvnam198/contents/main/images_1/0.jpg"

			$image_link = "";
			$detail_link = "";

			if ($id <= 975) {
				$image_link = "https://raw.githubusercontent.com/pvnam198/contents/main/images_1/".$id.".jpg";
				$detail_link = "https://pvnam198.github.io/contents/details_1/".$id.".html";
			}else{
				$image_link = "https://raw.githubusercontent.com/pvnam198/contents/main/images_2/".$id.".jpg";
				$detail_link = "https://pvnam198.github.io/contents/details_2/".$id.".html";
			}

			

			$link_detail = $detail_link;

			$title = $monan->find("a", 0)->title;

			$image = $image_link;

			$monan = new Monan($id, $link_detail, $title, $image);

			array_push($list_mon_an, $monan);

			$id += 1;
		}
	}

	/*foreach ($links as $value) {
		$html = file_get_html($value);
		$monans = $html->find("div.col-sm-3 div.one-recipes div.text-center");

		foreach ($monans as $monan) {

			$link_detail = $monan->find("a", 0)->href;

			$title = $monan->find("a", 0)->title;

			$image = $monan->find("a", 0)->find("img", 0)->src;

			$monan = new Monan($id, $link_detail, $title, $image);

			array_push($list_mon_an, $monan);

			$id += 1;
		}
	}*/

	$myJSON = json_encode($list_mon_an);

	echo $myJSON;

	
?>