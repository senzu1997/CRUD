<?php
include "./controllers/clubController.php";



$clubs = ClubController::index();
if($_SERVER['REQUEST_METHOD'] == "POST") {
    print_r($_POST);
    die;
}



















?>