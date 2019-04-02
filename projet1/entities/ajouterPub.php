<?PHP
include "publication.php";
include "publicationP.php";

if (isset($_POST['titre']) and isset($_POST['categorie']) and isset($_POST['date_debut']) and isset($_POST['date_fin']) and isset($_POST['description']) and isset($_POST['type'])){
$Publication=new Publication($_POST['titre'],$_POST['categorie'],$_POST['date_debut'],$_POST['date_fin'],$_POST['description'],$_POST['type']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$PublicationP1=new PublicationP();
$PublicationP1->ajouterPublication($Publication);
header('Location: afficherPub1.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>