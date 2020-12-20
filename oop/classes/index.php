<?php
declare (strict_types=1);

error_reporting(E_ALL);

class Human
{
    public const BIOLOGIC = 'Human';

    private string $name ='';
    private int $age = 0;

    protected array $memory = [];

    public function breathe($air): string
    {
        if (!array_key_exists('breathe', $this->memory)) {
            $this ->memory['breathe'] = 0;
        }
        $this->memory['breathe']++;

        return 'CO2';
    }

}

class Student extends Human
{
    public function makeHomework(): string
    {
        $days = random_int(1,10);
        $date =  (new DateTime('now'))->modify("+{$days} day")->format ('Y-m-d');

        $this-> memory['homework'] = $date;

        return $date;
    }
}

class Mentor extends Human
{
    public function checkHomework () : string
    {
        return 'tomorrow';
    }

}

var_dump(Student::BIOLOGIC);

$student = new Student();
$student->name = 'Piter Johnson';
$student->age = 23;

$student2 = new Student();
$student2->name = 'Piter Parker';
$student2->age = 24;

$mentor = new Mentor();
$mentor->name = 'Piter Johnson';
$mentor->age = 34;

echo "($student->name): {$student -> makeHomework()}",PHP_EOL;
echo "($student2->name): {$student2 -> makeHomework()}",PHP_EOL;
echo "($mentor->name): {$mentor -> checkHomework()}",PHP_EOL;

$student2->breathe('11');
$student2->breathe('11');
$student2->breathe('11');
$student2->breathe('11');

var_dump($student,$student2, $mentor);