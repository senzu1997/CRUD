<?php
include "./controllers/clubController.php";




if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['save'])) {
        ClubController::store();
        header("Location:./index.php");
        die;
    }
    if(isset($_POST['destroy'])) {
        echo "triname";
    }
    if(isset($_POST['update'])) {
        echo "atnaujiname";
    }

}
$clubs = ClubController::index();

if($_SERVER['REQUEST_METHOD'] == "GET"){
    
}
















?>