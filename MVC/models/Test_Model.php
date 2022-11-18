<?php

class Test_Model extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function getData(){
        return $this->db->runQuery("SELECT * from users");
    }
}