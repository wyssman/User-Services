<?php

return [

  'app' => [
    'url' => 'http://localhost',
    'hash' => [
      'algorithm' => PASSWORD_BCRYPT,
      'cost' => 10
    ]
  ],

  'db' => [
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'name' => 'progroll',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => ''
  ],

  'auth' => [
    'session_name' => 'user_id',
    'remeber_cookie' => 'user_remember'
  ],

  'email' => [
    'smtp_auth' => true,
    'smtp_secure' => 'tls',
    'host' => 'smtp.gmail.com',
    'username' => 'thesupersimon@gmail.com',
    'password' => '******',
    'port' => 587,
    'html' => true
  ],

  'twig' => [
    'debug' => true
  ],

  'csrf' => [
    'session' => 'csrf_token'
  ]

];
