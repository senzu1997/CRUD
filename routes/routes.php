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
    }
    if(isset($_POST['update'])) {
        ClubController::update();
        header("Location:./index.php");
        die;
        echo "atnaujiname";
    }

}
$checked = "";
if($_SERVER['REQUEST_METHOD'] == "GET"){
    if(isset($_GET['edit'])) {
        $club = ClubController::show();
        if($club->isEuropean){
            $checked = "checked";
        }
    }
    
    
}

$clubs = ClubController::index();


















?>