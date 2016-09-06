<html>
<body>
<fieldset>
  <?php
mysql_connect("locaslhost","root","");
mysql_select_db("cv");
$Nom=$_POST['Nom'];
$Prénom=$_POST['Prenom'];
$Date=$_POST['date'];
$Email=$_POST['email'];
$Adresse=$_POST['Address'];
$Ville=$_POST['Ville'];
$CP=$_POST['code'];
$n°tel=$_POST['telephone'];
mysql_query("INSERT INTO information (Nom,Prénom,Date,Adresse,Ville,CP,Email,n°tel) VALUES ('$Nom','$Prénom','$Date','$Adresse','$Ville','$CP','$Email','$n°tel')");


echo "Votre Nom est :", $Nom, "et votre prénom", $Prénom;
echo "<br></br>";
echo "Votre date de naissance  est :", $Date;
echo "<br></br>";
echo "Votre nom est :", $Email;
echo "<br></br>";
echo "Votre nom est :", $Adresse;
echo "<br></br>";
echo "Votre nom est :", $Ville;
echo "<br></br>";
echo "Votre nom est :", $CP;
echo "<br></br>";
echo "Votre nom est :", $n°tel;
echo "<br></br>";
?>
</fieldset>  
</body>
</html>
