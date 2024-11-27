<?php

	namespace Animal\Omnivore;

	require_once __DIR__."/../Abstract/Omnivore.php";
	require_once __DIR__."/../Interfaces/IBrushable.php";

	use Animal\Abstract\Omnivore;
	use Animal\Interfaces\IBrushable;

	class Bear extends Omnivore implements IBrushable
	{
		public function __construct(string $name)
		{
			parent::__construct($name)->setSpecies("Niedźwiedź");
		}

		public function brush(): string
		{
			return parent::brush();
		}
	}