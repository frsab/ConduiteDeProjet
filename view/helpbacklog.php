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
            <a class="active-menu"  href="../view/backlog.php"><i class="fa fa-edit fa-3x"></i> Backlog</a>
          </li>

          <li  >
            <a href="../view/planning.php"><i class="fa fa-calendar fa-3x"></i> Planning</a>
          </li>    
        </ul>
        
      </div>
      
    </nav>  
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
      <div id="page-inner">
        <div class="row">
          <div class="col-md-12">
           <h2>Backlog Help</h2>   
           <h5>There is a little tutorial about how to make a backlog. </h5>
           
           <h2>French tutorial</h2>
           <h3>Introduction</h3>

           Le backlog est la pièce centrale de la méthode agilde Scrum. Il contient, sous forme de liste, les choses que le client veut que 
           l'équipe réalise. C'est en quelque sorte une « liste d'exigences, de caractéristiques» que devra avoir ou fournir le produit final. 
           Le backlog produit est maintenu par le product owner. C'est lui, le product owner qui est le contact entre votre client et votre
           équipe. Il fixe les priorités sur les fonctionnalités que devra fournir le produit final.

           <h3>De quoi est fait un backlog ?</h3>

           Les éléments du backlog sont appelées des "user stories". Une "user story" doit avoir un but métier, son ajout au backlog doit 
           généralement justifier une valeur ajoutée, une « business value ». On n'y met pas de tâches techniques du genre "écrire le code 
           en C plutot que en Java". Mais plutôt des tâches dites métiers qui rajoute une fonctionnalité au produit, du genre "Permettre 
           aux utilisateurs de pouvoir se connecter". Les tâches dites "techniques" appartiennent justement à l'équipe technique, 
           et ce n'est pas au product owner ou au client de décider pour l'équipe pour ce genre de détails. 

           <h3>Comment écrire une user story ?</h3>

           Au sein du backlog, chaque user story constitue un item, une ligne : le backlog se présente comme un tableau ordonné 
           par priorité. (Rappel : priorité fixée par le product owner.)
           Pour chaque histoire, on décrit généralement dans le backlog :</br></br>
           
             - Un identifiant unique, que l'on incrémente à chaque nouvelle histoire, comme une clé primaire auto-incrémentée dans une BDD. 
             Cet identifiant permet de garder la trace des user stories même quand on les renomme.</br></br>

             - Une courte phrase décrivant la user story. Généralement, pour rendre cette description explicite, une bonne façon de 
             procéder est d'utiliser la phrase type suivante : « En tant que X, je veux Y, afin de Z ». </br>
             Exemple : « En tant que utilisateur, je veux avoir accès à liste de mes projets, afin de pouvoir ajouter, modifier ou supprimer 
             un projet. Le product owner ne doit jamais oublier que la spécification d'un besoin est juste un problème de communication : 
             ceux qui ont un besoin doivent communiquer avec ceux qui peuvent le réaliser, et la première chose à faire est d'exprimer 
             clairement et très simplement ce que l'on veut. En résumé ces phrases sont importantes et elles ne doivent pas être prises
             à la légère.</br></br>

             - L'importance de la user story. C'est un nombre qu'attribue le product owner à la story : plus l'importance est grande, 
             plus la story devra être traitée en priorité. Astuce : choisissez des nombres qui ne se suivent pas, ce sera plus simple par la suite pour y intercaler des choses 
             (ex. : c'est facile d'intercaler une story d'importance 45 entre deux stories d'importances 50 et 40).</br></br>

             - L'estimation initiale de l'équipe pour cette user story. Généralement cette case est vide au moment où le product owner 
             insère la story dans le backlog : elle est complétée par la suite durant le round d'estimation avec l'équipe (au début de 
             chaque sprint). Nous en reparlerons plus en détails dans la partie dédiée à la plannification des sprints.</br></br>
           
            Ca y'est, vous avez votre backlog ! Nous allons maintenant voir comment on organise les user stories dans l'étape
            d'après la planification (ou planning).</br></br>
            <h6>source : http://www.gestion-projet-informatique.vivre-aujourdhui.fr/backlog-produit-scrum.html</h6>

            <h2>English tutorial</h2>

            English tutorial is growing, coming soon.. </br></br>

            <a href="../view/backlog.php" class="btn btn-success">Back</a>
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