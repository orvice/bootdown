<?php
/**
 * 前台item相关函数
 **/


//通过页码返回sql
function item_sql($page){

}

//item counter ++
function item_count_plus($item_id){
    global $dbc;
    //获取当前count
    $sql = "SELECT * FROM `bd_item` WHERE item_id='$item_id'";
    $query = $dbc->query($sql);
    $rs = $query->fetch_array();
    $nowc = $rs['item_count'];
    //++
    $nowc++;
    $sql = "UPDATE `pd`.`bd_item` SET `item_count` = '$nowc' WHERE  `item_id` = '$item_id';";
    $query = $dbc->query($sql);
    return $query;
}