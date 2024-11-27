<?php

	namespace Eat\Carnivore;
	require_once __DIR__."/../Abstract/CarnEat.php";

	use Eat\Abstract;

	class Meat extends Abstract\CarnEat
	{
		public function __construct()
		{
			parent::__construct("Mięso");
		}
	}