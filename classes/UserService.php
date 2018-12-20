<?php

class UserService
{

    protected $_name;
    protected $_pass;
    protected $_email;

    public function __construct(){}

    public function getName($string)
    {
        $this->name = $string;
    }

    public function getPass($string)
    {
        $this->pass = $string;
    }

    private static function isValid()
    {
        
    }

}