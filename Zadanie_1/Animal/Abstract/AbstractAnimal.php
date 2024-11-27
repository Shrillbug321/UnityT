<?php

	namespace Animal\Abstract;
	require_once __DIR__ . "/../Interfaces/IBrushable.php";

	/**
	 * Abstract class for all's animals
	 * */
	abstract class AbstractAnimal
	{
		/**
		 * @var string animal name
		 */
		private string $name;

		/**
		 * @var string animal species
		 */
		private string $species;

		/**
		 * @param string $name name of created animal
		 */
		public function __construct(string $name)
		{
			$this->setName($name);
			return $this;
		}

		/**
		 * @return string species and name of animal
		 */
		public function __toString()
		{
			return "$this->species $this->name";
		}

		/**
		 * @return string
		 */
		public function getName(): string
		{
			return $this->name;
		}

		/**
		 * @param string $name
		 * @return AbstractAnimal
		 */
		public function setName(string $name): AbstractAnimal
		{
			$this->name = $name;
			return $this;
		}

		/**
		 * @return string
		 */
		public function getSpecies(): string
		{
			return $this->species;
		}

		/**
		 * @param string $species
		 * @return AbstractAnimal
		 */
		protected function setSpecies(string $species): AbstractAnimal
		{
			$this->species = $species;
			return $this;
		}

		/**
		 * Method implementing brushing.
		 * Only available externally if the extending class implements the IBrushable interface.
		 * @return string
		 */
		protected function brush(): string
		{
			return "$this ma teraz lśniące futerko";
		}
	}