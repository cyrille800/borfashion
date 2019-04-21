<?php 

require_once("config.php");
require_once("class_produit.php");

class promotion{
	private $id_produit;
	private $prix;
	private $date_fin;

	function get_id_produit(){
		return $this->id_produit;
	}
	function get_prix(){
		return $this->prix;
	}
	function get_date_fin(){
		return $this->date_fin;
	}
	function __construct($a,$b,$c){
		$this->id_produit=$a;
		$this->prix=$b;
		$this->date_fin=$c;
	}

    function ajouter(){
		config::connexion();
		$req=config::$bdd->prepare("insert into promotion(id_produit,prix,date_fin) VALUE(:id_produit,:prix,:date_fin)");
	  	$req->bindValue(":id_produit",$this->get_id_produit());
	  	$req->bindValue(":prix",$this->get_prix());
	  	$req->bindValue(":date_fin",$this->get_date_fin());
	  	if($req->execute()){
	  	return 1;	
	  	}
	  	return 0;
    }

    function ajouter_retour($id_offre,$id_produit,$prix,$date_fin){
		config::connexion();
		$req=config::$bdd->prepare("insert into promotion(id,id_produit,prix,date_fin) VALUE(:id,:id_produit,:prix,:date_fin)");
		$req->bindValue(":id",$id_offre);
	  	$req->bindValue(":id_produit",$id_produit);
	  	$req->bindValue(":prix",$prix);
	  	$req->bindValue(":date_fin",$date_fin);
	  	if($req->execute()){
	  	return 1;	
	  	}
	  	return 0;
    }

    static function verifier($id){
		config::connexion();
		$req=config::$bdd->prepare(" select * from promotion where id_produit=:id_produit");
	  	if($req->execute([
        ':id_produit'=>$id]
	  	)){
	  		return $req->rowCount();
	  	}
	  	return -1;    	
    }

    static function supprimer($id){
		config::connexion();
		$req=config::$bdd->prepare("delete from promotion where id=:id");
	  	$req->execute([
        ':id'=>$id]
	  	) or die("non");   	
    }

    static function modifier($id,$prix,$date){
		config::connexion();
		$req=config::$bdd->prepare("update promotion set prix=:prix,date_fin=:date_fin where id=:id");
	  	if($req->execute([
        ':id'=>$id,
    	':prix'=>$prix,
    	':date_fin'=>$date]
	  	)){return 1;}else{
	  		return 0;
	  	}  	
    }

    static function afficher(){
    	config::connexion();
$requette=config::$bdd->query("select * from promotion order by id desc");
$i=0;
while($value=$requette->fetch()){
	$i++;
	$nom=produit::retourne_valeur("id",$value["id_produit"],"titre");
	$quantite=produit::retourne_valeur("id",$value["id_produit"],"quantite");
	$prix=produit::retourne_valeur("id",$value["id_produit"],"prix");
	echo '<tr style="display:none;" id_produit="'.$value["id_produit"].'" rechercher="oui" supprimer="non" id_offre="'.$value["id"].'" nom_produit="'.$nom.'" prix="'.$value["prix"].'" prix_precedent="'.$value["prix"].'" prix_suivant="'.$value["prix"].'" date_precedente="'.$value["date_fin"].'" date_suivante="'.$value["date_fin"].'" deja_supprimer="non">
                                                    <th scope="row">'.$i.'</th>
                                                    <td align="center">'.$nom.'</td>
                                                    <td class="text-primary" align="center"> '.$value["prix"].' $</td>
                                                    <td align="center">'.$value["date_fin"].'</td>
                                                    <td align="center">&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger bg-dark annuler" style="padding:4px;border-radius:4px;display:none;cursor:pointer" id_offre="'.$value["id"].'">annulé</span><a href="#" class="io" operation="supprimer"><i class="material-icons prefix text-danger" style="vertical-align:bottom;">delete</i></a>&nbsp;&nbsp;&nbsp;<a href="#" class="io" operation="modifier"><i class="material-icons prefix text-warning" style="vertical-align:bottom;">update</i></a>&nbsp;&nbsp;&nbsp;<a href="#" class="oui" quantite="'.$quantite.'" prix_debut="'.$prix.'" id_produit="'.$value["id_produit"].'" ><i class="material-icons prefix text-info" style="vertical-align:bottom;">info</i></a></td>
                                                </tr>';
}
    }

}

?>