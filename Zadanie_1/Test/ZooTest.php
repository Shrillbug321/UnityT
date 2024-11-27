<?php

	namespace Test;
	require_once __DIR__ . "/../Zoo.php";
	require_once __DIR__ . "/../Animal/Herbivore/Rhino.php";

	use Animal\Herbivore\Rhino;
	use PHPUnit\Framework\TestCase;
	use Zoo;

	class ZooTest extends TestCase
	{
		public function setUp(): void
		{
			$this->zoo = new Zoo();
		}

		public function testAddAnimal()
		{
			$this->zoo->addAnimal(new Rhino("Alfred"));
			self::assertCount(1, $this->zoo->getAnimals());
		}

		public function testShowAnimals()
		{
			$this->zoo->addAnimal(new Rhino("Alfred"));
			self::assertEquals("Nosorożec Alfred <br>", $this->zoo->getAnimalsStringify());
		}
	}
