<?php

	namespace Eat\Herbivore;

	require_once "Zadanie_1/Eat/Abstract/HerbEat.php";
	use Eat\Abstract\HerbEat;

	class Flower extends HerbEat
	{
		public function __construct() {
			parent::__construct("Kwiatek");
		}
	}