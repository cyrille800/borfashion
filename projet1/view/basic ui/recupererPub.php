  <HTML>
<head>
</head>
<body>
<?PHP
include "publication.php";
include "publicationP.php";
if (isset($_GET['id_pub'])){
	$publicationP=new PublicationP();
    $result=$publicationP->RecupererPub(($_GET['id_pub']));
	foreach($result as $row){
		
		$Description=$row['Description'];
		$Categorie=$row['Categorie'];
		$Date_debut=$row['Date_debut'];
		$Date_fin=$row['Date_fin'];
		$Titre=$row['Titre'];
		$Type=$row['Type'];

?>
<form method="POST">
<table>
<caption>Modifier Employe</caption>
<tr>
<td>Description</td>
<td><input type="text" name="Description" value="<?PHP echo $Description ?>"></td>
</tr>
<tr>
<td>Categorie</td>
<td><input type="text" name="Categorie" value="<?PHP echo $Categorie ?>"></td>
</tr>
<tr>
<td>Date_debut</td>
<td><input type="text" name="Date_debut" value="<?PHP echo $Date_debut ?>"></td>
</tr>
<tr>
<td>Date_fin</td>
<td><input type="text" name="Date_fin" value="<?PHP echo $Date_fin ?>"></td>
</tr>
<tr>
<td>Titre</td>
<td><input type="text" name="Titre" value="<?PHP echo $Titre ?>"></td>
</tr>
<td>Type</td>
<td><input type="text" name="Type" value="<?PHP echo $Type ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['id_pub'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
   if (isset($_POST['modifier'])){
	$employe=new Publication($_POST['Description'],$_POST['Categorie'],$_POST['Date_debut'],$_POST['Date_fin'],$_POST['Titre'],$_POST['Type']);
	$publicationP->modifierPublication($employe,($_POST['cin_ini']));
	 echo $_POST['cin_ini'];
	header('Location: afficherPub1.php');
}



 
?>
</body>
</HTMl>