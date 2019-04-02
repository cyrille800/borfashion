<?PHP
include "publicationP.php";
$PublicationP=new PublicationP();
if (isset($_POST["Description"])){
	$PublicationP->supprimerPublication($_POST["Description"]);
	header('Location: afficherPub1.php');
}
else{
	echo "vérifier les champs";
}
?>