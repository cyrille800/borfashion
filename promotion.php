<?php 
require_once "class_produit.php";
require_once "class_promotion.php";
if(isset($_GET["operation"])){
	extract($_GET);
	if($_GET["operation"]=="ajouter"){
		extract($_GET);
		if($prix==""){
			echo "ajouter le prix";
		}
		else{
			if(intval($prix)<=0){
			echo "saisir un prix correct";	
			}
			else{
				if(promotion::verifier($id_produit)!=0 || promotion::verifier($id_produit)==-1){
					echo " ce produit est deja en promotion";
				}
				else{
					$prixs=intval(produit::retourne_valeur("id",$id_produit,"prix"));
					if($prix<intval($prixs)){
					$po=new promotion($id_produit,$prix,$date_fin);
$date1 = new DateTime("today");
$date2 = new DateTime($date_fin);
					if($date2>=$date1 && $date_fin!=""){
					if($po->ajouter()){
					echo "ok";
					}else{
						echo "echec de la requette";
					}
					}
					else{
						echo "date invalide ";
					}
				}else{
					echo "vous devez saisir un prix inférieur au prix initial";	
				}			
				}
			}
		}
	}

	if($_GET["operation"]=="modifier"){
		if(promotion::modifier($id,$prix,$date)){
			echo "ok";
		}
		else{
			echo "non";
		}
	}
	if($_GET["operation"]=="supprimer"){
		if(promotion::supprimer($id)){
			echo "ok";
		}
		else{
			echo "non";
		}
	}
	if($_GET["operation"]=="ajouter_retour"){
		if(promotion::ajouter_retour($id,$id_produit,$prix,$date_fin)){
			echo "ok";
		}
		else{
			echo "non";
		}
	}
}

?>