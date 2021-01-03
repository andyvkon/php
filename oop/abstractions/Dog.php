<?php

/**
 * Class Animal
 */
class Dog extends Animal implements Scratchable, Securable
{
    public function makeSound(): string
    {
        return 'Gaww';
    }

    /**
     * @inheritDoc
     */
    public function scratch(): string
    {
        $result = '';
        for ($i = 1; $this->getClawsCount() >= $i; $i ++){
            $result .= "Scratch #{$i} ";
        }
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function getClawsCount(): int
    {
        return 5;
    }

    /**
     * @inheritDoc
     */
    public function guard(bool $isDangerous): string
    {
        if ($isDangerous){

            return "!!!{$this->makeSound()}!!!";
        }
        return '';
    }
}



//    public function scratch() : string
//    {
//        $result = '';
//        for ($i = 1; $this->getClawsCount() >= $i; $i++ ){
//
//            $result .= "Scratch #{$i}";
//        }
//
//        return $result;
//    }
//
//    /**
//     * @return int
//     */
//    public function getClawsCount() : int
//    {
//        return 5;
//    }