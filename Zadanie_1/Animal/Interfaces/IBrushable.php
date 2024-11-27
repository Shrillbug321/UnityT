<?php

namespace Animal\Interfaces;

interface IBrushable
{
	/**
	 * Brushing method
	 * @return string information about brushing
	 */
    public function brush(): string;
}