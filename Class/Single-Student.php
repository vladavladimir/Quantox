<?php 

include_once 'Class/Database.php';

class SingleStudent extends Database
{
	
	public function getAllStudents(){ // geting all students from DB
		
		$db = $this->connection();
		$stmt = $db->prepare("SELECT * FROM studant_grade");
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_OBJ);
		
		return $result; 

	}
}

 ?>