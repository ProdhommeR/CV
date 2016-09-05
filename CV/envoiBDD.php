<?php
include_once 'Db.php';

$db=new Db(cv);
$db->connect("cv");

$Nom=$_POST['Nom'];
$Prénom=$_POST['Prenom'];
$Date=$_POST['date'];
$Email=$_POST['email'];
$Adresse=$_POST['Address'];
$Ville=$_POST['Ville'];
$CP=$_POST['code'];
$n°tel=$_POST['telephone'];



echo "Votre nom est :", $Nom;
echo "Votre prenom est :", $Prénom;
echo "Votre date est :", $Date;
echo "Votre nom est :", $Email;
echo "Votre nom est :", $Adresse;
echo "Votre nom est :", $Ville;
echo "Votre nom est :", $CP;
echo "Votre nom est :", $n°tel;
?>