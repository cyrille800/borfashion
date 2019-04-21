<?php 
require_once "class_offre.php";
	function verification_post($tableau){

		for($i=0;$i<sizeof($tableau);$i++){
			if(!isset($_POST[$tableau[$i]]) || empty($_POST[$tableau[$i]])){
				return 0;

			}
		}
		return 1;
	}
	if(verification_post(["titre","prix","date_debut","date_fin","description","liste_produit"]) && !empty($_FILES["file"])){
		extract($_POST);
		$tmp=new offre($titre,trim($date_debut),trim($date_fin),$description,$liste_produit,$prix);
		if(offre::verifier("titre",$titre)){
			$tmp->ajouter();
		$folder="../view/assets/img/offres/";
	$temp_name=$_FILES['file']['tmp_name'];
	$location=$folder.$titre.".jpg";
	move_uploaded_file($temp_name,$location);

	echo "ok";
		}
		else{
			echo "ce titre existe deja";
		}
	}
	else{
		var_dump("remplir le formulaire");
	}
?>