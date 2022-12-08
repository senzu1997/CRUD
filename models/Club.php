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

public static function all(){
    $clubs = [];
    $db = new DB();
    $query = "SELECT * FROM `clubs`";
    $result = $db->conn->query($query);
   


    while($row= $result->fetch_assoc()){
        $clubs[] = new Club($row['id'],$row['name'],$row['country'],$row['budget'],$row['from_europe']);
    }
    $db->conn->close();
    return $clubs;
}







}




?>