<?php
/**
 * User Class
 */


class user {

    public $uid;
    private $dbc;

    function __construct($uid){
        global $dbc;
        $this->uid = $uid;
        $this->dbc = $dbc;
    }
} 