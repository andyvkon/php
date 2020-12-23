<?php
declare(strict_types = 1);
error_reporting(E_ALL);

class Human
{
    public int $age = 0;
    public string $name = '';
    public string $taskExaption = '';
    protected array $memory = [];
    public string $task = '';
}

class Mentor extends Human
{
    public string $knowledge = '';
//    public array $task = [];
    public int $days = 0;

    public function dateHomework() : string
    {
        $date = '7 days';
        $this->memory['homework time'] = $date;
        return $date;
    }

}

class Student extends Mentor
{
    public function dateHomework():  string
    {
        $days = mt_rand(0,7);
        $date =  (new DateTime('now'))->modify("+{$days} day")->format ('Y-m-d');

        $this->memory['homework time'] = $date;

        return $date;
    }

    public function taskResult(): int
    {
        $result = 100 + 200 ;
        return $result;
    }
}

$mentor = new Mentor();
$mentor->age = 40;
$mentor->name = 'Vasiliy Petrov';
$mentor->knowledge = 'professor';
$mentor->taskExaption = '100 + 200 = ?';
$mentor->task = "How many will be {$mentor->taskExaption} Do it , and send me an answer. I need {$mentor->dateHomework()} for check your homework ";


$student = new Student();
$student->age = 20;
$student->name = 'dunkan maklaut';
$student->knowledge = 'intermediate';
$student->taskExaption =  "{$student->taskResult()}";
$student->task = "I will complete it untill {$student->dateHomework()} , it seems it be  {$student->taskResult()}";


//echo "{$mentor->name} : {$mentor->task}", PHP_EOL,PHP_EOL;
//echo "{$student->name} : {$student->task}" , PHP_EOL,  PHP_EOL;


var_dump($mentor, $student);

$mentor = new Mentor();
$mentor->taskExaption ="{$mentor->dateHomework()} already pass. Task successfull completed";
$mentor->task = 'right answer';

//echo $mentor->task;

var_dump($mentor);
