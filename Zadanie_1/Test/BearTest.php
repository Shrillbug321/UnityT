<?php

	namespace Test;

	use Animal\Omnivore\Bear;
	use Eat\Carnivore\Meat;
	use Eat\Herbivore\Flower;
	use PHPUnit\Framework\TestCase;

	require_once __DIR__."/../Animal/Omnivore/Bear.php";
	require_once __DIR__."/../Eat/Carnivore/Meat.php";
	require_once __DIR__."/../Eat/Herbivore/Flower.php";
	class BearTest extends TestCase
	{
		public function setUp(): void
		{
			$this->bear = new Bear("TestBear");
		}
		public function testGetName() {
			$this->assertEquals("TestBear", $this->bear->getName());
		}

		public function testBrush() {
			$this->assertEquals("Niedźwiedź TestBear ma teraz lśniące futerko.<br>", $this->bear->brush());
		}

		public function testSetName() {
			$this->bear->setName("New Name");
			$this->assertEquals("New Name", $this->bear->getName());
		}

		public function testGetSpecies() {$this->assertEquals("Niedźwiedź", $this->bear->getSpecies());}

		public function test__toString() {$this->assertEquals("Niedźwiedź TestBear", $this->bear->__toString());}

		public function testFeed() {
			$meat = new Meat();
			$flower = new Flower();
			$this->assertEquals("Niedźwiedź TestBear je Mięso", $this->bear->feed($meat));
			$this->assertEquals("Niedźwiedź TestBear je Kwiatek", $this->bear->feed($flower));
		}
	}
