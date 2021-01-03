<?php


interface Securable
{
    /**
     * @param bool $isDangerous
     * @return string
     */
    public function guard(bool $isDangerous): string;

}