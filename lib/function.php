<?php
/**
 * Created by PhpStorm.
 * User: orvice
 * Date: 14-7-13
 * Time: 下午5:29
 */
function test_sand(){
    echo 'Test Sand';
}

function load_db_conn(){
    require_once 'config.php';
}

function add_item($title,$cate_id,$url,$size,$txt,$count,$date){
    $item_add_sql = 'INSERT INTO bd_itme (item_title,item_cate_id,item_url,item_size,item_txt,item_count,item_date)
                   VALUES ($title,$cate_id,$url,$size,$txt,$count,$date)';
    $query = mysql_query($item_add_sql);

}

