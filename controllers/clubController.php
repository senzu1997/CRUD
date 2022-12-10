<?php
include "./models/Club.php";
class ClubController{


    public static function index(){
        $clubs = Club::all();
        return $clubs;
    }
    public static function show(){
        $clubs = Club::find($_GET['id']);
        return $clubs;
    }
    public static function store(){
      Club::create(); 
    }
    public static function update(){
    $fromEurope = (isset($_POST['fromEurope'])) ? "1" : "0";
     $club = new Club();
     $club->id = $_POST['id'];
     $club->name = $_POST['name'];
     $club->country = $_POST['country'];
     $club->budget = $_POST['budget'];
     $club->isEuropean = $fromEurope;
     $club->update();
    }

    public static function destroy(){
      Club::destroy($_POST['id']); 
    }
    


}
?>