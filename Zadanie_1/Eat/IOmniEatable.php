<?php

namespace Eat;

interface IOmniEatable
{
    public function feed(AbstractEat $eat);
}