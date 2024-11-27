<?php

namespace Animal\Abstract;

require_once __DIR__."/../Abstract/AbstractAnimal.php";
require_once __DIR__."/../../Eat/Abstract/IOmniEatable.php";
require_once __DIR__."/../../Eat/Abstract/AbstractEat.php";

use Eat\Abstract\AbstractEat;
use Eat\Abstract\IOmniEatable;
/**
 * Abstract class for omnivores
 */
abstract class Omnivore extends AbstractAnimal implements IOmniEatable
{
	/**
	 * Method to herbivore feed
	 * @param AbstractEat $eat some plant or meat
	 * @return string
	 */
    public function feed(AbstractEat $eat):string
    {
        return $this->__toString()." je $eat";
    }
}