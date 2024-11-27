<?php

namespace Eat\Abstract;
/**
 * Interface contains feed method for herbivores
 */
interface IHerbEatable
{
    public function feed(HerbEat $eat);
}