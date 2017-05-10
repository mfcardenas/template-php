<?php

class ConnDB {
    private static $conn = NULL;

    private function __construct() {
    }

    private function __clone() {
    }

    public static function getConn() {
        if (!isset(self::$conn)) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$conn = new PDO(DRIVER.':host='.HOST.';dbname='.DATABASE, USER, PASSWORD, $pdo_options);
        }
        return self::$conn;
    }
}

?>