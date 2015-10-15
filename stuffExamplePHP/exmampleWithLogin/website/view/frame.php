<!DOCTYPE html>
<html>

<head>
	<title>Bio-informatic</title>

	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="author" lang="fr" content="Raphael Jorel" />
	<meta name="reply-to" content="raphael.jorel@laposte.net" />
	
	<link rel="stylesheet" type="text/css" href="style.css?v=<?php echo filemtime('style.css'); ?>" /> 
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css" />
</head>

<body>

<div id="banner">
    Bio-informatic
</div>
    
<div id="menu">
    <ul>
        <li><a href="index.php">Welcome</a></li>
        <li><a href="index.php?map">Job offers</a></li>
<?php if (isset($_SESSION['admin'])) { ?>
        <li><a href="index.php?add">Add job offers</a></li>
        <li><a href="index.php?edit">Edit job offers</a></li>
        <li><a id="menu-link-logout">Log out</a></li>

        <script>
            document.getElementById("menu-link-logout").onclick = function() {
                window.location = "index.php?logout";
            }
        </script>
<?php } else { ?>
        <li><a id="menu-link-login">Log in</a></li>
        <form method="post" action="" id="menu-form-login">
            <label>Username :</label><input type="text" name="login_username" class="menu-input" />
            </label>Password :</label><input type="password" name="login_passwd" class="menu-input" />
            <input type="submit" value="Log in" />
        </form>

        <script>
            document.getElementById("menu-link-login").onclick = function() {
                document.getElementById("menu-form-login").style.display = "block";
            }
        </script>
<?php } ?>
    </ul>
</div>

<div id="body">
    <?php include($pageURL); ?>
</div>

</body>
</html>
