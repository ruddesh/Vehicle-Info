<?php require_once('init.php'); ?>
<?php 
	/**
	 * 
	 */
	class Db
	{	
		public $conn;
		
		public function connect()
		{
			try {
				$dsn = 'mysql:host=' .DB_HOST. ';dbname=' .DB_NAME;
				$conn = new PDO($dsn, DB_USER, DB_PASS);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//echo "Connected Successfully";
				return $conn;

			} catch (PDOException $e) {
				echo "Connection failed: " . $e->getMessage();
			}
		}

		
	}
 ?>