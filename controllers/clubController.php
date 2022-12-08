<?php
include "./models/Club.php";
class ClubController{


    public static function index(){
        $clubs = Club::all();
        return $clubs;
    }


}
?>