<?php 
	require "simple_html_dom.php";
	require "monan.php";

	$links = array();

	for ($i = 91; $i <= 98; $i++) {
		$string = "https://monngonmoingay.com/tim-kiem-mon-ngon/page/$i/";
		array_push($links, $string);
	}

	$id = 1800;

	foreach ($links as $value) {
		$html = file_get_html($value);
		$monans = $html->find("div.col-sm-3 div.one-recipes div.text-center");

		foreach ($monans as $monan) {
			// $image = $monan->find("a", 0)->find("img", 0)->src;
			$url = $monan->find("a", 0)->find("img", 0)->src;
			$img = $id.".jpg";
			file_put_contents($img, file_get_contents($url));
			$id += 1;
		}
	}

	echo "ok";


	
?>