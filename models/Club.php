<?php
include "./models/DB.php";

class Club {
    public $name;
    public $country;
    public $budget;
    public $isEuropean;
    

    public function __construct($id = null ,$name = null, $country = null , $budget = null, $isEuropean = null){
        $this-> name = $name; 
        $this-> country = $country ;
        $this-> budget = $budget ;
        $this-> isEuropean = $isEuropean; 
     }








}




?>