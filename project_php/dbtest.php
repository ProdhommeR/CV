<?php
class Db{
	private $db;
	private $user;
	private $password;
	private $server;
	private $port;
	
	public function connect ($db,$user="root",$password="",$server="127.0.0.1",$port="3306"){
		$this->db=$db;
		$this->user=$user;
		$this->password=$password;
		$this->server=$server;
		$this->port=$port;
		
		
		try {
			$dbo = new PDO("mysql:host={$server};dbname={$db};port:{$port}",$user, $password);
			$dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 
		} catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
		$this->dbo=$dbo;
		return $dbo;
	}
	public function getAll($tablename,$condition=null){
		$sql="SELECT * FROM {$tablename}";
		if(isset($condition)){
			$sql.=" WHERE ".$condition;
		}
		$statement=$this->dbo->query($sql);
		return $statement;
		}
		public function insert($tablename,$values,$fieldNamesAndValues){
			return array_keys($arr) !== range(0, count($arr) - 1);
		}
	}
