<?php
/*
 * Database connection info
 */

//Define DB Connection
define('DB_HOST','localhost');
define('DB_USER','user');
define('DB_PWD','pwd');
define('DB_DBNAME','db');
define('DB_CHARSET','utf8');

//Define system Path
define('BD_PATH','bootdown/');

//站点名
$site_name = "下载站";

//版本
$version   ="0.1.1";

 //Using Mysqli
$dbc = new mysqli(DB_HOST,DB_USER,DB_PWD,DB_DBNAME);
$dbc->query("SET NAMES utf8");