<?php
/**
 * Created by PhpStorm.
 * User: orvice
 * Date: 14/9/24
 * Time: 下午11:39
 */

class item {

    public $item_id;
    private $dbc;

    function  __construct($id){
        global $dbc;
        $this->item_id = $id;
        $this->dbc = $dbc;
    }

    //获取count
    function get_item_count(){
        $sql = "SELECT * FROM `bd_item` WHERE `item_id`= '$this->item_id'  ";
        $query = $this->dbc->query($sql);
        $rs=$query->fetch_all();
        if($rs){
            $count = $rs['item_count'];
            return  $count;
        }
        else{
            return 0;
        }

    }

    //浏览数count ++
    function item_count_plus(){
        $count = $this->get_item_count();
        $count++;
        $sql   = "UPDATE `bd_item` SET `item_count`='$count' WHERE `item_id`='$this->item_id'";
        $query = $this->dbc->query($sql);

    }

} 