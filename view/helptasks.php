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
						<h2>Tasks List Help</h2>   
						<h5>There is a little tutorial about how to make a sprint tasks list. </h5>

						<h2>French tutorial</h2>
						<h3>Introduction</h3>
						Une fois le planning et le backlog du sprint terminé il faut établir la liste des tâches du sprint.
						Cette liste est établie par l'équipe de développement avant le début du sprint.
						Il est important de bien rédiger cette liste. C'est-à-dire qu'il faut essayer de décomposer au maximum
						chaque US du sprint afin de pouvoir mieux répartir le travail entre les différents développeurs.
						C'est le scrum master qui est en charge de cette répartition.

						<h3>Qu'est-ce qu'une tâche ?</h3>
						Une tâche est avant tout "quelque chose" qui doit être fait par un et un seul développeur. C'est-à-dire
						que si une tâche peut être faite par plusieurs développeurs alors c'est qu'elle peut être subdivisée en
						plusieurs tâches. </br></br>

						Une tâche est une partie d'implémentation du projet. Elle est généralement associée à une US mais ce n'est
						pas toujours le cas. Par exemple il peut exister des tâches dites "techniques" qui sont rajoutées par l'équipe
						de développement. Typiquement une tâche du style "Réécrire l'algo d'ajout de projet en JAVA" est une tâche technique.
						De plus certaines tâches peuvent être associées à plusieurs US. C'est pourquoi on parle de liste de tâches d'un sprint et non liste de tâches d'une US. </br></br>

						Le type des tâches est influencer par le choix du style architectural du projet. Par exemple si le style choisi
						est MVC on trouvera régulièrement des tâches découpées entre le Modèle, la Vue et le controller. </br></br>

						Dans une liste des tâches doivent apparaître les renseignements suivants : </br></br>

						- la description : une courte phrase pour décrire en quoi consiste la tâche.</br>
						- le coût : c'est que va coûter en temps le développement de la tâche. L'unité est le jour/Homme. C'est-à-dire 
						que si une tâche à un coût de 1,5 alors il faudra 1,5 jour de développement à un développeur pour la réaliser.
						Cependant il arrive fréquemment que cette durée soit ralongée ou racourcie en fonction de l'avancement du développeur.

						<h3>Remarques importantes</h3>

						1) Il ne faut pas oublier les tâches de rédaction et d'éxécution des différents tests. A savoir les tests
						unitaires, les tests d'intégrations et les tests de validations. Ce n'est que lorsque ces tests sont 
						passés qu'une US peut être considérée comme faite.</br></br>

						2) Le coût total en jours/homme d'un sprint est borné. C'est-à-dire que si par exemple votre équipe est
						composée de 4 développeurs et que votre sprint à une durée de 10 jours alors vous avez une "capcité de
						développement de 40j/h". En conséquence le coût total ne peut excéder cette limite. </br></br>

						3) Certaines tâches peuvent dépendre les unes des autres. C'est pourquoi il est nécessaire de faire
						attention aux dépendances afin de bien réaliser les tâches dans l'ordre.</br></br>

						Et voilà vous savez maintenant comment faire une liste de tâches. Il faut maintenant gérer l'état de ces
						tâches dans le Kanban. Nous vous expliquerons en quoi il consiste et comment le manager.


						<h2>English tutorial</h2>

						English tutorial is growing, coming soon.. </br></br>

						<a href="/ConduiteDeProjet/?p=ListTask&IDUSER=<?php echo $_GET["IDUSER"]; ?>&IDSPRINT=<?php echo $_GET["IDSPRINT"];?>&IDPROJECT=<?php echo $_GET["IDPROJECT"]; ?>" class="btn btn-success">Back</a>
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
