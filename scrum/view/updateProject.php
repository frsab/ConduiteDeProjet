<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Scrum Project Manager</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Home</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 18 october 2015 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="assets/img/scrum.png" class="user-image img-responsive"/>
                    </li>
                
                    
                    <li>
                        <a  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>

                     <li  >
                        <a  href="registration.html"><i class="fa fa-laptop fa-3x"></i> Registration </a>
                    </li>

                     <li  >
                        <a  href="login.html"><i class="fa fa-bolt fa-3x"></i> Login </a>
                    </li>   

                     <li  >
                        <a class="active-menu"  href="projectList.html"><i class="fa fa-table fa-3x"></i> Project List</a>
                    </li>

                    <li  >
                        <a  href="backlog.html"><i class="fa fa-bars fa-3x"></i> Backlog</a>
                    </li>

                    <li  >
                        <a href="planning.html"><i class="fa fa-edit fa-3x"></i> Planning</a>
                    </li>   
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Update a project
                        </div>
                        <div class="panel-body">
                            <div class="row">
                              <div style="margin-top: 10px;">
                                <div class="col-md-6">
                                    <form role="form" name="updateProject" method="POST" action="/scrum/?p=updateProject">
                                        <input type="hidden" name="IDPROJECT" value="<?php echo $_GET["IDPROJECT"]; ?>"/>
                                        <div class="form-group">
                                            <label>Project Name</label>
                                            <input class="form-control" placeholder="Please enter your project Name" name="projectName" value="<?php echo htmlentities($Project->NAME); ?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Number of colaborators</label>
                                            <input class="form-control" placeholder="Please enter the number of colaborator" name="nbColaborators" value="<?php echo htmlentities($Project->NBCOLABORATORS); ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Project Status</label>
                                            <input class="form-control" placeholder="Please enter your project status" name="status" value="<?php echo htmlentities($Project->IDUSER); ?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" placeholder="Please enter a description" rows="5" name= "description" value="<?php echo htmlentities($Project->DESCRIPTION); ?>"></textarea>
                                        </div>        
                                        <div class= "row">
                                            <div class="col-md-6">
                                                <input type="submit" class="btn btn-primary" name="update" value="Update"/>
                                                <input type="reset" class="btn btn-primary" name="updateCancel" value="Cancel"/>                                        
                                            </div>
                                        </div>
                                    </form>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
             
        <!-- /. PAGE INNER  -->
        </div>
    <!-- /. PAGE WRAPPER  -->
    </div>   
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>