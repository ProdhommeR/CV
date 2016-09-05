<html>
<body>
<?php
mysql_connect("localhost","root","");
mysql_select_db("stage_ap5");
?>

<form method="post" action="Formulaire2.php">
	<fieldset>
		<legend>Choix Table/Vue</legend>
		Nom : <SELECT name="nom" size="1">
				<?php
				$sql='show tables';
				$list = mysql_query($sql);
				while ($data = mysql_fetch_array($list))
				{
					echo'<option
					value="'.$data[0].'">'.$data[0].'</option>';
				}
				?>
				
				
				
				</SELECT>
				<input type="submit" name="Show" value="Afficher">
	</fieldset>
</form>
</body>
</html>