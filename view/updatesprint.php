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
            font-size: 16px;"><!--  Last access : 18 october 2015 &nbsp; --> 
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
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Backlog List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>US Description</th>
                                            <th>Priority</th>
                                            <th>Cost</th>
                                            
                                        </tr>
                                    </thead>
                                   <tbody>
                                   <?php $notAssignedUserStory=$this->sprintModel->select_us_NotAssigned_sprint($_GET['IDPROJECT']); ?>
                                        <?php foreach ($notAssignedUserStory as $sprint) { ?>
                                        <tr>
                                           <td><?php echo $sprint->IDUSERSTORY; ?></td>
                                          <td><?php echo $sprint->DESCRIPTION; ?></td>
                                          <td><?php echo $sprint->PRIORITY; ?></td>
                                          <td><?php echo $sprint->COST; ?></td>
                                          <td>
                                              <form role="form" name="moveUsToSprintUS" method="POST" action="/ConduiteDeProjet/?p=moveUsToSprintUS&IDSPRINT=<?php echo $_GET['IDSPRINT'];?>&IDUSERSTORY=<?php echo $sprint->IDUSERSTORY;?>">
                                                   <input type="submit" class="btn btn-success" name="addSprint" value="Move to Left"/>
                                              </form>
                                          </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Sprint List
                        </div>                   
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>US Description</th>
                                            <th>Priority</th>
                                            <th>Cost</th>
                                            
                                        </tr>
                                    </thead>
                                   <tbody>
     
                                   <?php  $assignedUserStory=$this->sprintModel->select_us_sprint_id($_GET['IDSPRINT'], $_GET['IDPROJECT']); ?>
                                        <?php foreach ($assignedUserStory as $sprint1) { ?>
                                        <tr>
                                          <td><?php echo $sprint1->IDUSERSTORY; ?></td>
                                          <td><?php echo $sprint1->DESCRIPTION; ?></td>
                                          <td><?php echo $sprint1->PRIORITY; ?></td>
                                          <td><?php echo $sprint1->COST; ?></td>
                                          <td>
                                              <form role="form" name="moveUsToNotAssignedUS" method="POST" action="/ConduiteDeProjet/?p=moveUsToNotAssignedUS&IDSPRINTNotAssignedUS=<?php echo $sprint1->IDSPRINT;?>&IDUSERSTORYNotAssignedUS=<?php echo $sprint1->IDUSERSTORY;?>">
                                                   <input type="submit" class="btn btn-success" name="addSprint" value="Move to Right"/>
                                              </form>
                                          </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- <div class= "row">
                <div style="margin-top: 10px;">
                <div class="col-md-6">
                    <button class="btn btn-info">Move the US selected to the other side</button>
                </div>
            </div>
            </div> -->
            <div class= "row">
                <div style="margin-top: 10px;">
                <div class="col-md-6">
                    <a href="/ConduiteDeProjet/?p=showSprint&IDUSER=<?php echo $_GET["IDUSER"]; ?>&IDPROJECT=<?php echo $_GET["IDPROJECT"]; ?>" class="btn btn-success">Back</a>
                </div>
                </div>
            </div>
        </div>
    </div>   

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->

</script>
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