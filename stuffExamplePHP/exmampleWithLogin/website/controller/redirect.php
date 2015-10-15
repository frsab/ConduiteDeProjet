<?php

include_once("model/Database.class.php");
session_start();

$db = new Database();
$pageURL = "view/welcome.php";

if (!empty($_POST['login_username']) && !empty($_POST['login_passwd'])) {
    if ($_POST['login_passwd'] == "truc") {
        $_SESSION['username'] = $_POST['login_username'];
        $_SESSION['admin'] = true;
    }
}

if (isset($_GET['map'])) {
    $jobs = $db->getJobs();
    $points = array();

    foreach ($jobs as $job) {
        $points[] = array('place' => array($job->jobLatitude, $job->jobLongitude),
                          'description' => ((!empty($job->jobImageUrl)) ? "<a href='$job->jobImageUrl' target='_blank'><img src='$job->jobImageUrl' class='map-thumbnail' /></a><br />" : "")
                          . nl2br($job->jobDescription) . ((!empty($job->jobUrl)) ? "<br /><br /><a href='$job->jobUrl' target='_blank'>Link</a>" : ""));
    }

    $pageURL = "view/map.php";
}
else if (isset($_GET['add'])) {
    if (!empty($_POST['add_latitude']) && !empty($_POST['add_longitude']) && !empty($_POST['add_description']))
        $db->addJob($_POST['add_image_url'], $_POST['add_url'], $_POST['add_latitude'], $_POST['add_longitude'],
                    $_POST['add_description']);

    $pageURL = "view/add.php";
}
else if (isset($_GET['edit'])) {
    if (!empty($_POST['edit_id']) && !empty($_POST['edit_latitude']) && !empty($_POST['edit_longitude']) 
        && !empty($_POST['edit_description'])) {
        $db->updateJob($_POST['edit_id'], $_POST['edit_image_url'], $_POST['edit_url'], $_POST['edit_latitude'],
                       $_POST['edit_longitude'], $_POST['edit_description']);
    }
    else if (!empty($_GET['delete']))
        $db->deleteJob($_GET['delete']);

    $jobs = $db->getJobs();
    $pageURL = "view/edit.php";
}
else if (isset($_GET['logout'])) {
    unset($_SESSION['admin']);
    header("Location: index.php");
}

include("view/frame.php");

