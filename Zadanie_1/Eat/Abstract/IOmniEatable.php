<?php

namespace Eat\Abstract;
/**
 * Interface contains feed method for omnivores
 */
interface IOmniEatable
{
    public function feed(AbstractEat $eat);
}