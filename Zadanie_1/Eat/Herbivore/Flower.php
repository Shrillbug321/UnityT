<?php

	namespace Eat\Herbivore;

	require_once __DIR__."/../Abstract/HerbEat.php";
	use Eat\Abstract\HerbEat;

	class Flower extends HerbEat
	{
		public function __construct() {
			parent::__construct("Kwiatek");
		}
	}