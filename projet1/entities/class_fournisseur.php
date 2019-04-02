<?php
require "config.php"; 
	config::connexion();

class fournisseur{
	private $id;
	private $prenom;
	private $genre;
	private $mail;
	private $numero;
	private $pays;
	private $ville;
	private $categorie;

	public function get_id(){
		return $this->id;
	}
	public function get_prenom(){
		return $this->prenom;
	}
	public function get_mail(){
		return $this->mail;
	}
	public function get_numero(){
		return $this->numero;
	}
	public function get_pays(){
		return $this->pays;
	}
	public function get_genre(){
		return $this->genre;
	}
	public function get_categorie(){
		return $this->categorie;
	}
	public function get_ville(){
		return $this->ville;
	}

	public function set_id(){
		return $this->id;
	}
	public function set_prenom($valeur){
		$this->prenom=$valeur;
	}
	public function set_mail($valeur){
		$this->mail=$valeur;
	}
	public function set_numero($valeur){
		$this->numero=$valeur;
	}
	public function set_pays($valeur){
		$this->pays=$valeur;
	}
	public function set_genre($valeur){
		$this->genre=$valeur;
	}
	public function set_categorie($valeur){
		$this->categorie=$valeur;
	}
	public function set_ville($valeur){
		$this->ville=$valeur;
	}

	public function __construct($a,$b,$c,$d,$e,$f,$g,$h){
		$this->set_id($a);
		$this->set_prenom($b);
		$this->set_genre($c);
		$this->set_mail($d);
		$this->set_numero($e);
		$this->set_pays($f);
		$this->set_ville($g);
		$this->set_categorie($h);
	}

	public function ajouter(){
		$req=config::$bdd->prepare("insert into fournisseur(prenom,genre,mail,numero,pays,ville,type_categorie) VALUE(:prenom,:genre,:mail,:numero,:pays,:ville,:type_categorie)");
	  	if($req->execute([
		':numero'=>intval($this->get_numero()),
		':pays'=>$this->get_pays(),
		':prenom'=>$this->get_prenom(),
		':mail'=>$this->get_mail(),
		':genre'=>$this->get_genre(),
		':type_categorie'=>$this->get_categorie(),
		':ville'=>$this->get_ville()]
	  	)){
	  		return 1;
	  	};
	  	return 0;
	  	
	}

	public static function supprimer($id){
		$req=config::$bdd->prepare("delete from fournisseur where id=:id");
	  	$req->execute([
		':id'=>intval($id)]
	  	) or die(print_r($req,true));
	}

	public static function afficher(){
		$tableau=[];
		$tableaui=[];
		  	$requette=config::$bdd->query("select * from fournisseur order by id desc");
                		while($data=$requette->fetch()){
					echo '    <div class="col-md-6" style="margin:auto;margin-bottom:5%;" identifiant="'.$data["id"].'" etat="true">
                                <div class="card">
                                    <div class="card-cup text-white justify-content-center" style="background:#343a40;">
                                        <h5 class="mb-0"><i class="far fa-user-alt"></i>&nbsp;&nbsp;&nbsp;<prenom>'.$data["prenom"].'</prenom></h5>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-primary" style="text-align:center;"><numero>'.$data["numero"].'</numero></h5>
                                        <center><img src="../assets/img/contact/'.$data["id"].'.jpg" alt="" style="border-radius:100%;margin:auto;margin-bottom:5%;" width="120px" height="120px" class="chan"></center>
                                        <div class="text-primary font-13" style="text-align:center;"><mail>'.$data["mail"].'</mail></div>
                                        <div class="text-muted font-13"  style="text-align:center;"><categorie>'.$data["type_categorie"].'</categorie></div>
                                        <hr>
                                        <div class="flexbox"><a href="#"> <ville>'.$data["ville"].'</ville> </a>
                                            <div><span class="text-muted mr-4"><i class="far fa-flag mr-2"></i><pays>'.$data["pays"].'</pays></span><a class="dropdown-toggle no-arrow" data-toggle="dropdown"><i class="ti-more-alt" style="color:blue;cursor:pointer;"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item d-flex align-items-center mailing" cni="'.$data["id"].'"><i class="ti-email mr-3"></i>send mail</a><a class="dropdown-item d-flex align-items-center modif" cni="'.$data["id"].'"><i class="ti-pencil-alt mr-3"></i>Edit</a><a class="dropdown-item d-flex align-items-center delete"  cni="'.$data["id"].'"><i class="ti-close mr-3"></i>Remove</a></div>
                                            </div>

                                            

                                        </div>
                                    </div>
                                </div>
    </div>';
                		}

	}

		public function modifier($id){
		$req=config::$bdd->prepare("update fournisseur set prenom=:prenom,mail=:mail,numero=:numero,pays=:pays,type_categorie=:type_categorie,ville=:ville where id=:id");
	  	$req->execute([
	  	':id'=>intval($id),
		':numero'=>intval($this->get_numero()),
		':pays'=>$this->get_pays(),
		':prenom'=>$this->get_prenom(),
		':mail'=>$this->get_mail(),
		':type_categorie'=>$this->get_categorie(),
		':ville'=>$this->get_ville()]
	  	) or die(print_r($req,true));
	}

	public static function verifier($valeur){
		$i=0;
		  	$requette=config::$bdd->query("select * from fournisseur where mail='".$valeur."'");
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
		  	$requette=config::$bdd->query("select * from fournisseur where mail='".$valeur."'");
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
		  	$requette=config::$bdd->query("select * from fournisseur where ".$v."='".$id."'");
                		while($data=$requette->fetch()){
  			return $data[$val];
	}

	}
	
}





?>