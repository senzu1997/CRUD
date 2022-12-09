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

public static function create(){
    print_r($_POST);
   $db = new DB();
   $fromEurope = (isset($_POST['fromEurope'])) ? "1" : "0";
   $stmt = $db->conn->prepare("INSERT INTO `clubs`(`id`, `name`, `country`, `budget`, `from_europe`) VALUES (null,?,?,?,?)");
   $stmt->bind_param("ssdi",$_POST['name'],$_POST['country'],$_POST['budget'],$fromEurope);
   $stmt->execute();

   $stmt->close();
   $db->conn->close();
   
}
public static function destroy(){
    $db = new DB();
    $stmt = $db->conn->prepare("DELETE FROM `clubs` WHERE `id`=?");
    $stmt->bind_param("i",$_POST['id']);
    $stmt->execute();
 
    $stmt->close();
    $db->conn->close(); 
}







}




?>