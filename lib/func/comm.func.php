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