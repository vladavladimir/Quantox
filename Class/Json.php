<?php 

include_once 'Class/Database.php';


class GetJson extends Database 
{
    
    public function returnJson($id){ // geting info about student from his ID from URL
        $db = $this->connection();
        $stmt = $db->prepare("SELECT * FROM studant_grade WHERE id = :id");
        $stmt->execute(['id'=>$id]); 
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    
}


 ?>