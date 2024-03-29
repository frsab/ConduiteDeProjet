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
          <div class="col-md-12 col-sm-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                Sprint number X
              </div>
              <div class="panel-body">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#backlog" data-toggle="tab">Backlog</a>
                  </li>
                  <li class=""><a href="#tasks" data-toggle="tab">Tasks</a>
                  </li>
                  <li class=""><a href="#kanban" data-toggle="tab">Kanban</a>
                  </li>
                  <li class=""><a href="#gantt" data-toggle="tab">Gantt</a>
                  </li>
                  <li class=""><a href="#pert" data-toggle="tab">Pert</a>
                  </li>
                  <li class=""><a href="#burn" data-toggle="tab">Burn</a>
                  </li>
                  
                </ul>

                <div class="tab-content">
                  <div class="tab-pane fade active in" id="backlog">
                    <h4>Sprint Backlog</h4>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        US List
                      </div>
                      <div class="panel-body">
                        <div class="table-responsive">
                          <table class="table table-striped table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>US Description</th>
                                <th>Priority</th>
                                <th>Cost</th>
                                <th>Status</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($userstory_sprint_s as $userstory) { ?>
                            <tr <?php Switch ($userstory->ETAT){
                                    case stristr($userstory->ETAT, "TODO")    :       echo "class= \"danger\"";   break;
                                    case stristr($userstory->ETAT,"ON GOING") :       echo "class= \"warning\"";  break;
                                    case stristr($userstory->ETAT,"DONE")     :       echo "class= \"success\"";  break;
                                    default : break;
                                  } ?>>
                                <td><?php echo $userstory->DESCRIPTION; ?></td>
                                <td><?php echo $userstory->PRIORITY; ?></td>
                                <td><?php echo $userstory->COST; ?></td>
                                <td><?php echo $userstory->ETAT; ?></td>
                            </tr>

                            <?php } ?>

                              
                              
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>

                  </div>
                  <div class="tab-pane fade" id="tasks">
                    <h4>Sprint Tasks</h4>
                    <!--   Kitchen Sink -->
                    <div style="margin-top: 10px;">
                      <div class="panel panel-default">

                        <div class="panel-heading">
                          User stories list
                        </div>
                        <div class="panel-body">
                          <div class="table-responsive">             
                            <table class="table table-striped table-bordered table-hover">
                              <thead>
                                <tr>
                                  <th>Task abstract</th>
                                  <th>Cost Man/Day</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php foreach ($task_s as $task) { ?>
                                  <tr>
                                      <td><?php echo $task->DESCRIPTION; ?></td>
                                      <td><?php echo $task->Cost_Man_Day; ?></td>
                                  </tr>
                                <?php } ?>
                              </tbody>
                            </table>

                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="kanban">
                    <h4>Sprint Kanban</h4>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        Sprint Kanban
                      </div>
                      <div class="panel-body">
                        <div class="table-responsive">       
                          <table class="table table-striped table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>Task abstract</th>
                                <th>STATE</th>
                              </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($task_s as $task) { ?>
                                  <tr <?php Switch ($task->ETAT){
                                    case stristr($task->ETAT, "TODO")    :       echo "class= \"danger\"";   break;
                                    case stristr($task->ETAT,"ON GOING") :       echo "class= \"warning\"";  break;
                                    case stristr($task->ETAT,"DONE")     :       echo "class= \"success\"";  break;
                                    default : break;
                                  } ?>>
                                    <td><?php echo $task->DESCRIPTION; ?></td>
                                    <td><?php echo $task->ETAT; ?></td>
                                  </tr>
                                <?php } ?>
                            </tbody>
                          </table>

                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="gantt">
                    <h4>Sprint Gantt</h4>
                    <p>COMING SOON..</p>
                  </div>
                  <div class="tab-pane fade" id="pert">
                    <h4>Sprint Pert</h4>
                    <p>COMING SOON..</p>
                  </div>
                  <div class="tab-pane fade" id="burn">
                    <h4>Sprint Burn Down Chart</h4>
                    <p>COMING SOON..</p>
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
