<?php
require_once("config/config.php");
require_once('model/sprintModel.php');
require_once('model/taskModel.php');
//require_once("model/sprintModel.php");

class Model {

    private static $instance=null;
    public $db;
    public $sprintModel;
    public $taskModel;


    public function __construct() {
        try{
        	$this->db = new PDO('mysql:host=localhost;dbname='.DB_NAME.';charset=utf8', DB_USERNAME, DB_PASSWORD);
        }catch(PDOException $e){
        	die($e->getMessage());
        }
        $this->sprintModel=new SprintModel($this->db);
        $this->taskModel=new TaskModel($this->db);

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
