<?php

namespace Animal\Abstract;

require_once __DIR__."/../Abstract/AbstractAnimal.php";
require_once __DIR__."/../../Eat/Abstract/ICarnEatable.php";
require_once __DIR__."/../../Eat/Abstract/CarnEat.php";

use Eat\Abstract\CarnEat;
use Eat\Abstract\ICarnEatable;

/**
 * Abstract class for carnivores
 */
abstract class Carnivore extends AbstractAnimal implements ICarnEatable
{
	/**
	 * Method to herbivore feed
	 * @param CarnEat $eat some meat
	 * @return string
	 */
    public function feed(CarnEat $eat):string
    {
        return $this->__toString()." je $eat";
    }
}