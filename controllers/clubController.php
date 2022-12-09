<?php
include "./models/Club.php";
class ClubController{


    public static function index(){
        $clubs = Club::all();
        return $clubs;
    }
    public static function store(){
      Club::create(); 
    }
    public static function destroy(){
      Club::destroy($_POST['id']); 
    }
    


}
?>