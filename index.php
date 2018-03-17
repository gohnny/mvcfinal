<?php

//формат даты  день-месяц- год
//$string = '21-11-2019';
//
////Строка приведенного типа Год 2019 месяц 11 день 21;
//
//
//$pattern='/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
//
//$replasment= 'Год $3, месяц $2, день $1';
//        
//echo preg_replace($pattern, $replasment, $string);
//die;
 //Mont 11 Day 21 Year 2015
 //
 //
 //
//$string = '21-11-2015';
//$pattern ='([0-9]{2})-([0-9]{2})-([0-9]{4}) ';
//$replasment= 'Month $2 Day $1 Year$3';
//echo preg_replace($pattern, $replasment, $string);
//die;


//  FRONT CONTORLLER
 
// Общие настройки 
ini_set('display_errors',1);
error_reporting(E_ALL);
// Подключение файлов системы 
define('ROOT',__DIR__);
require_once (ROOT.'/components/Router.php');
require_once (ROOT.'/components/Db.php');
//print_r(ROOT);

//$string = '21-11-2015';
//$pattern ='/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
//$replasment= 'Month $2 Day $1 Year$3';
//echo preg_replace($pattern, $replasment, $string);






// Вызов Router
$router= new Router();
$router->run();



