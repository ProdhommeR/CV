<?php
class Db {
	private $db;
	private $user;
	private $password;
	private $server;
	private $port;
	private $dbo;
	
	public function connect($db,$user="root",$password="",$server="127.0.0.1",$port="3306"){
		$this->db=$db;
		$this->user=$user;
		$this->password=$password;
		$this->server=$server;
		$this->port=$port;
		
		try {
			$dbo = new PDO("mysql:host={$server};dbname={$db};port:{$port};charset=UTF8",$user, $password);
			$dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 
		} catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
		$this->dbo=$dbo;
		return $dbo;
	}
	
	public function getAll($tableName,$condition=null){
		$sql="SELECT * FROM {$tableName}";
		if(isset($condition)){
			$sql.=" WHERE ".$condition;
		}
		$statement=$this->dbo->query($sql);
		return $statement;
	}
	
	public function insert($tableName,$fieldNamesAndValues){
		$sql="INSERT INTO {$tableName} ";
		$keys=array_keys($fieldNamesAndValues);
		$values=array_values($fieldNamesAndValues);
		if( $keys!== range(0, count($fieldNamesAndValues) - 1)){
			$sql.="(".implode(",", $keys).")";	
		}
		$values=array_walk($values, function($e){return "'".$e."'";});
		$sql.= " VALUES(".implode(",", $values).")";
		$this->dbo->exec($sql);
	}
	
}