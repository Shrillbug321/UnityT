<?php

namespace Eat\Abstract;
/**
 * Interface contains feed method for carnivores
 */
interface ICarnEatable
{
    public function feed(CarnEat $eat);
}