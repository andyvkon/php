<?php
declare(strict_types = 1);
error_reporting(E_ALL);

class Domashka

{
    protected array $memory = [];
    public function task()  {

     return $memory['task'] = 'Output only random even numbers , from 10 to 20';
    }
}

class Student extends Domashka
{
    public function makeHomework() : int
    {
         if (!array_key_exists('evenNumbers', $this->memory)) {
             $this->memory['evenNumbers'] = 0;
         }

            $numbers = mt_rand(10,20);



                $this->memory['evenNumbers'] = $numbers;
                return $this->memory['evenNumbers']++;
//                 $numbers;


    }
}

class Mentor extends Domashka
{

    public function checkHomework() : string
    {
        return '15 days';
    }

}


$domashka = new Domashka();
$mentor = new Mentor();
$student = new Student();


var_dump($domashka->task());
var_dump($student->makeHomework());
var_dump($mentor->checkHomework());
var_dump($domashka, $student, $mentor);
//echo $domashka->checkHomework();
//echo $student->checkHomework();
//echo $mentor->checkHomework();


