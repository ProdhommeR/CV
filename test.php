<?php 
include_once ("Formulaire_Base.php");
if (connect ("atp")){
echo "connexion réussi";
}else{
	echo"connexion pas réussi";
}