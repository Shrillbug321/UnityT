<?php

namespace Animal\Abstract;

use Eat\CarnEat;

abstract class Carnivore extends AbstractAnimal
{
    public function feed(CarnEat $eat):string
    {
        return $this->__toString()." jest karmiony";
    }
}