<?php
include "./controllers/clubController.php";




if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['save'])) {
        ClubController::store();
        header("Location:./index.php");
        die;
    }
    if(isset($_POST['destroy'])) {
        ClubController::destroy();
        header("Location:./index.php");
        die;
        echo "triname";
    }
    if(isset($_POST['update'])) {
        ClubController::update();
        header("Location:./index.php");
        die;
        echo "atnaujiname";
    }

}
if($_SERVER['REQUEST_METHOD'] == "GET"){
    if(isset($_GET['edit'])) {
        echo "paimame viena objekta";
    }
}

$clubs = ClubController::index();


















?>