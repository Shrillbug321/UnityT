<?php

namespace Eat\Abstract;

/**
 * Abstract class for food
 */
abstract class AbstractEat
{
	/**
	 * @var $name string food name
	 */
    private string $name;

	/**
	 * @param $name string food name
	 */
	public function __construct(string $name)
	{
		$this->name = $name;
	}

	/**
	 * @return string food name
	 */
	public function __toString(): string
	{
		return $this->name;
	}
}