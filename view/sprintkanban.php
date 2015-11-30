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


        </ul>

      </div>

    </nav>  
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
      <div id="page-inner">
        <div class="row">
          <div class="col-md-12">
            <h2>Kanban</h2>   
            <a href="/ConduiteDeProjet/?p=showHelpKanban&IDUSER=<?php echo $_GET["IDUSER"]; ?>&IDPROJECT=<?php echo $_GET["IDPROJECT"]; ?>&IDSPRINT=<?php echo $_GET["IDSPRINT"]; ?>" class="btn btn-info">How to manage your kanban</a>
            <div style="margin-top: 10px;">
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
                          <th>Status</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php if (is_array($task_s) || is_object($task_s)) ?>
                          <?php { ?>
                          <?php foreach ($task_s as $task) { ?>
<<<<<<< HEAD
                            <tr id= "<?php echo $task->IDTASK; ?>" class="success">
=======
                            <tr <?php Switch ($task->ETAT){
                              case stristr($task->ETAT, "TODO")    :       echo "class= \"danger\"";   break;
                              case stristr($task->ETAT,"ON GOING") :       echo "class= \"warning\"";  break;
                              case stristr($task->ETAT,"DONE")     :       echo "class= \"success\"";  break;
                              default : break;
                            } ?>>
>>>>>>> refs/remotes/origin/devMS
                              <td><?php echo $task->DESCRIPTION; ?></td>
                              <td>
                                <div class="form-group">
                                  <div class="radio" >
                                    <label>
<<<<<<< HEAD
                                      <input type="radio" name="task1" id="optionsRadios1" value="option1" onclick="changeToRed()" />Todo
=======
                                      <input type="radio" name="<?php echo $task->IDTASK; ?>" id="optionsRadios1" value="option1" onclick="changeToRed()" <?php if(strcasecmp($task->ETAT, "TODO")==0)echo " checked" ?> />Todo
>>>>>>> refs/remotes/origin/devMS
                                    </label>
                                  </div>
                                  <div class="radio">
                                    <label>
<<<<<<< HEAD
                                      <input type="radio" name="task1" id="optionsRadios2" value="option2" onclick="changeToOrange()" />On going
=======
                                      <input type="radio" name="<?php echo $task->IDTASK; ?>" id="optionsRadios2" value="option2" onclick="changeToOrange()" <?php if(strcasecmp($task->ETAT, "ON GOING")==0)echo " checked" ?> />On going
>>>>>>> refs/remotes/origin/devMS
                                    </label>
                                  </div>
                                  <div class="radio">
                                    <label>
<<<<<<< HEAD
                                      <input type="radio" name="task1" id="optionsRadios3" value="option3" onclick="changeToGreen()" checked />Done
                                    </label>
                                  </div>
                                </div>
                              </td> 
                            </tr>

                         <?php } ?>
                       <?php } ?>
                        

                        <tr id="tr1" class="success">
                          <td>Task 1</td>
                          <td>
                            <div class="form-group">
                              <div class="radio" >
                                <label>
                                  <input type="radio" name="task1" id="optionsRadios1" value="option1" onclick="changeToRed()" />Todo
                                </label>
                              </div>
                              <div class="radio">
                                <label>
                                  <input type="radio" name="task1" id="optionsRadios2" value="option2" onclick="changeToOrange()" />On going
                                </label>
                              </div>
                              <div class="radio">
                                <label>
                                  <input type="radio" name="task1" id="optionsRadios3" value="option3" onclick="changeToGreen()" checked />Done
                                </div>
                              </div>
                            </td> 
                        </tr>
                          <tr class="warning">
                            <td>Task 2</td>
                            <td>
                              <div class="form-group">
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="task2" id="optionsRadios1" value="option1"  />Todo
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="task2" id="optionsRadios2" value="option2" checked />On going
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="task2" id="optionsRadios3" value="option3"/>Done
                                  </label>
                                </div>
                              </div>

                            </td>          

                          </tr>
                          <tr class="danger">
                            <td>Task 3</td>
                            <td>
                              <div class="form-group">
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="task3" id="optionsRadios1" value="option1" checked/> Todo
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="task3" id="optionsRadios2" value="option2"/>On going
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="task3" id="optionsRadios3" value="option3"   />Done
                                  </label>
                                </div>
                              </div>
                            </td> 
                          </tr>
                          <tr class="danger">
                            <td>Task 4</td>
                            <td>
                              <div class="form-group">
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="task4" id="optionsRadios1" value="option1" checked/> Todo
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="task4" id="optionsRadios2" value="option2"/>On going
                                  </label>
                                </div>
                                <div class="radio">
                                  <label>
                                    <input type="radio" name="task4" id="optionsRadios3" value="option3"   />Done
                                  </label>
                                </div>
                              </div>
                            </td> 
                          </tr>
=======
                                      <input type="radio" name="<?php echo $task->IDTASK; ?>" id="optionsRadios3" value="option3" onclick="changeToGreen()" <?php if(strcasecmp($task->ETAT, "DONE")==0)echo " checked" ?> />Done
                                    </label>
                                  </div>
                                </div>
                              </td> 
                            </tr>

                         <?php } ?>
                       <?php } ?>
>>>>>>> refs/remotes/origin/devMS
                        </tbody>
                      </table>

                    </div>

                  </div>
                </div>
                <div class= "row">
                  <div style="margin-top: 10px;">
                    <div class="col-md-6">
                      <a href="/ConduiteDeProjet/?p=showSprint&IDUSER=<?php echo $_GET["IDUSER"]; ?>&IDPROJECT=<?php echo $_GET["IDPROJECT"]; ?>" class="btn btn-success">Back</a>
                    </div>
                  </div>
                </div>
              </div>





            </div>

          </div>   

          <!-- /. WRAPPER  -->
          <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
          

          </script>
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
