<?PHP
 include "../../entities/class_offre.php";
 
if (isset($_POST["id"])){
	offre::supprimer($_POST["id"]);
	header('Location: afficherOffre.php');
}
else{
	echo "vérifier les champs";
}
?>