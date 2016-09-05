<?php
include_once 'Db.php';

$db=new Db(weshalors);
$db->connect("weshalors");
$tmatieres=$db->getAll("nomMatiere","");
foreach ($tmatieres as $tmatiere){
	echo "<h3>".$tmatiere["nomMatiere"]."</h3>";
}
