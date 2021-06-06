<?php 
	//require "simple_html_dom.php";
	require "monan.php";
	require "test2.php";

	$links = array();

	for ($i = 97; $i <= 98; $i++) {
		$string = "https://monngonmoingay.com/tim-kiem-mon-ngon/page/$i/";
		array_push($links, $string);
	}

	$list_mon_an = array();

	$id = 1920;

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


	$list_detail = array();

	foreach ($list_mon_an as $value) {

		//echo get_detail($value->link_detail, $value->id)->id . "</br>";

		//array_push($list_detail, get_detail($value->link_detail, $value->id));

		$myfile = fopen($value->id.".html", "w") or die("Unable to open file!");
		$txt = json_encode(get_detail($value->link_detail, $value->id));
		fwrite($myfile, $txt);
		fclose($myfile);
		echo "done" . $value->id . "</br>";

		//echo $value->link_detail;
		/*$html = file_get_html($value->link_detail);

		$detail = $html->find("div.detail_main div.container div.mb-3", 0);

		foreach($detail->find('span') as $e){
			$nguyen_lieu = strip_tags($e->innertext);
			$nguyen_lieu = preg_replace('"\t"', ' ', $nguyen_lieu);
			array_push($list_nguyen_lieu, $nguyen_lieu);
		}*/

	}
/*
	$myJSON = json_encode($list_detail);

	echo $myJSON*/

	
?>