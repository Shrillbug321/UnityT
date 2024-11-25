<?php

namespace Animal\Abstract;

use Eat\AbstractEat;
use Eat\HerbEat;
use Eat\ICarnEatable;
use Eat\IHerbEatable;
use Eat\IOmniEatable;

class Omnivore extends AbstractAnimal implements IOmniEatable
{
    public function feed(AbstractEat $eat)
    {
        return $this->__toString()." jest karmiony";
    }
}