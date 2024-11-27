<?php

	namespace Animal\Herbivore;

	require_once __DIR__."/../Abstract/Herbivore.php";

	use Animal\Abstract;

	class Rhino extends Abstract\Herbivore
	{
		public function __construct(string $name)
		{
			parent::__construct($name)->setSpecies("Nosorożec");
		}
	}