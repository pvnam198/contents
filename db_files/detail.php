<?php 
	require "simple_html_dom.php";

	$html = file_get_html("https://monngonmoingay.com/nui-xao-chay-thap-cam/");

	/*$detail = $html->find("div.detail_main div.container div.mb-3", 0);

	$list_nguyen_lieu = array();

	foreach($detail->find('span') as $e){
		$nguyen_lieu = strip_tags($e->innertext);
		$nguyen_lieu = preg_replace('"\t"', ' ', $nguyen_lieu);
		array_push($list_nguyen_lieu, $nguyen_lieu);
	}

	$myJSON = json_encode($list_nguyen_lieu);

	echo $myJSON;*/

	$detail_so_che = $html->find("div.detail_main div.container div.col", 0)->find("div");
	foreach ($detail_so_che as $key) {
		# code...
		echo $key;
	}



?>