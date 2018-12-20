<?php

namespace liw\components;

class Db
{
    public static function getConnection()
    {
		$paramsPath = 'config/db_params.php';
		$params = include($paramsPath);

        try{
            $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
            $db = new \PDO($dsn, $params['user'], $params['password']);
        } catch (PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }


		return $db;
	}
}