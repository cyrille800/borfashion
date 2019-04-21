<?php 

require_once("config.php");
require_once("class_offre.php");
require_once "class_promotion.php";

		    config::connexion();

class Produit{
	private $id;
	private $proprietaire;
	private $titre;
	private $prix;
	private $quantite;
	private $genre;
	private $categorie;
	private $description;

	public function get_id(){
		return $this->id;
	}
	public function get_proprietaire(){
		return $this->proprietaire;
	}
	public function get_titre(){
		return $this->titre;
	}
	public function get_prix(){
		return $this->prix;
	}
	public function get_quantite(){
		return $this->quantite;
	}
	public function get_genre(){
		return $this->genre;
	}
	public function get_categorie(){
		return $this->categorie;
	}
	public function get_description(){
		return $this->description;
	}

	public function set_id(){
		return $this->id;
	}
	public function set_proprietaire($valeur){
		$this->proprietaire=$valeur;
	}
	public function set_titre($valeur){
		$this->titre=$valeur;
	}
	public function set_prix($valeur){
		$this->prix=$valeur;
	}
	public function set_quantite($valeur){
		$this->quantite=$valeur;
	}
	public function set_genre($valeur){
		$this->genre=$valeur;
	}
	public function set_categorie($valeur){
		$this->categorie=$valeur;
	}
	public function set_description($valeur){
		$this->description=$valeur;
	}

	public function __construct($a,$b,$c,$d,$e,$f,$g,$h){
		$this->set_id($a);
		$this->set_proprietaire($b);
		$this->set_titre($c);
		$this->set_prix($d);
		$this->set_quantite($e);
		$this->set_genre($f);
		$this->set_categorie($g);
		$this->set_description($h);
	}

	public function ajouter(){
		$req=config::$bdd->prepare("insert into produit(proprietaire,titre,prix,quantite,genre,categories,description) VALUE(:proprietaire,:titre,:prix,:quantite,:genre,:categories,:description)");
		if(intval($this->get_prix())<=0 || intval($this->get_quantite())<=0){
			echo "saisir des valeurs correcte<br>";
		}
		else{
	  	if($req->execute([
		':prix'=>intval($this->get_prix()),
		':quantite'=>intval($this->get_quantite()),
		':proprietaire'=>$this->get_proprietaire(),
		':titre'=>$this->get_titre(),
		':genre'=>$this->get_genre(),
		':categories'=>$this->get_categorie(),
		':description'=>$this->get_description()]
	  	)){
	  		return 1;
	  	};
		}
	  	return 0;
	  	
	}

	public static function supprimer($id){
		$req=config::$bdd->prepare("delete from produit where id=:id");
	  	$req->execute([
		':id'=>intval($id)]
	  	) or die(print_r($req,true));
	}

	public static function afficher(){
		$tableau=[];
		$tableaui=[];
		  	$requette=config::$bdd->query("select * from produit order by id desc");
                		while($value=$requette->fetch()){
					echo '<div class="col-md-6" style="margin:auto;margin-bottom:5%;" identifiant="'.$value["id"].'" etat="true">
                                <div class="card">
                                <div>
                                    <div class="card-cup card-cupss ';
                                    if(strtolower($value["genre"])=="homme"){
                                    	echo "bg-danger";
                                    }
                                    if(strtolower($value["genre"])=="femme"){
                                    	echo "bg-primary";
                                    }
                                    echo ' text-white justify-content-center" ';
                                    if(strtolower($value["genre"])=="enfant"){
                                    	echo 'style="background:#FF1493;"';
                                    }
                                    echo '>
                                        '.$value["genre"].'
                                    </div>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title bv text-primary">'.$value["titre"].'</h5>
                                        <p class="card-text"><center><img src="../assets/img/clothes/'.$value["id"].'.jpg" alt="" class="chan"></center></p>
                                        <div class="text-primary font-13 categorie">'.$value["categories"].'</div>
                                        <div class="text-muted font-13">'.$value["description"].'</div>
                                        <hr>
                                        <div class="flexbox"><a href="#">QUANTITE :<span><qte> '.$value["quantite"].'</qte></span></a>
                                            <div><span class="text-muted mr-4"><i class="far fa-dollar-sign mr-2"></i><prix>'.$value["prix"].'</prix></span><a class="dropdown-toggle no-arrow" data-toggle="dropdown" ><i class="ti-more-alt" style="color:blue;cursor:pointer;"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right" style="cursor:pointer;"><span class="dropdown-item d-flex align-items-center modif" cni="'.$value["id"].'"><i class="ti-pencil-alt mr-3"></i>Edit</span><span class="dropdown-item d-flex align-items-center delete" cni="'.$value["id"].'"><i class="ti-close mr-3"></i>Remove</span><span class="dropdown-item d-flex align-items-center promotion" cni="'.$value["id"].'" prix="'.$value["prix"].'"><i class="ti-star mr-3"></i>promotion</span></div>
                                            </div>
 </div>
                                    </div>
                                </div>
                            </div>';
                		}

	}

	public static function afficher_dans_offre(){
		$tableau=[];
		$tableaui=[];
		  	$requette=config::$bdd->query("select * from produit order by id desc");
		  	$i=0;
                		while($valeur=$requette->fetch()){
					echo ' <div class="io" trier="oui" style="cursor: pointer;';
					if($i!=0){
						echo "display:none;";
					}
					echo'" identifiant="'.$valeur['id'].'" sexe="'.$valeur['genre'].'" prix="'.$valeur['prix'].'" nom="'.$valeur['titre'].'" categorie="'.$valeur['categories'].'" tour="';

					if($i==0){
						echo 'oui';
					}
					else{
						echo 'non';
					}
					echo '" qte="'.$valeur['quantite'].'" disponible="oui">
                                                    <div class="card">
                                                        <div class="card-cup card-cupss ';

                                                        if(strtolower($valeur["genre"])=="homme"){
                                    	echo "bg-danger";
                                    }
                                    if(strtolower($valeur["genre"])=="femme"){
                                    	echo "bg-primary";
                                    }
                                    echo ' text-white justify-content-center" ';
                                    if(strtolower($valeur["genre"])=="enfant"){
                                    	echo 'style="background:#FF1493;"';
                                    }

                                    echo '>
                                                            '.$valeur['titre'].'
                                                        </div>
                                                        <div class="card-body">
                                                            <p class="card-text"><center><img src="../assets/img/clothes/'.$valeur['id'].'.jpg" alt="" class="chan" qte="'.$valeur['quantite'].'"><center></p>
                                                            <hr>
                                                            <div class="flexbox"><a href="#">QUANTITE :<span><qte> '.$valeur['quantite'].'</qte></span></a>
                                                            <div><span class="text-muted mr-4"><i class="far fa-dollar-sign mr-2"></i><prix> '.$valeur['prix'].'</prix></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                        $i=1;
                		}

	}


		public static function afficher_dans_boutique($v){
		$tableau=[];
		$tableaui=[];
		  	$requette=config::$bdd->query("select * from produit where categories='".$v."' order by id desc ");
		  	$i=0;
		  	$offre=0;
                		while($valeur=$requette->fetch()){
                		$chiffre=rand (0,1);
if(offre::verifier_produit_dans_offre($valeur['id'])){
	$offre=1;
}
					echo '<div  style="cursor:pointer;" id="'.$valeur['id'].'" class="column animatable bounceIn ';
					if($chiffre==0){
						echo "is-3";
					}
					echo '">
                                    <div class="flat-card ';
					if($chiffre==1){
						echo "is-long";
					}
                                    echo '" style="position:relative;">
                                        <div class="';
					if($chiffre==1){
						echo "left-image is-md";
					}
					else{
						echo "image";
					}
                                        echo '">';
				if(promotion::verifier($valeur['id'])!=0){
					echo '<span class="badge badge-info" style="position:absolute;left:10px;top:10px">Promotion</span>';
				}
                                        echo '
                                            <img src="../assets/img/clothes/'.$valeur['id'].'.jpg" alt="">
                                        </div>
                                        <div class="product-info ';
if($chiffre==0){
	echo " has-text-centered";
}
                                        echo '"';
if($chiffre==0){
	echo " style='position:absolute;top:68%;' ";
}
                                        echo '>
                                            <a href="product.php"><h3 class="product-name ';
if($chiffre==1){
	echo " featured-md";
}
                                            echo '">'.$valeur['titre'].'</h3><categorie style="display:none;">'.$valeur['categories'].'</categorie><genre style="display:none;">'.$valeur['genre'].'</genre></a>
                                            <p class="product-description">'.$valeur['description'].'</p>
                                            <p style="margin-top:-10%;" class="product-price ';
if($chiffre==1){
	echo " is-on-sale";
}
                                            echo'"><prix>
                                                '.$valeur['prix'].'</prix>
                                            </p>
                                        </div>
        
                                        <div class="actions">
                                            <div class="add" id="'.$valeur['id'].'" nom="'.$valeur['titre'].'" prix="'.$valeur['prix'].'"><i data-feather="shopping-cart" class="has-simple-popover" data-content="Add to Cart" data-placement="top"></i></div>
                                            <div class="like"><i data-feather="heart" class="has-simple-popover" data-content="Add to Wishlist" data-placement="top"></i></div>
                                        </div>';
if($offre==1){
	echo '<div class="on-sale">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign has-simple-popover" data-content="This product is on sale" data-placement="top"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                        </div>';
                                        $offre=0;
}

                                    echo '</div>
                                </div>';
					$i++;
                		}

	}


		public function modifier($id){
		$req=config::$bdd->prepare("update produit set proprietaire=:proprietaire,titre=:titre,prix=:prix,quantite=:quantite,genre=:genre,categories=:categories,description=:description where id=:id");
	  			if(intval($this->get_prix())<=0 || intval($this->get_quantite())<=0){
			echo "saisir des valeurs correcte<br>";
		}else{
	  	$req->execute([
	  	':id'=>intval($id),
		':prix'=>floatval($this->get_prix()),
		':quantite'=>intval($this->get_quantite()),
		':proprietaire'=>$this->get_proprietaire(),
		':titre'=>$this->get_titre(),
		':genre'=>$this->get_genre(),
		':categories'=>$this->get_categorie(),
		':description'=>$this->get_description()]
	  	) or die(print_r($req,true));
		}
	}

	public static function verifier($valeur){
		$i=0;
		  	$requette=config::$bdd->query("select * from produit where titre='".$valeur."'");
                		while($data=$requette->fetch()){
		$i++;                		
	}

	if($i>0){
		return false;
	}
	else{
		return true;
	}

	}

		public static function verifiers($valeur){
		$i=0;
		  	$requette=config::$bdd->query("select * from produit where titre='".$valeur."'");
                		while($data=$requette->fetch()){
		$i++;                		
	}

	if($i>1){
		return false;
	}
	else{
		return true;
	}

	}

		public static function retourne_valeur($v,$id,$val){
		  	$requette=config::$bdd->query("select * from produit where ".$v."='".$id."'");
                		while($data=$requette->fetch()){
  			return $data[$val];
	}
	}

}

?>