<?php
include_once 'Db.php';

	
$db=new Db();
$db->connect("dbTest");
$dbTest=$db->getAll("dbTest");
foreach ($dbTest as $cli){
	echo "<h3>".$cli["nom"]."</h3>";
}

