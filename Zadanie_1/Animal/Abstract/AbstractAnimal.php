<?php

namespace Animal\Abstract;

abstract class AbstractAnimal
{
    private string $name;
    private string $species;

/*    public function feed(): string
    {
        return $this->__toString()." jest karmiony"; 
    }*/

    public function __toString()
    {
        return "$this->species $this->name";
    }

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName(string $name):void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSpecies(): string
    {
        return $this->species;
    }

    /**
     * @param mixed $species
     */
    public function setSpecies(string $species):void
    {
        $this->species = $species;
    }
}