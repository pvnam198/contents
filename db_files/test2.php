<?php 
	require "simple_html_dom.php";
	require "dish_detail.php";

	//$regex = "<[^>]*>";


	$regex = '\s*';


	function get_detail($url_detail, $id){

		$html = file_get_html($url_detail);
		$detail = $html->find('*[class="row mb-3"]');

		$nguyen_lieu_list = array();
		$so_che_list = array();
		$thuc_hien_list = array();
		$cach_dung_list = array();
		$mach_nho_list = array();

		foreach($detail[0]->find('span') as $e){
			$nguyen_lieu = strip_tags($e->innertext);
			$nguyen_lieu = preg_replace('"\t"', '', $nguyen_lieu);
			array_push($nguyen_lieu_list, $nguyen_lieu);
		}

		foreach($detail[1]->find('div') as $e){
			$nguyen_lieu = strip_tags($e->innertext);
			$nguyen_lieu = preg_replace('"\t"', '', $nguyen_lieu);
			array_push($so_che_list, $nguyen_lieu);
		}

		foreach($detail[2]->find('div') as $e){
			$nguyen_lieu = strip_tags($e->innertext);
			$nguyen_lieu = preg_replace('"\t"', '', $nguyen_lieu);
			array_push($thuc_hien_list, $nguyen_lieu);
		}

		foreach($detail[3]->find('div') as $e){
			$nguyen_lieu = strip_tags($e->innertext);
			$nguyen_lieu = preg_replace('"\t"', '', $nguyen_lieu);
			array_push($cach_dung_list, $nguyen_lieu);
		}

		foreach($detail[4]->find('div') as $e){
			$nguyen_lieu = strip_tags($e->innertext);
			$nguyen_lieu = preg_replace('"\t"', '', $nguyen_lieu);
			array_push($mach_nho_list, $nguyen_lieu);
		}

		$dish_detail = new DishDetail($id,$nguyen_lieu_list,$so_che_list,$thuc_hien_list,$cach_dung_list,$mach_nho_list);
		return $dish_detail;
	}

	// $html = file_get_html("https://monngonmoingay.com/dau-cove-xao-tim-gan/");

	/*$html = file_get_html("https://monngonmoingay.com/salad-cau-vong-ngay-he/");

	$detail = $html->find('*[class="row mb-3"]');

	$id = 0;

	$nguyen_lieu_list = array();
	$so_che_list = array();
	$thuc_hien_list = array();
	$cach_dung_list = array();
	$mach_nho_list = array();

	foreach($detail[0]->find('span') as $e){
		$nguyen_lieu = strip_tags($e->innertext);
		$nguyen_lieu = preg_replace('"\t"', '', $nguyen_lieu);
		array_push($nguyen_lieu_list, $nguyen_lieu);
	}

	foreach($detail[1]->find('div') as $e){
		$nguyen_lieu = strip_tags($e->innertext);
		$nguyen_lieu = preg_replace('"\t"', '', $nguyen_lieu);
		array_push($so_che_list, $nguyen_lieu);
	}

	foreach($detail[2]->find('div') as $e){
		$nguyen_lieu = strip_tags($e->innertext);
		$nguyen_lieu = preg_replace('"\t"', '', $nguyen_lieu);
		array_push($thuc_hien_list, $nguyen_lieu);
	}

	foreach($detail[3]->find('div') as $e){
		$nguyen_lieu = strip_tags($e->innertext);
		$nguyen_lieu = preg_replace('"\t"', '', $nguyen_lieu);
		array_push($cach_dung_list, $nguyen_lieu);
	}

	foreach($detail[4]->find('div') as $e){
		$nguyen_lieu = strip_tags($e->innertext);
		$nguyen_lieu = preg_replace('"\t"', '', $nguyen_lieu);
		array_push($mach_nho_list, $nguyen_lieu);
	}

	$dish_detail = new DishDetail($id,$nguyen_lieu_list,$so_che_list,$thuc_hien_list,$cach_dung_list,$mach_nho_list);

	$list_detail = array();
	array_push($list_detail, $dish_detail);

	$myJSON = json_encode($list_detail);

	echo $myJSON;*/


?>