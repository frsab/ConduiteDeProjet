<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Scrum Project Manager</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="../assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="../assets/css/font-awesome.css" rel="stylesheet" />
  <!-- MORRIS CHART STYLES-->
  <link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="../assets/css/custom.css" rel="stylesheet" />
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
      <a href="../controller/logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
    </nav>   
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
          <li class="text-center">
            <img src="../assets/img/scrum.png" class="user-image img-responsive"/>
          </li> 

          <li  >
            <a  href="../view/projectlist.php"><i class="fa fa-list fa-3x"></i> Project List</a>
          </li>

          <li  >
            <a   href="../view/backlog.php"><i class="fa fa-edit fa-3x"></i> Backlog</a>
          </li>


          <li  >
            <a class="active-menu" href="../view/planning.php"><i class="fa fa-calendar fa-3x"></i> Planning</a>
          </li>   

          <li>
            <a href="#"><i class="fa fa-sitemap fa-3x" ></i> Sprints <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
              <li>
                <a href="../view/sprint.php">Sprint 1</a>
              </li>
              <li>
                <a href="../view/sprint.php">Sprint 2</a>
              </li>
              <li>
                <a href="../view/sprint.php">Sprint 3</a>
              </li>
            </ul>
          </li> 
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
           <a href="../view/helpplanning.php" class="btn btn-info">How to make a planning</a>
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
                    <th>#</th>
                    <th>Sprint abstract</th>
                    <th>Total difficulty</th>
                  

                  </tr>
                </thead>

                <tbody>
                  <tr class="success">
                      <td>0</td>
                      <td>Sprint about techno</td>
                      <td>0</td>
                      <td>
                        <fieldset disabled="disabled">
                        <a href="../view/updatesprint.php" class= "btn btn-default"><i class=" fa fa-edit "></i> User stories</a>
                        </fieldset>
                      </td>
                      <td>
                        <fieldset disabled="disabled">
                        <a href="../view/sprinttasks.php" class="btn btn-success"><i class="fa "></i> Tasks</a>
                        </fieldset>
                      </td>
                      <td>
                        <fieldset disabled="disabled">
                        <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                        </fieldset>
                      </td>
                      <td>
                        <a href="../view/sprintkanban.php" class="btn btn-warning"><i class="fa "></i> Kanban</a>
                      </td>                     
                    </tr>
                  <tr class="success">
                      <td>1</td>
                      <td>Sprint about connexion</td>
                      <td>12</td>
                      <td>
                        <fieldset disabled="disabled">
                        <a href="../view/updatesprint.php" class= "btn btn-default"><i class=" fa fa-edit "></i> User stories</a>
                        </fieldset>
                      </td>
                      <td>
                        <fieldset disabled="disabled">
                        <a href="../view/sprinttasks.php" class="btn btn-success"><i class="fa "></i> Tasks</a>
                        </fieldset>
                      </td>
                      <td>
                        <fieldset disabled="disabled">
                        <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                        </fieldset>
                      </td>
                      <td>
                        <a href="../view/sprintkanban.php" class="btn btn-warning"><i class="fa "></i> Kanban</a>
                      </td>                     
                    </tr>
                    <tr class="warning">
                      <td>2</td>
                      <td>Sprint about backlog</td>
                      <td>10</td>           
                      <td>
                          <fieldset disabled="disabled">
                          <a href="../view/updatesprint.php" class= "btn btn-default"><i class=" fa fa-edit "></i> User stories</a>
                          </fieldset>    
                      </td>
                      <td>
                        <fieldset disabled="disabled">
                        <a href="../view/sprinttasks.php" class="btn btn-success"><i class="fa "></i> Tasks</a>
                        </fieldset>
                      </td>
                      <td>
                        <fieldset disabled="disabled">
                        <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                        </fieldset>
                      </td>
                      
                      <td>
                        <a href="../view/sprintkanban.php" class="btn btn-warning"><i class="fa "></i> Kanban</a>
                      </td>
                    </tr>
                    <tr class="danger">
                      <td>3</td>
                      <td>Sprint about planning</td>
                      <td>14</td>
                      <td>
                        <a href="../view/updatesprint.php" class= "btn btn-default"><i class=" fa fa-edit "></i> User stories</a>
                      </td>
                      <td>
                        <a href="../view/sprinttasks.php" class="btn btn-success"><i class="fa "></i> Tasks</a>
                      </td>
                     <td>
                        <button class="btn btn-danger"><i class="fa fa-trash"></i> Delete</button>
                      </td>
                      <td>
                        <a href="../view/sprintkanban.php" class="btn btn-warning"><i class="fa "></i> Kanban</a>
                      </td>                     
                    </tr>
                </tbody>
              </table>
           
            </div>

          </div>
        </div>
      </div>
      <!-- End  Kitchen Sink -->


           <div class="row">
            <div class="col-md-12">
              <a href="../view/addsprint.php" class="btn btn-success">Add new sprint</a>
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
<script src="../assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="../assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="../assets/js/jquery.metisMenu.js"></script>
<!-- MORRIS CHART SCRIPTS -->
<script src="../assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="../assets/js/morris/morris.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="../assets/js/custom.js"></script>


</body>
</html>