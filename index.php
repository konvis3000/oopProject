<?php

use \application\Asus;

//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
//вывод всех ошибок на экран


require_once(__DIR__ . DIRECTORY_SEPARATOR . 'Autoload.php');
spl_autoload_register(['Autoload', 'loader']);
try {
    $asus = new Asus('Intel', 8000, 2000, 1024, 'Bogdan_lap');

    $asus->start();
    $asus->printParameters();
} catch (Exception $exception){
    echo $exception->getMessage()."\n\n";
    echo $exception->getLine()."\n\n";
    echo $exception->getFile()."\n\n";
}

//function divideZore($a,$b){
//    if($b==0){
//        throw new Exception('Devide by zero');
//    }
//    return$a/$b;
//}
//try{
//    echo divideZore(4,2);
//}catch (Exception $exception){
//    echo $exception->getMessage()."\n\n";
//    echo $exception->getLine()."\n\n";
//    echo $exception->getFile()."\n\n";
//}