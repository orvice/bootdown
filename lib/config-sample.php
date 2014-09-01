<?php
/*
 * Database connection info
 */

//Define DB Connection
define('DB_HOST','localhost');
define('DB_USER','user');
define('DB_PWD','pwd');
define('DB_DBNAME','db');

//站点名
$site_name = "下载站";

//版本
$version   ="0.1.1";

$conn = mysql_connect(DB_HOST,DB_USER,DB_PWD);
//$conn->query("set names utf-8");

//设置编码 防止中文乱码
mysql_query("SET NAMES 'utf8'",$conn);
if (!$conn)
{
    die('Could not connect: ' . mysql_error());
}
mysql_select_db(DB_DBNAME, $conn);

// some code