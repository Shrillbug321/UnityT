<?php

	use Animal\Abstract\AbstractAnimal;

	/**
	 * Zoo class contains animals
	 */
	class Zoo
	{
		/**
		 * @var array array of animals in zoo
		 */
		private array $animals = [];

		/**
		 * Add animal to zoo
		 * @param AbstractAnimal $animal
		 * @return void
		 */
		public function addAnimal(AbstractAnimal $animal): void
		{
			$this->animals[] = $animal;
		}

		/**
		 * @return string stringify array of animals
		 */
		public function getAnimalsStringify(): string
		{
			$animalsList = "";
			foreach ($this->animals as $animal)
				$animalsList .= "$animal <br>";
			return $animalsList;
		}

		/**
		 * @return array of animals
		 */
		public function getAnimals(): array
		{
			return $this->animals;
		}
	}