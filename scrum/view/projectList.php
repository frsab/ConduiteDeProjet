<?php   
/*
include("../controller/connect.php");
include("../controller/functions.php");

if(logged_in()){
  
}
else{
  header("location:../view/login.php");
  exit();
}
//*/
?>


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
      font-size: 16px;"> <!-- Last access : 18 october 2015 &nbsp;  -->
      <a href="controller/logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
    </nav>   
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
          <li class="text-center">
            <img src="assets/img/scrum.png" class="user-image img-responsive"/>
          </li>

          <li  >
            <a  class="active-menu"  href="/scrum/?p=showProjects"><i class="fa fa-list fa-3x"></i> Project List</a>
          </li>
          <?php if($Project_s != null) { ?>
          <li>
            <a href="#"><i class="fa fa-sitemap fa-3x" ></i> Projects <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
              <?php foreach ($Project_s as $project) { ?>
                <li>
                  <a href="/scrum/?p=showUS&IDPROJECT=<?php echo $project->IDPROJECT; ?>"><?php echo $project->NAME; ?></a>
                </li>
              <?php } ?>
            </ul>
          </li>
          <?php } ?> 

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
                      <th>Project Name</th>
                      <th>Number of Collaborators</th>
                      <th>Status</th>
                      <th>Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php }else { ?>
                      <h3 class="text-center">Aucun Projet ajouté.</h3>
                    <?php } ?>
                    <?php foreach ($Project_s as $project) { ?>
                      <tr>   
                        <td><?php echo $project->NAME; ?></td>
                        <td><?php echo $project->NBCOLABORATORS; ?></td>
                        <td><?php echo $project->STATUS; ?></td>
                        <td><?php echo $project->DESCRIPTION; ?></td>
                        <td>
                          <a href="/scrum/?p=updateviewProject&IDPROJECT=<?php echo $project->IDPROJECT; ?>" class= "btn btn-default">
                            <i class=" fa fa-refresh "></i> 
                            Update
                          </a>
                        </td>
                        <td>
                          <a href="/scrum/?p=removeProject&IDPROJECT=<?php echo $project->IDPROJECT; ?>" class= "btn btn-danger">
                            <i class="fa fa-pencil"></i> 
                            Delete
                          </a>
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
<!-- MORRIS CHART SCRIPTS -->
<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="assets/js/morris/morris.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>


</body>
</html>
