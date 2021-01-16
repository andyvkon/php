<?php

/**
 * Class Animal
 */
class Cat extends Animal implements Scretchable
{
    /**
     * @return string
     */
    public function makeSound(): string
    {
        return 'Meow';
    }

    /**
     * @return string
     */
    public function scratch() : string
    {
        $result = '';
        for ($i = 1; $this->getClawsCount() >= $i; $i++ ){

            $result .= "Scratch #{$i}";
        }

        return $result;
    }

    /**
     * @return int
     */
    public function getClawsCount() : int
    {
        return 5;
    }
}
