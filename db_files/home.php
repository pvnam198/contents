<?php 
	require "simple_html_dom.php";
	require "monan.php";

	$html = file_get_html("https://monngonmoingay.com/tag/nau-an-ngon-gia-dinh/");

	$monans = $html->find("div.col-sm-3 div.one-recipes div.text-center");

	$list_mon_an = array();

	foreach ($monans as $monan) {

		$link_detail = $monan->find("a", 0)->href;

		$title = $monan->find("a", 0)->title;

		$image = $monan->find("a", 0)->find("img", 0)->getAttribute("data-lazy-src");

		$monan = new Monan($link_detail, $title, $image);

		array_push($list_mon_an, $monan);

	}

	$myJSON = json_encode($list_mon_an);

	echo $myJSON;
	
?>