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
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
                        <a  class="active-menu"  href="projectList.html"><i class="fa fa-table fa-3x"></i> Project List</a>
                    </li>

                    <li  >
                        <a   href="backlog.html"><i class="fa fa-bars fa-3x"></i> Backlog</a>
                    </li>


                     <li  >
                        <a  href="planning.html"><i class="fa fa-edit fa-3x"></i> Planning </a>
                    </li> 
                 	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Your Project List</h2>   
                        <h5>You can see all your scrum projects on the list below.</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
        
                <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Projects List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <?php if($Project_s != null) { ?>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Project Name</th>
                                            <th>Number of Collaborators</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php }else { ?>
                                        <h3 class="text-center">Aucun Projet ajouté.</h3>
                                        <?php } ?>

                                        <?php foreach ($Project_s as $project) { ?>
                                        <tr>   
                                            <td><?php echo $project->IDPROJECT; ?></td>
                                            <td><?php echo $project->NAME; ?></td>
                                            <td><?php echo $project->NBCOLABORATORS; ?></td>
                                            <td><?php echo $project->DESCRIPTION; ?></td>
                                            <td>
                                              <a href="/scrum/?p=updateviewProject&IDPROJECT=<?php echo $project->IDPROJECT; ?>" class= "btn btn-default">
                                                  <i class=" fa fa-refresh "></i> 
                                                  Update
                                              </a>
                                            </td>
                                            <td>
                                                      <a href="/scrum/?p=removeProject&IDPROJECT=<?php echo $project->IDPROJECT; ?>" class= "btn btn-default">
                                                  <i class=" fa fa-refresh "></i> 
                                                  remove
                                              </a>
                                    
                                            </td>

                                            <td>
                                                <button class="btn btn-danger" onclick="/scrum/?p=removeProject&id=<?php echo $project->IDPROJECT; ?>">
                                                    <i class="fa fa-pencil"></i> 
                                                    Delete
                                                </button>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                        <?php if($Project_s != null) { ?>
                                    </tbody>
                                    </table>
                                    <?php } ?>

                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                <div class="row">
                    <div class="col-md-12">
                        <a href="/scrum/?p=newProject" class="btn btn-success">Add a project</a>
                    </div>
                </div> 
                
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
