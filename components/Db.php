<?php

class Db {

    public static function getConnection() {
        $host = 'mysql.zzz.com.ua';
        $dbname = 'gohnny';
        $user = 'odmen';
        $password = '0000sS';
        //Подключение к бд
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->exec("set names utf8");

        return $db;
    }

}
