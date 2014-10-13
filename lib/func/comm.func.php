<?php
/**
 *  一些公用的函数
 */

//统计item数量函数
function item_count(){
    $sql = "SELECT COUNT(item_id)  FROM `bd_item`";
    $row = mysql_fetch_array( mysql_query($sql) );
    return $row[0];
}

//获取某个分类下item数
function cate_item_count($cate_id){
    $sql = "SELECT COUNT(item_id)  FROM `bd_item` WHERE `item_cate_id` = $$cate_id ";
    $row = mysql_fetch_array( mysql_query($sql) );
    return $row[0];
}

//统计分类数量函数
function cate_count(){
    $sql = "SELECT COUNT(cate_id)  FROM `bd_cate`";
    $row = mysql_fetch_array( mysql_query($sql) );
    return $row[0];
}

//获取当前路径文件名
function get_filename($url=0){
    if($url=0){
        $url = $_SERVER['PHP_SELF'];
    }
    $filename = end(explode('/',$url));
    return $filename;
}

//根据id获取查询sql
function get_item_sql($id){
     $item_sql = "SELECT * FROM `bd_item`  WHERE item_id = $id";
     return $item_sql;
}