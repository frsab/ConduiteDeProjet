<?php
session_start(); 
require_once('model/userModel.php');


class UserController {

    private $model;
    

    function __construct(){
       $this->model = new User();
      
    }
    
    public function home(){   
        include "view/home.php";
    }

    public function registerView(){
        include "view/registration.php";
    }

    public function connected(){      
        if($this->model->logged_in()){
            header("location:/ConduiteDeProjet/?p=showProjects");
            exit();
        }
    }
    public function register($data){
    $error="";
    $USERNAME=$data['username'];
    $MAIL=$data['email'];
    $PASSWORD=$data['password'];
    $PASSWORDCONFIRM=$data['passwordConfirm'];

    
    $DATE=date("F,d Y");
    
    if(strlen($USERNAME)<5){
        $error ="User name is too short.";
        header("location:/ConduiteDeProjet/?p=registerView&error=".$error);
    }
    else if(strlen($PASSWORD)<8){
        $error="Password must be longer than 8 characters.";
        header("location:/ConduiteDeProjet/?p=registerView&error=".$error);
    }
    else if($PASSWORD !== $PASSWORDCONFIRM){
        $error="Password does not match.";
        header("location:/ConduiteDeProjet/?p=registerView&error=".$error);
    }

    else if($this->model->name_project_exists($USERNAME)){
        $error="User name already exists.";
        header("location:/ConduiteDeProjet/?p=registerView&error=".$error);
    }
    else if($this->model->email_exists($MAIL)){
        $error="Email already exists.";
        header("location:/ConduiteDeProjet/?p=registerView&error=".$error);
    }
    else{
        $PASSWORD = md5($PASSWORD);
        echo $this->model->insert($USERNAME, $MAIL, $PASSWORD, $DATE);
        
        $IDUSER= $this->model->selectIdUserByName($USERNAME);
        
        //session_start();
        $_SESSION['username'] =$USERNAME;
        header("Location: /ConduiteDeProjet/?p=showProjects&IDUSER=".$IDUSER['iduser']);
}
}

    public function loginView(){
        include "view/login.php";
    }

    public function login($data){
    if($this->model->logged_in()){
        echo "login  logged(in)"; 
        header("location:/ConduiteDeProjet/?p=showProjects");
        exit();
    }
    else{
        
        $error="";
        if (isset($data['submit'])) {
            
            $username=$data['username'];
            $password=$data['password'];
            $checkBox=isset($data['keep']);
            
            if($this->model->name_project_exists($username)){
                
                $retrievepassword=$this->model->selectPassUserByName($username);
                
                if(md5($password) !== $retrievepassword['PASSWORD']){
                    //echo "name_project_exists pass incorect";
                    $error ="Password is incorrect";
                    header("location:/ConduiteDeProjet/?p=loginView&error=".$error);
                }
                else{
                        //echo "name_project_exists pass correct";
                        session_start();    
                        $_SESSION['username'] =$username;
                        if($checkBox =="on"){
                            setcookie("username",$username,time()+3600);
                         }
                    
                    $IDUSER= $this->model->selectIdUserByName($username);
                    header("location:/ConduiteDeProjet/?p=showProjects&IDUSER=".$IDUSER['iduser']);
                }
            }       
        
            else{
                echo "This user name does not exists.";
                $error="This user name does not exists.";
                header("location:/ConduiteDeProjet/?p=loginView&error=".$error);
                }
        
        }
    }
    }
        
    public function logout(){
        setcookie("nameproject",'',time()-3600);  
        session_destroy();
        header("location:/ConduiteDeProjet/?p=home");
    }

    public function authentify(){
        include "view/login.php";
    }
    
    
}
