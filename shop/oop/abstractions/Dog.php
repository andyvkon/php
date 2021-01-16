<?php

/**
 * Class Animal
 */
class Dog extends Animal implements Scretchable
{
    public function makeSound(): string
    {
        return 'Gaww';
    }

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
