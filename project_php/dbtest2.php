<?php
include_once 'dbtest.php';


$db=new Db();
$db->connect("atp");
$joueurs=$db->getAll("Joueur","nom like 'B%'");
foreach ($joueurs as $joueur){
	echo "<h3>".$joueur["NOM"]."</h3>";
}