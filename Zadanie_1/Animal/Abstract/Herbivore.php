<?php

namespace Animal\Abstract;

use Eat\HerbEat;
use Eat\IHerbEatable;

class Herbivore extends AbstractAnimal implements IHerbEatable
{
    public function feed(HerbEat $eat):string
    {
        return $this->__toString()." jest karmiony";
    }
}