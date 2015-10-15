<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
	<meta name="author" lang="fr" content="Antoine Laulan" />
	<meta name="reply-to" content="antoinelaul@outlook.fr" />
        <title>University personal website</title>
	<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo filemtime('style.css'); ?>" /> 
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css" />
    </head>
 
    <body>
 
    
    
    <header>
    </header>
    
    <nav id="menu">        
        <div class="element_menu">
            <h3>Basic Menu</h3>
            <ul>
                <li><a href="index.php?list">Workshops list</a></li>
                <li><a href="index.php?add">Add workshop</a></li>
            </ul>
        </div>    
    </nav>
    
    
    <div id="body">
       <?php include ($pageURL);?>
    </div>
    
    
    <footer id="foot">
        <p> First website be nice.</p>
    </footer>
    
    </body>
</html>
