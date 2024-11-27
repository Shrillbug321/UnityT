<?php

	namespace Animal\Abstract;

	require_once __DIR__ . "/../Abstract/AbstractAnimal.php";
	require_once __DIR__ . "/../../Eat/Abstract/IHerbEatable.php";
	require_once __DIR__ . "/../../Eat/Abstract/HerbEat.php";

	use Eat\Abstract\HerbEat;
	use Eat\Abstract\IHerbEatable;

	/**
	 * Abstract class for herbivores
	 */
	abstract class Herbivore extends AbstractAnimal implements IHerbEatable
	{
		/**
		 * Method to herbivore feed
		 * @param HerbEat $eat some plant
		 * @return string
		 */
		public function feed(HerbEat $eat): string
		{
			return $this->__toString() . " je $eat";
		}
	}