<?php 

	require "config.php";

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
                                        <p class="card-text"><img src="../assets/img/clothes/'.$value["id"].'.jpg" alt="" class="chan"></p>
                                        <div class="text-primary font-13 categorie">'.$value["categories"].'</div>
                                        <div class="text-muted font-13">'.$value["description"].'</div>
                                        <hr>
                                        <div class="flexbox"><a href="#">QUANTITE :<span><qte> '.$value["quantite"].'</qte></span></a>
                                            <div><span class="text-muted mr-4"><i class="far fa-dollar-sign mr-2"></i><prix>'.$value["prix"].'</prix></span><a class="dropdown-toggle no-arrow" data-toggle="dropdown" ><i class="ti-more-alt" style="color:blue;cursor:pointer;"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right"><span class="dropdown-item d-flex align-items-center modif" cni="'.$value["id"].'"><i class="ti-pencil-alt mr-3"></i>Edit</span><span class="dropdown-item d-flex align-items-center delete" cni="'.$value["id"].'"><i class="ti-close mr-3"></i>Remove</span></div>
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
                                                            <p class="card-text"><img src="../assets/img/clothes/'.$valeur['id'].'.jpg" alt="" class="chan" qte="'.$valeur['quantite'].'"></p>
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
                		while($valeur=$requette->fetch()){
                		$chiffre=rand (0,1);

					echo '<div class="column ';
					if($chiffre==0){
						echo "is-3";
					}
					echo '">
                                    <div class="flat-card ';
					if($chiffre==1){
						echo "is-long";
					}
                                    echo '">
                                        <div class="';
					if($chiffre==1){
						echo "left-image is-md";
					}
					else{
						echo "image";
					}
                                        echo '">
                                            <img src="../assets/img/clothes/'.$valeur['id'].'.jpg" alt="">
                                        </div>
                                        <div class="product-info ';
if($chiffre==0){
	echo " has-text-centered";
}
                                        echo '">
                                            <a href="product.php"><h3 class="product-name ';
if($chiffre==1){
	echo " featured-md";
}
                                            echo '">'.$valeur['titre'].'</h3></a>
                                            <p class="product-description">'.$valeur['description'].'</p>
                                            <p class="product-price ';
if($chiffre==1){
	echo " is-on-sale";
}
                                            echo'">
                                                '.$valeur['prix'].'
                                            </p>
                                        </div>
        
                                        <div class="actions">
                                            <div class="add" id="'.$valeur['id'].'" nom="'.$valeur['titre'].'" prix="'.$valeur['prix'].'"><i data-feather="shopping-cart" class="has-simple-popover" data-content="Add to Cart" data-placement="top"></i></div>
                                            <div class="like"><i data-feather="heart" class="has-simple-popover" data-content="Add to Wishlist" data-placement="top"></i></div>
                                        </div>
                                    </div>
                                </div>';
					$i++;
                		}

	}


		public function modifier($id){
		$req=config::$bdd->prepare("update produit set proprietaire=:proprietaire,titre=:titre,prix=:prix,quantite=:quantite,genre=:genre,categories=:categories,description=:description where id=:id");
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