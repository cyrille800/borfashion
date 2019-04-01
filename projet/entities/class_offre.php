<?php 

require_once("config.php");

class offre{
	private $titre;
	private $date_debut;
	private $date_fin;
	private $description;
	private $liste_produit;
	private $prix;

	public function set_titre($val){
		$this->titre=$val;
	}
	public function set_date_debut($val){
		$this->date_debut=$val;
	}
	public function set_date_fin($val){
		$this->date_fin=$val;
	}
	public function set_description($val){
		$this->description=$val;
	}
	public function set_liste_produit($val){
		$this->liste_produit=$val;
	}
	public function set_prix($val){
		$this->prix=$val;
	}

	public function get_titre(){
		return $this->titre;
	}
	public function get_prix(){
		return $this->prix;
	}
	public function get_date_debut(){
		return $this->date_debut;
	}
	public function get_date_fin(){
		return $this->date_fin;
	}
	public function get_description(){
		return $this->description;
	}
	public function get_liste_produit(){
		return $this->liste_produit;
	}
	public function __construct($a,$b,$c,$d,$e,$o){
		$this->titre=$a;
		$this->date_debut=$b;
		$this->date_fin=$c;
		$this->description=$d;
		$this->liste_produit=$e;
		$this->prix=$o;
	}
	public function ajouter(){
		config::connexion();
		$req=config::$bdd->prepare("insert into offre(titre,date_debut,date_fin,description,liste_produit,prix) VALUE(:titre,:date_debut,:date_fin,:description,:liste_produit,:prix)");
	  	if($req->execute([
		':titre'=>$this->get_titre(),
		':date_debut'=>$this->get_date_debut(),
		':date_fin'=>$this->get_date_fin(),
		':description'=>$this->get_description(),
		':liste_produit'=>$this->get_liste_produit(),
		':prix'=>intval($this->get_prix())]
	  	)){
	  		return 1;
	  	};
	  	return 0;
	}

	public static function verifier($titre,$valeur){
		$i=0;
		config::connexion();
		$req="select * from offre where ".$titre."='".$valeur."'";
		  	$requette=config::$bdd->query($req);
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

		public static function supprimer($id){
			config::connexion();
		$req=config::$bdd->prepare("delete from offre where id=:id");
	  	$req->execute([
		':id'=>intval($id)]
	  	) or die(print_r($req,true));
	}

		public static function verifier_produit_dans_offre($id_produit){
			config::connexion();
		$req=config::$bdd->prepare("select liste_produit from offre");
	  	$req->execute();
	  	while($data=$req->fetch()){
	  	$tableau=preg_split('/,/', $data[0], -1, PREG_SPLIT_NO_EMPTY);
	  	if(in_array($id_produit,$tableau)==true){
	  		return true;
	  	}
	  	}
	  	return false;
	}

	public static function conversion($nombre){
		$valeur="";
		if($nombre=="0"){
			$valeur="first";
		}
		if($nombre=="1"){
			$valeur="second";
		}
		if($nombre=="2"){
			$valeur="third";
		}
		if($nombre=="3"){
			$valeur="four";
		}
		if($nombre=="4"){
			$valeur="five";
		}
		if($nombre=="5"){
			$valeur="six";
		}
		if($nombre=="6"){
			$valeur="seven";
		}
		if($nombre=="7"){
			$valeur="eight";
		}
		if($nombre=="8"){
			$valeur="nine";
		}
		if($nombre=="9"){
			$valeur="ten";
		}
		if($nombre=="10"){
			$valeur="eleven";
		}
		if($nombre=="11"){
			$valeur="twelve";
		}
		if($nombre=="12"){
			$valeur="thirdteen";
		}
		if($nombre=="13"){
			$valeur="fourteen";
		}
		if($nombre=="14"){
			$valeur="fiveteen";
		}

		return $valeur;
	}

	public static function afficher(){
		config::connexion();
		$tableau=[];
		$tableaui=[];
		$i=0;
		  	$requette=config::$bdd->query("select * from offre order by id desc");
                		
                		echo '<ol class="carousel-indicators">';
                		while($value=$requette->fetch()){
					echo '
          <li data-target="#myCarousel" data-slide-to="'.$i.'"';
          if($i==0){
          	echo ' class="active"';
          }
          echo '></li>';
        $i++;
                		}
        echo '</ol><div class="carousel-inner">';
		$i=0;
		  	$requette=config::$bdd->query("select * from offre order by id desc");
                		while($value=$requette->fetch()){
                			$liste=preg_split('/,/',$value["liste_produit"], -1);
					echo '          <div class="carousel-item ';
					if($i==0){
						echo "active";
					}
					echo '">
            <img class="'.self::conversion($i).'-slide" src="../assets/img/offres/'.$value["titre"].'.jpg"" alt="First slide">
              <div class="carousel-caption text-left">
              	<div style="">
              	<h1 class="text-primary lead text-right" style="font-size:35px;" >'.$value["titre"].'</h1><br>
              	</div>
              	<select class="form-control bg-dark text-white col-md-6" style="cursor:pointer;margin-bottom:10%;margin-top:1%;">
  <option option="option" class="bg-white text-dark text-center" >Liste des produits</option>
  ';
  for($i=0;$i<sizeof($liste);$i++){
  	echo '<option option="'.produit::retourne_valeur("id",$liste[$i],"titre").'" class="bg-white text-dark text-center" >'.produit::retourne_valeur("id",$liste[$i],"titre").'</option>';
  }

  echo '

</select>
                <p class="text-dark text-center" style="background:white;padding:2%;width:auto;cursor:pointer;opacity:0.7;">'.$value["description"].'<br><br>disponible : <span class="text-danger">'.$value["date_debut"].' '.strtoupper('à').' '.$value["date_fin"].'</span></p>
                <h1 class="text-primary lead text-center" style="font-size:35px;" > $ '.$value["prix"].'</h1>
            </div>
          </div>';
        $i++;
                		}
        echo '</div>';

	}
}

?>