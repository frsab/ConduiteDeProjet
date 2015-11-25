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
  <link href="=assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
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
          <?php if($sprint_s != null) { ?>
          <li>
            <a href="#"><i class="fa fa-sitemap fa-3x" ></i> Sprints <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
              <?php foreach ($sprint_s as $sprint) { ?>
                <li>
                  <a href="/ConduiteDeProjet/?p=showSprintUs&IDUSER=<?php echo $_GET["IDUSER"]; ?>&IDPROJECT=<?php echo $sprint->IDPROJECT; ?>&IDSPRINT=<?php echo $sprint->IDSPRINT; ?>"><?php echo $sprint->SPRINT_ABSTRACT; ?></a>
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
           <h2>Planning</h2>   
           <h5>Now you have to make the planning of your project. </h5>
           <a href="/ConduiteDeProjet/?p=helpSprint&IDUSER=<?php echo $_GET["IDUSER"]; ?>&IDPROJECT=<?php echo $_GET["IDPROJECT"]; ?>" class="btn btn-info">How to make a planning</a>
            <!--   Kitchen Sink -->
       <div style="margin-top: 10px;">
        <div class="panel panel-default">

          <div class="panel-heading">
            Sprint list
          </div>
          <div class="panel-body">

            <div class="table-responsive"> 

             
              <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Sprint resume</th>

                  </tr>
                </thead>
                <tbody>
              <?php foreach ($sprint_s as $sprint) { ?>
                  <tr>
                      <td><?php echo $sprint->SPRINT_ABSTRACT; ?></td>
                      <td>
                        <a href="/ConduiteDeProjet/?p=updateUsSprint&IDUSER=<?php echo $_GET["IDUSER"]; ?>&IDSPRINT=<?php echo $sprint->IDSPRINT;?>&IDPROJECT=<?php echo $_GET["IDPROJECT"]; ?>" class= "btn btn-default"><i class=" fa fa-edit "></i> User stories</a>
                      </td>

                      <td>
                        <form method="POST" action="/ConduiteDeProjet/?p=ListTask&IDSPRINT=<?php echo $sprint->IDSPRINT;?>" enctype="multipart/form-data" role="form">
                        <input type="submit" class="btn btn-success" name="Tasks" value="Tasks"/>
                      </td>

                      <td>
                      <a href="/ConduiteDeProjet/?p=deleteSprint&IDUSER=<?php echo $_GET["IDUSER"]; ?>&IDPROJECT=<?php echo $_GET["IDPROJECT"]; ?>&IDSPRINT=<?php echo $sprint->IDSPRINT; ?>" class= "btn btn-danger">
                        <i class=" fa fa-pencil "></i> 
                        remove
                      </a>

                    </td>
                      <td>
                        <button class="btn btn-warning"><i class="fa "></i> Kanban</button>
                      </td>                     
                    </tr>
                <?php } ?>



                </tbody>
              </table>
           
            </div>

          </div>
        </div>
      </div>
      <!-- End  Kitchen Sink -->


           <div class="row">
            <div class="col-md-12">
              <a href="/ConduiteDeProjet/?p=addSprint&IDUSER=<?php echo $_GET["IDUSER"]; ?>&IDPROJECT=<?php echo $_GET["IDPROJECT"]; ?>" class="btn btn-success">Add new sprint</a>
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