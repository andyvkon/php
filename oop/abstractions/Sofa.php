<?php

/**
 * Class Sofa
 */
class Sofa
{
    /**
     * @param Scratchable $animal
     * @return string
     */
    public function beScratched(Scratchable $animal) : string
    {
        return get_class($animal) . ' makes ' . $animal->scratch();
    }
}