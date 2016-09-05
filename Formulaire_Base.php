<?php 
function connect ($database,$host="localhost",$user="root",$password=""){
	$connected=false;
if ($connected=mysql_connect($host,$user,$password)){
	$connected=mysql_select_db($database);
	return $connected;
}
}

function fetch($query){
	return mysql_fetch_array($query);
}
function add($tables,$fieldAndValues){
	$field=array_keys($fieldAndValues);
	$values=array_values($);
}

