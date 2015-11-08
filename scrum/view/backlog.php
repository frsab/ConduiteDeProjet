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
            <a  href="/scrum/?p=showProjects"><i class="fa fa-list fa-3x"></i> Project List</a>
          </li>

          <li  >
            <a class="active-menu"  href="/scrum/?p=showUS&IDPROJECT=<?php echo $_GET["IDPROJECT"]; ?>"><i class="fa fa-edit fa-3x"></i> Backlog</a>
          </li>

          <li  >
            <a href="view/planning.php"><i class="fa fa-calendar fa-3x"></i> Planning</a>
          </li>   
        </ul>

      </div>

    </nav>  
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
      <div id="page-inner">


        <div class="row">
          <div class="col-md-12">
           <h2>Backlog</h2>   
           <h5>You must begin by your backlog project. </h5>

           <a href="view/helpbacklog.php" class="btn btn-info">How to make a backlog</a>

         </div>
       </div> 
       <!--   Kitchen Sink -->
       <div style="margin-top: 10px;">
        <div class="panel panel-default">

          <div class="panel-heading">
            User stories list
          </div>
          <div class="panel-body">

            <div class="table-responsive"> 

              <?php if($userstory_s != null) { ?>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>US Description</th>
                    <th>Priority</th>
                    <th>Cost</th>
                    <th>Status</th>

                  </tr>
                </thead>

                <tbody>
                  <?php }else { ?>
                  <h3 class="text-center">Aucune UserStory ajoutée.</h3>
                  <?php } ?>

                  <?php foreach ($userstory_s as $userstory) { ?>
                  <tr>   
                    <td><?php echo $userstory->IDUSERSTORY; ?></td>
                    <td><?php echo $userstory->DESCRIPTION; ?></td>
                    <td><?php echo $userstory->PRIORITY; ?></td>
                    <td><?php echo $userstory->COST; ?></td>
                    <td><?php echo $userstory->ETAT; ?></td>
                    <td>
                      <a href="/scrum/?p=updateview&IDPROJECT=<?php echo $_GET["IDPROJECT"]; ?>&IDUSERSTORY=<?php echo $userstory->IDUSERSTORY; ?>" class= "btn btn-default">
                        <i class=" fa fa-refresh "></i> 
                        Update
                      </a>
                    </td>
                    <td>
                      <a href="/scrum/?p=remove&IDPROJECT=<?php echo $_GET["IDPROJECT"]; ?>&IDUSERSTORY=<?php echo $userstory->IDUSERSTORY; ?>" class= "btn btn-danger">
                        <i class=" fa fa-pencil "></i> 
                        remove
                      </a>

                    </td>
                  </tr>
                  <?php } ?>
                  <?php if($userstory_s != null) { ?>
                </tbody>
              </table>
              <?php } ?>
            </div>

          </div>
        </div>
      </div>
      <!-- End  Kitchen Sink -->
      <div class="row">

        <div class="col-md-12">
          <a href="/scrum/?p=new&IDPROJECT=<?php echo $_GET["IDPROJECT"]; ?>" class="btn btn-success">Add an user story</a>

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