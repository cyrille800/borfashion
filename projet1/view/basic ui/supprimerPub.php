<?PHP
include "publicationP.php";
$PublicationP=new PublicationP();
if (isset($_POST["id_pub"])){
	$PublicationP->supprimerPublication(($_POST["id_pub"]));
	header('Location: afficherPub1.php');
}
else{
	echo "vérifier les champs";
}
?>