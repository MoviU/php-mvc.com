<?php
    class DB {
        public static function getConnection () {
            // Подключаем конфигурацию БД
           $paramsPath = ROOT . '/config/db_params.php';
           $params = include($paramsPath);

           $db = new mysqli($params['host'], $params['user'], $params['password'], $params['dbname']);
           return $db;
        }

    }
