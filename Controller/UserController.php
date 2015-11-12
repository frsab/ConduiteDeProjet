<?php

include 'model/userModel.php';
//include("config/connect.php");
include 'Controller.php';

class UserController extends Controller{

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
    //    $error=""
    $USERNAME=$data['username'];
    $MAIL=$data['emailproject'];
    $PASSWORD=$data['password'];
    $PASSWORDCONFIRM=$data['passwordConfirm'];

    $DATE=date("F,d Y");
    /*
    /if(strlen($username)<3){
        $error ="User name is too short.";
    }
    else if(strlen($password)<6){
        $error="Password must be longer than 8 characters.";
    }
    else if($password !== $passwordconfirm){
        $error="Password does not match.";
    }

    else if(name_project_exists($username,$con)){
        $error="User name already exists.";
    }
    else if(email_exists($emailproject,$con)){
        $error="Email already exists.";
    }*/
    //else{
        $PASSWORD = md5($PASSWORD);
        echo $this->model->insert($USERNAME, $MAIL, $PASSWORD, $DATE);
        session_start();
        //ADD LOCATION ...
        header("Location: /ConduiteDeProjet/?p=showProjects");
/*
        if(mysqli_query($con,$insertQuery)){

            $error="You are succefully registred.";
            
        }*/
}

    public function loginView(){
        include "view/login.php";
    }

	public function login($data){
    /*if($this->model->logged_in()){
        header("location:/ConduiteDeProjet/?p=showProjects");
        exit();
    }
    else{
        $error="";
        if (isset($data['submit'])) {*/
            $username=$data['username'];
            $password=$data['password'];
            $checkBox=isset($data['keep']);
            /*if(name_project_exists($username,$con)){
                $result=mysqli_query($con,"SELECT PASSWORD FROM user WHERE USERNAME='$username'");
                $retrievepassword=mysqli_fetch_assoc($result);
                if(md5($password) !== $retrievepassword['PASSWORD']){
                    $error ="Password is incorrect";
                }
            else{
                $_SESSION['username'] =$username;
                if($checkBox =="on"){
                    setcookie("username",$username,time()+3600);
                    }*/
            
            $IDUSER= $this->model->selectIdUserByName($username);
            header("location:/ConduiteDeProjet/?p=showProjects&IDUSER=".$IDUSER['iduser']);
            }
        //}       
        /*
        else{
            $error="This user name does not exists.";
            }
        //}
        }
    }*/
		
	public function logout(){  
        include "view/logout.php";
    }

	public function authentify(){
        include "view/login.php";
    }
	
}
