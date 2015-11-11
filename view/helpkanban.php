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


        </ul>

      </div>

    </nav>  
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
      <div id="page-inner">
        <div class="row">
          <div class="col-md-12">
            <h2>Kanban Help</h2>   
            <h5>There is a little tutorial about how to manage your sprint kanban </h5>

            <h2>French tutorial</h2>
            <h3>Introduction</h3>

            Maintenant que votre liste de tâche est terminée, celle ci apparaît dans votre kanban.
            Le kanban est une liste / tableau permettant de gérer l'état des tâches de votre sprint.
            Pour rappel une tâche doit être réalisée par un seul développeur. Elle NE PEUT PAS être
            prise par plusieurs. Le kanban peut être géré par le chef de projet seul, ou par l'ensemble 
            de l'équipe de développement.

            <h3>Qu'est-ce que l'état d'une tâche ? </h3>

            Une tâche peut se trouver dans un des 3 états suivants : </br></br>

            - TODO : la tâche n'est pas encore attribuée ni commencée. Elle peut et doit donc être faite
            par un développeur,</br></br>

            - ON GOING : la tâche est déjà attribuée à un développeur qui est en train de la réaliser. 
            Elle donc bloquée et ne peut pas être attribuée à un autre dev. La tâche est dite "en cours"
            elle n'est pas donc pas encore terminée,</br></br>

            - DONE : la tâche est considérée comme terminée. Il n'y a plus besoin de la donner à un dev.</br></br>


            <h3>Qui, quand ?</h3>

            Comme dit dans l'introduction il peut exister deux types d'organisation pour le Kanban.</br></br>

            1) La première organisation consiste à laisser au chef de projet le soin d'attribuer toutes les tâches
            aux développeurs. Ceux-ci sont alors en charges de rendre des comptes quant à l'avancement de l'état de
            la tâche qui leurs est attribuée. Le chef de projet a alors une vue d'ensemble et en "temps réel" de 
            l'avancement du sprint. Cependant comme c'est lui qui attribue les tâches cela nécessite une bonne
            connaissance de son équipe quand à leurs capacités à réaliser au plus vite telle ou telle tâche. 
            De plus en fonction de la taille de l'équipe cela peut demander beaucoup de temps au chef.</br></br>

            2) La seconde organisation consiste à laisser toute l'équipe de développement gérer le Kanban.
            C'est-à-dire que chaque développeur à accès à la liste ou au tableau Kanban du sprint. Et surtout
            elle à accès au MEME tableau afin d'éviter tout problème. Cette organisation laisse libre les 
            développeurs sur le choix des tâches qu'ils réalisent. Chaque dev prend une tâche "TODO" et la place
            dans l'état "ON GOING" jusqu'à qu'il l'ait terminée. Il peut ensuite la placer dans l'état "DONE" 
            et prendre une nouvelle tâche. La loi qui s'applique ici est celle du premier arrivé, premier servi.</br></br>

            Il n'existe pas de solution idéale. Elle dépend du type de projet et du type d'équipe de développement.
            Cependant l'organisation qui semble fonctionner le mieux et qui est généralement appliquée est une organisation
            se situant au milieu entre les deux. Avec le chef de projet attribuant certaines tâches et laissant libre le
            choix pour d'autres.</br></br>

            <h3>Remarques importantes</h3>

            1) Un développeur ne peut avoir qu'UNE ET UNE SEULE tâche dans l'état "ON GOING". </br></br>

            2) Lorsque plusieurs personne ont accès au kanban il est important de régulièrement consulter celui-ci.
            Car même si deux tâches sont proches et peuvent s'enchaîner dans le temps il est possible qu'elles soient
            séparées et donc ne soient pas attribuées au même développeur. Il faut absolument éviter que deux développeurs
            travaillent sur la même tâche. 

            Vous savez maintenant comment gérer le Kanban de votre sprint. Nous vous expliquerons dans la suite à quoi sert
            un diagramme de Pert et comment le réaliser.

            <h2>English tutorial</h2>

            English tutorial is growing, coming soon.. </br></br>

            <a href="../view/planning.php" class="btn btn-success">Back</a>

          </div>
        </div>   
      </div>
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