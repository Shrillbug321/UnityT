<?php

	namespace Animal\Herbivore;

	require_once __DIR__."/../Abstract/Herbivore.php";
	require_once __DIR__."/../Interfaces/IBrushable.php";

	use Animal\Abstract\AbstractAnimal;
	use Animal\Interfaces\IBrushable;

	class Rabbit extends AbstractAnimal implements IBrushable
	{
		public function __construct(string $name)
		{
			parent::__construct($name)->setSpecies("Królik");
		}

		public function brush(): string
		{
			return parent::brush();
		}
	}