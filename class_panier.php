<?php 

require_once("config.php");

class panier{
    private $id_produit;
    private $quantite;

    function get_id_produit(){
        return $this->id_produit;
    }
    function get_quantite(){
        return $this->quantite;
    }
    function __construct($a,$b){
        $this->id_produit=$a;
        $this->quantite=$b;
    }
    function ajouter(){
		config::connexion();
		$req=config::$bdd->prepare("insert into panier(id_produit,quantite) VALUE(:id_produit,:quantite)");
	  	if($req->execute([
        ':id_produit'=>$this->get_id_produit(),
        ':quantite'=>$this->get_quantite()]
	  	)){
	  		return 1;
	  	};
	  	return 0;
    }

    static function suprimer($id){
        config::connexion();
		$req=config::$bdd->prepare("delete from panier where id_produit=:id_produit");
	  	if($req->execute([
        ':id_produit'=>intval($id)]
	  	)){
	  		return 1;
	  	};
	  	return 0;       
    }

    static function modifier($id,$qte){
        config::connexion();
		$req=config::$bdd->prepare("update panier set quantite=:quantite where id_produit=:id_produit");
	  	if($req->execute([
            ':id_produit'=>intval($id),
          ':quantite'=>intval($qte)]
            )){
                return true;
            }else{
                return false;
            }
    }

    static function afficher1(){
        config::connexion();
        $requette=config::$bdd->query("select panier.*,produit.titre,produit.prix from panier,produit where panier.id_produit=produit.id");
        while($value=$requette->fetch()){
            echo 	'<li class="clearfix" id="'.$value[0].'"><img src="../assets/img/clothes/'.$value[0].'.jpg" alt=""><span class="item-meta"><span class="item-name">'.$value[3].'</span><span class="item-price">$'.$value[4].'</span></span><span class="quantity"><input class="input is-rounded" type="number" value="'.$value[1].'"></span><span class="remove-item" id="'.$value[0].'" prix="'.$value[4].'"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x has-simple-popover" data-content="Remove from Cart" data-placement="top"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></span></li>';
        }
    }
	  	
}

?>