<?php

require('vendor/autoload.php');

use PicoDb\Database;

$sql_conn = new Database([
    'driver' => 'mssql',
    'hostname' => 'DESKTOP-PM9RG6G\SQLEXPRESS',
    'username' => 'sa',
    'password' => '123456',
    'database' => 'mook',
]);

$mysql_conn = new Database([
    'driver' => 'mysql',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'att2000'
]);