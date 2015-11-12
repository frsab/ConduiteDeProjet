<?php

include "config/config.php";

class Model {

    private static $instance=null;
    protected $db;

    private function __construct() {
        try{
        	$this->db = new PDO('mysql:host=localhost;dbname='.DB_NAME.';charset=utf8', DB_USERNAME, DB_PASSWORD);
        }catch(PDOException $e){
        	die($e->getMessage());
        }

    }

    public static  function getInstance(){
    	if(!isset(self::$instance)){
    		self::$instance= new Model();
    	}
    	return self::$instance;
    }

    function __destruct(){
        $this->db = null;
    }
}
