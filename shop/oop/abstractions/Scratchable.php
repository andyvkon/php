<?php

interface Scratchable
{
    /**
     * @return string
     */
    public function scratch() : string;

    /**
     * @return int
     */
    public function getClawsCount() : int;
}