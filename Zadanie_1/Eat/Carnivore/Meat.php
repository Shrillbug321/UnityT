<?php

	namespace Eat\Carnivore;
	require_once "Zadanie_1/Eat/Abstract/CarnEat.php";

	use Eat\Abstract;

	class Meat extends Abstract\CarnEat
	{
		public function __construct()
		{
			parent::__construct("Mięso");
		}
	}