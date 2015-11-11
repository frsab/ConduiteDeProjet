<?php

include "config/config.php";

class Model {

    protected $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname='.DB_NAME.';charset=utf8', DB_USERNAME, DB_PASSWORD);
    }

    function __destruct(){
        $this->db = null;
    }
}
