  <HTML>
<head>
</head>
<body>
<?PHP
include "publication.php";
include "publicationP.php";
if (isset($_GET['Description'])){
	$publicationP=new PublicationP();
    $result=$publicationP->recupererPub($_GET['Description']);
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
<td>CIN</td>
<td><input type="text" name="Description" value="<?PHP echo $Description ?>"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" name="Categorie" value="<?PHP echo $Categorie ?>"></td>
</tr>
<tr>
<td>Prenom</td>
<td><input type="text" name="Date_debut" value="<?PHP echo $Date_debut ?>"></td>
</tr>
<tr>
<td>nb heures</td>
<td><input type="text" name="Date_fin" value="<?PHP echo $Date_fin ?>"></td>
</tr>
<tr>
<td>tarif horaire</td>
<td><input type="text" name="Titre" value="<?PHP echo $Titre ?>"></td>
</tr>
<td>tarif horaire</td>
<td><input type="text" name="Type" value="<?PHP echo $Type ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['Description'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
   if (isset($_POST['modifier'])){
	$employe=new Publication($_POST['Description'],$_POST['Categorie'],$_POST['Date_debut'],$_POST['Date_fin'],$_POST['Titre'],$_POST['Type']);
	$publicationP->modifierPublication($employe,$_POST['cin_ini']);
	 echo $_POST['cin_ini'];
	header('Location: afficherPub1.php');
}



 
?>
</body>
</HTMl>