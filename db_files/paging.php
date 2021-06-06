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

	foreach ($links as $value) {
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
	}

	$myJSON = json_encode($list_mon_an);

	echo $myJSON;

	
?>