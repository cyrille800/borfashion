  <HTML>
<head>
</head>
<body>
<?PHP
 
include "../../entities/class_offre.php";
if (isset($_GET['titre'])){
	 
    $result=Offre::recupererOffre($_GET['titre']);
	foreach($result as $row){
		 
		$id=$row['id'];
		$titre=$row['titre'];
		$date_debut=$row['date_debut'];
		$date_fin=$row['date_fin'];
	    $description=$row['description'];
	    $liste_produit=$row['liste_produit'];
        $prix=$row['prix'];

?>
<form method="POST">
<table>
<caption>Modifier Employe</caption>
<tr>
<td>identifiant</td>
<td><input type="text" name="id" value="<?PHP echo $id ?>"></td>
</tr>
<tr>
<td>Titre</td>
<td><input type="text" name="titre" value="<?PHP echo $titre ?>"></td>
</tr>
<tr>
<td>Date_debut</td>
<td><input type="text" name="date_debut" value="<?PHP echo $date_debut ?>"></td>
</tr>
<tr>
<td>Date_fin</td>
<td><input type="text" name="date_fin" value="<?PHP echo $date_fin ?>"></td>
</tr>
<tr>
<td>Description</td>
<td><input type="text" name="description" value="<?PHP echo $description ?>"></td>
</tr>
<td>Liste_produit</td>
<td><input type="text" name="liste_produit" value="<?PHP echo $liste_produit ?>"></td>
</tr>
<tr>
</tr>
<td>Prix</td>
<td><input type="text" name="prix" value="<?PHP echo $prix ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="cin_ini" value="<?PHP echo $_GET['id'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
   if (isset($_POST['modifier'])){
	 Offre($_POST['id'],$_POST['titre'],$_POST['date_debut'],$_POST['date_fin'],$_POST['description'],$_POST['liste_produit'],$_POST['prix']);
	Offre()::modifierPublication($_POST['cin_ini']);
	 echo $_POST['cin_ini'];
	header('Location: afficherOffre.php');
}



 
?>
</body>
</HTMl>