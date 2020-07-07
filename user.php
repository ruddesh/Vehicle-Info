<?php 
/**
 * 
 */
class Users extends Db
{

	public function getAll()
	{
		$sql = "SELECT vehicle_no FROM memmber";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute();
		$datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $datas;
	}

	public function getUser()
	{	
		$sql = "SELECT * FROM memmber";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute();
		$datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $datas;
	}
	
	// public function SearchV($vno)
	// {	
	// 	if (isset($_POST['search'])) {
	// 		$vno = $_POST['nihao'];
	// 		$sql = "SELECT * FROM memmber WHERE vehicle_no = $vno";
	// 		$stmt = $this->connect()->prepare($sql);
	// 		$stmt->execute();
	// 		$data = $stmt->fetchAll(PDO::FETCH_ASSOC); 
	// 		return $data;
	// 	}
	// }
}
 ?>