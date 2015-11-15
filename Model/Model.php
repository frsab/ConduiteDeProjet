<?php
require_once("config/config.php");
//require_once("model/sprintModel.php");

class Model {

    private static $instance=null;
    public $db;
    //public $sprintModel;


    public function __construct() {
        try{
        	$this->db = new PDO('mysql:host=localhost;dbname='.DB_NAME.';charset=utf8', DB_USERNAME, DB_PASSWORD);
        }catch(PDOException $e){
        	die($e->getMessage());
        }
    //    $this->sprintModel=new SprintModel($this);
        //$this->sprintController=new SprintController();

    }
public static  function getInstance(){
        if(!isset(self::$instance)){
            self::$instance= new Model();
        }
        return self::$instance;
    }

   
    function __destruct(){
        $this->db = null;
  //      $this->sprintModel=null;
    }
}
