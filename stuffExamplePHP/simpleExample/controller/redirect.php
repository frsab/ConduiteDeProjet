<?php 


$pageURL = "view/welcome.php";
if(isset($_GET['add'])){
	$pageURL = "view/add.php";
}

else if (isset($_GET['list'])){
	$pageURL = "view/list.php";
}

else if(isset($_GET['details'])){
	$pageURL = "view/details.php";
}

include ("view/frame.php");

?>
