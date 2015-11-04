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
				<a class="navbar-brand" href="index.html">Home</a> 
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
						<h2>Planning Help</h2>   
						<h5>There is a little tutorial about how to make a project planning. </h5>

						<h2>French tutorial</h2>
						<h3>Introduction</h3>

						Une fois que le Backlog est prêt et que la durée d'un sprint, dont nous verrons la définition plus tard,
						est fixée en accord avec le product owner, 
						il n'y a plus qu'à remplir les sprints avec des éléments du Backlog (planification des sprints) ou planning.</br></br>

						Au début du projet le product owner et l'équipe de développement fixe la durée totale du projet, et ce de manière
						non fixe. C'est-à-dire que cette période pourra augmenter ou diminuer en fonction de l'avancement du projet. 
						Cela permet à l'équipe de développement de fixer un nombre de sprints, lui aussi non fixe. 

						Au cours de la plannification le product owner exprime plus précisément son besoin pour permettre à l'équipe de 
						développement d'estimer plus précisément la charge de travail des sprints.
						Le product owner peut à tout moment revoir la priorité des exigences qui n'ont pas 
						encore été planifiées dans le sprint en cours. En revanche, les exigences engagées dans le sprint en cours 
						sont "bloquées", seule l'équipe de développement à le pouvoir de modifier le périmètre du sprint en cas 
						d'avance ou de retard.</br></br>

						source : http://www.agiliste.fr/introduction-methodes-agiles/</br>

						<h3>Un sprint c'est quoi ?</h3>

						Le sprint est une période d'1 semaine minimum à 4 maximum. Sachant que plus courte est cette période plus efficace
						est cette méthode. Une fois la durée choisie, elle reste constante pendant toute la durée du développement. 
						Au bout du sprint l'équipe délivre une "partie" du produit. 
						Un nouveau sprint démarre dès la fin du précédent.
						Attention il ne peut pas y avoir un seul sprint pour tout le développement du projet. Sinon l'intêret de la 
						méthode agile est perdu.</br></br>

						Chaque sprint possède un but et on lui associe une ou plusieurs User story du Backlog à réaliser.
						Durant un sprint :</br></br>

						- le but du sprint ne peut être modifié ;</br>
						- la composition de l'équipe reste constante ;</br>
						- la qualité n'est pas négociable ;</br>
						- la liste des US est sujette à négociations entre le product owner et l'équipe de développement.</br>
						La limitation est d'un mois afin de limiter la complexité et donc les risques liés au sprint.</br></br>

						Si le but du sprint devient obsolète pendant celui-ci, le product owner peut décider de l'annuler.
						Dans ce cas, les développements terminés sont revus par le product owner, qui peut décider de les 
						accepter. Les éléments du sprint n'étant pas acceptés sont ré-estimés et remis dans le backlog.

						Chaque sprint se termine par une "reunion" permettant de définir le résultat concret du sprint et quel
						impact il aura sur les sprints suivants. Le sprint suivant s’enchaîne
						à la suite selon le même cycle et ainsi de suite jusqu'au dernier sprint du projet.</br></br>

						source https://fr.wikipedia.org/wiki/Scrum_(méthode)#Sprint</br>

						<h3>Comment remplir les sprints ?</h3>

						A l'aide du backlog, du nombre de sprints et la durée d'un sprint, l'équipe de développement et le product owner 
						doivent créer le backlog du sprint. C'est-à-dire répartir les US entre les sprints.</br></br>

						Cette répartition est faite selon plusieurs critères :</br></br>

						- la durée du sprint : plus le sprint est long, plus le nombre de US qu'il contient sera potentiellement grand;</br></br>

						- la "difficulté" d'une US : pour rappel cette difficulté est fixée par l'équipe de 
						développement lors de la création du backlog. Cette estimation est faite à l'aide d'un nombre abstrait afin de 
						comparer les US entre elles. Par exemple une US de difficulté 2 sera plus longue à developper qu'une US de 
						difficulté 1. Cependant, ce nombre étant abstrait cela ne signifie pas qu'elle prendra 2 fois plus de temps. Plus 
						une US est "difficile", plus elle occupera une grande place dans le sprint;</br></br>

						- l'importance d'une US : pour rappel cette importance est fixée par le product owner lors de la création du 
						backlog. Plus l'importance d'une US est grande plus elle devra être "placée tôt" dans les sprints. C'est-à-dire
						que la ou les US les plus importantes doivent être developpées lors des premiers sprints du projet. Cependant
						il existe une certaine flexibilité quant à ce critère. Par exemple il n'est pas interdit de développer une US
						moins importante X avant la plus importante Y. Il faut néanmoins que les US les plus importantes soient développées
						à la fin du temps de développement du projet. Si US non développées il y a la fin il faut qu'elles soient d'importance
						faibles; </br></br>

						L'idée de la répartition est d'équilibrer les sprints en respectant les critères énoncés ci-dessus.
						Chaque US possédant une difficulté il est aisé de calculer la difficulté totale d'un sprint. Lors de la planification
						il faut que chaque sprint possède une difficulté totale du même ordre. C'est-à-dire que il n'est pas obligatoire
						que les difficultés totales soient égales mais l'idéal est qu'elles soient le plus proches possibles des unes des 
						autres.</br></br>

						A la fin d'un sprint on calcule la somme des difficultés des US terminées totalement. Ce nombre est appelé la velocité.
						Si une ou plusieurs US ne sont pas terminées à la fin d'un sprint elles doivent être rajoutées au sprint suivant. Et
						ainsi de suite.</br></br> 

						Une fois les backlogs de sprints terminés vous avez terminé la plannification de votre projet !
						Il est maintenant temps de faire la liste des tâches de votre sprint. C'est la prochaine étape de cette méthode,
						et elle sera expliquée par la suite.

						<h2>English tutorial</h2>

						English tutorial is growing, coming soon.. </br></br>


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