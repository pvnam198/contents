<?php 

	class Monan {

		public $id;
		public $link_detail;
		public $title;
		public $image;

		public function __construct($id, $link_detail, $title, $image){
			$this->link_detail = $link_detail;
			$this->title = $title;
			$this->image = $image;
			$this->id = $id;
		}

	}
	
?>