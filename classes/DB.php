<?php

require_once 'Config.php';

class DB {

    private static $_instance = null;

    private $_pdo;
    private $_error = false;
    private $_results;
    private $_count = 0;

    private function __construct()
    {
        try
        {
            $this->_pdo = new PDO('mysql:host='.Config::get('mysql/host').';dbname='.Config::get('mysql/db'), Config::get('mysql/username'), Config::get('mysql/password'));
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }
    public static function getInstance()
    {
        if(!isset(self::$_instance))
        {
            self::$_instance = new DB();
        }
        return self::$_instance;
    }

    public function results()
    {
        return $this->_results;
    }
    public function first()
    {
        return $this->results()[0];
    }

    public function error()
    {
        return $this->_error;
    }

    public function count() {
        return $this->_count;
    }
}
