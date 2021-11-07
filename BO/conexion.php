<?php
	
	class Conexion extends PDO
	{
		private $hostBd = 'z3iruaadbwo0iyfp.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
		private $nombreBd = 'cj4523mqgmwtjqmo';
		private $usuarioBd = 'h8m08d769ocnigje';
		private $passwordBd = 'dbnkvv2vpe9y69ip';
		
		public function __construct()
		{
			try{
				parent::__construct('mysql:host=' . $this->hostBd . ';dbname=' . $this->nombreBd . ';charset=utf8', $this->usuarioBd, $this->passwordBd, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				
				} catch(PDOException $e){
				echo 'Error: ' . $e->getMessage();
				exit;
			}
		}
	}
?>