<?php
error_reporting(E_ALL);

class RandyException extends Exception
{
    public $message = 'Randy test exception';
    public $code = 404;
}

class ZeroException extends Exception
{
    public $message = 'Randy test exception';
    public $code = 404;
}

class ExceptionTester
{
    public function randomExceptionTester(int $number)
    {
        if ($number === 0 ){
            throw new ZeroException("Nomer {$number} ZERO");
        }
        elseif ($number % 2 === 0) {
            throw new Exception("Nomer {$number} chetniy");
        } else {
            throw new RandyException ();
        }
    }
}

try {
    $number = mt_rand(0,2);
    (new ExceptionTester())->randomExceptionTester($number);
}  catch (Exception $exception) {
    var_dump('Randy Hello ggwp');
    var_dump($exception->getMessage(), $exception->getCode(), $exception->getTrace());
} catch (ZeroException $exception) {
    var_dump('Zero');
    var_dump($exception->getMessage(), $exception->getCode(), $exception->getTrace());
}
   catch (Exception $exception) {
    var_dump($exception->getMessage(), $exception->getCode(), $exception->getTrace());
} finally {
    echo 'Finally result';
}

