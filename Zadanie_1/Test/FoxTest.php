<?php

	namespace Test;

	use Animal\Carnivore\Fox;
	use Eat\Carnivore\Meat;
	use PHPUnit\Framework\TestCase;

	require_once __DIR__."/../Animal/Carnivore/Fox.php";
	require_once __DIR__."/../Eat/Carnivore/Meat.php";
	class FoxTest extends TestCase
	{
		public function setUp(): void
		{
			$this->fox = new Fox("TestFox");
		}
		public function testGetName() {
			$this->assertEquals("TestFox", $this->fox->getName());
		}

		public function testBrush() {
			$this->assertEquals("Lis TestFox ma teraz lśniące futerko.<br>", $this->fox->brush());
		}

		public function testSetName() {
			$this->fox->setName("New Name");
			$this->assertEquals("New Name", $this->fox->getName());
		}

		public function testGetSpecies() {$this->assertEquals("Lis", $this->fox->getSpecies());}

		public function test__toString() {$this->assertEquals("Lis TestFox", $this->fox->__toString());}

		public function testFeed() {
			$meat = new Meat();
			$this->assertEquals("Lis TestFox je Mięso", $this->fox->feed($meat));
		}
	}
