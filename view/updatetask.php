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
                <a class="navbar-brand" href="#">SPM</a> 
            </div>
            <div style="color: white;
            padding: 15px 50px 5px 50px;
            float: right;
            font-size: 16px;"> <!-- Last access : 18 october 2015 &nbsp; --> 
            <a href="/ConduiteDeProjet/?p=logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/scrum.png" class="user-image img-responsive"/>
                    </li>
                    <li  >
                        <a  href="/ConduiteDeProjet/?p=showProjects&IDUSER=<?php echo $_GET["IDUSER"]; ?>"><i class="fa fa-list fa-3x"></i> Project List</a>
                    </li>

                    <li  >
                        <a   href="/ConduiteDeProjet/?p=showUS&IDUSER=<?php echo $_GET["IDUSER"]; ?>&IDPROJECT=<?php echo $_GET["IDPROJECT"]; ?>"><i class="fa fa-edit fa-3x"></i> Backlog</a>
                    </li>


                    <li  >
                        <a class="active-menu" href="/ConduiteDeProjet/?p=showSprint&IDUSER=<?php echo $_GET["IDUSER"]; ?>&IDPROJECT=<?php echo $_GET["IDPROJECT"]; ?>"><i class="fa fa-calendar fa-3x"></i> Planning</a>
                    </li>   
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
                            Update a Task
                        </div>
                        <form role="form" name="addTask" method="POST" action="/ConduiteDeProjet/?p=validateUpdate&IDUSER=<?php echo $_GET["IDUSER"]; ?>&IDSPRINT=<?php echo $_GET["IDSPRINT"];?>&IDPROJECT=<?php echo $_GET["IDPROJECT"]; ?>">
                            <div class="panel-body">
                                <div class="row">
                                    <div style="margin-top: 10px;">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="hidden" name="IDSPRINT" value="<?php echo $_GET["IDSPRINT"];?>"/>
                                                <input type="hidden" name="IDUSER" value="<?php echo $_GET["IDUSER"];?>"/>
                                                <input type="hidden" name="IDPROJECT" value="<?php echo $_GET["IDPROJECT"];?>"/>
                                                <input type="hidden" name="IDTASK" value="<?php echo $task->IDTASK;?>"/>
                                                <label>Task Abstract</label>
                                                <input class="form-control" placeholder="Please re-enter your abstract task" 
                                                    name="DESCRIPTION" 
                                                        value="<?php echo htmlentities($task->DESCRIPTION); ?>"/>
                                            </div>
                                            <div class="form-group">
                                                <label>Task Cost</label>
                                                <input class="form-control" placeholder="Please re-enter the task cost" 
                                                    name="COST" 
                                                        value="<?php echo htmlentities($task->Cost_Man_Day); ?>"/>
                                            </div>                                
                                            <div class= "row">
                                                <div class="col-md-6">
                                                    <input type="submit" class="btn btn-success" name="updateTask" value="Update"/>
                                                    <a href="/ConduiteDeProjet/?p=ListTask&IDUSER=<?php echo $_GET["IDUSER"]; ?>&IDSPRINT=<?php echo $_GET["IDSPRINT"];?>&IDPROJECT=<?php echo $_GET["IDPROJECT"]; ?>" class="btn btn-danger">Cancel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
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
