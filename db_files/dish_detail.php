<?php 
	class DishDetail {

		public $id;
		public $food_ingredients;
		public $food_preparation;
		public $cooking;
		public $user_manual;
		public $little_advice;

		public function __construct($id, $food_ingredients, $food_preparation, $cooking, $user_manual, $little_advice){
			$this->id = $id;
			$this->food_ingredients = $food_ingredients;
			$this->food_preparation = $food_preparation;
			$this->cooking = $cooking;
			$this->user_manual = $user_manual;
			$this->little_advice = $little_advice;
		}

	}
?>