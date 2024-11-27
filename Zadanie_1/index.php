<?php

	$files = glob("Animal/*/*.php");
	foreach ($files as $file) {
		require_once $file;
	}
	require_once "Zoo.php";

	use Animal\Carnivore\Fox;
	use Animal\Carnivore\SnowIrbis;
	use Animal\Carnivore\Tiger;
	use Animal\Herbivore\Elephant;
	use Animal\Herbivore\Rabbit;
	use Animal\Herbivore\Rhino;
	use Animal\Omnivore\Bear;
	use Animal\Omnivore\Monkey;

	$zoo = new Zoo();
	$zoo->addAnimal(new Tiger("Bonzo"));
	$zoo->addAnimal(new Elephant("Benjamin"));
	$zoo->addAnimal(new Fox("Andy"));
	$zoo->addAnimal(new SnowIrbis("Amy"));
	$zoo->addAnimal(new Rabbit("Peter"));
	$zoo->addAnimal(new Rhino("Bodzio"));
	$zoo->addAnimal(new Bear("Kubuś"));
	$zoo->addAnimal(new Monkey("Dźordź"));

	echo "W zoo obecnie znajdują się zwierzęta: <br>";
	echo $zoo->getAnimalsStringify();

	echo "<br>";
	$fox = new Fox("Andy2");
	echo $fox->brush();
	$monkey = new Monkey("Andy2");
	echo $monkey->brush();
	/*$rhino = new Rhino("p");
	echo $rhino->brush();*/