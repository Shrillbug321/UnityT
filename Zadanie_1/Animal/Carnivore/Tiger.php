<?php

	namespace Animal\Carnivore;

	require_once __DIR__."/../Abstract/Carnivore.php";
	require_once __DIR__."/../Interfaces/IBrushable.php";

	use Animal\Abstract;
	use Animal\Interfaces\IBrushable;

	class Tiger extends Abstract\Carnivore implements IBrushable
	{
		public function __construct(string $name)
		{
			parent::__construct($name)->setSpecies("Tygrys");
		}

		public function brush(): string
		{
			return parent::brush();
		}
	}

