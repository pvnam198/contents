<?php 
	require "simple_html_dom.php";

	$regex = "<[^>]*>";

	$html = file_get_html("https://monngonmoingay.com/dau-cove-xao-tim-gan/");

	$detail = $html->find('*[class="row mb-3"]');

	$list_nguyen_lieu = array();

	for ($i = 0; $i < count($detail); $i++) {
		if ($i == 0) {
    		foreach($detail[$i]->find('span') as $e){
				$nguyen_lieu = strip_tags($e->innertext);
				$nguyen_lieu = preg_replace('"\t"', ' ', $nguyen_lieu);
				array_push($list_nguyen_lieu, $nguyen_lieu);
			}
		}else{
			//echo $detail[$i]."\n";
			foreach($detail[$i]->find('li') as $e){
				$nguyen_lieu = strip_tags($e->innertext);
				$nguyen_lieu = preg_replace('"\t"', ' ', $nguyen_lieu);
				array_push($list_nguyen_lieu, $nguyen_lieu);
			}
		}
	}

	$myJSON = json_encode($list_nguyen_lieu);

	echo $myJSON;

?>