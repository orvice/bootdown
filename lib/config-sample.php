<?php
/*
 * Site info and DB
 */



//站点名
$site_name = "下载站";

//版本
$version   ="0.1.1";

$conn = mysql_connect("localhost","pd","pd");

//设置编码 防止中文乱码
mysql_query("SET NAMES 'utf8'",$conn);
if (!$conn)
{
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("pd", $conn);

// some code
