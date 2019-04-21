<?php 

	require_once "class_fournisseur.php";

	function verification_post($tableau){

		for($i=0;$i<sizeof($tableau);$i++){
			if(!isset($_POST[$tableau[$i]]) || empty($_POST[$tableau[$i]])){
				return 0;

			}
		}
		return 1;
	}
		    	if(verification_post(['prenom','mail','numero']) && (($_POST["pays"]!="option" && $_POST["categorie"]!="option") && $_POST["ville"]!="option"))
	{
				if(isset($_POST["genre"])){
			$genres="femme";
		}
		else{
			$genres="homme";
		}
		extract($_POST);
		$p=new fournisseur(0,$prenom,$genres,$mail,$numero,$pays,$ville,$categorie);
		if(fournisseur::verifier($mail)){
		if($p->ajouter()){
			$id=fournisseur::retourne_valeur("mail",$mail,"id");
			rename("../view/assets/img/contact/tmp.jpg", "../view/assets/img/contact/".$id.".jpg");
			echo "ok";
		}else{
			echo "erreur de requette";
		}
		}
		else{
			echo $mail." existe déja";
		}

	}
	else{
		if(verification_post(['prenoms','mail','numero'])){

			if(($_POST["pays"]!="option" && $_POST["categorie"]!="option") && $_POST["ville"]!="option"){
				extract($_POST);
			$p=new fournisseur(0,$prenoms,"",$mail,$numero,$pays,$ville,$categorie);
			if(fournisseur::verifier($mail)){
			$p->modifier($id);
			echo "ok";
			}else{
				echo "ce mail existe deja";
			}
			}
			else{
				echo "remplir les champs";
			}
		}else{
					if((isset($_GET["operation"]) && !empty($_GET["operation"])) && ($_GET["operation"]=="suppression")){
			fournisseur::supprimer($_GET["id"]);
			echo "oui";
		}
		else{
			if((isset($_GET["operation"]) && !empty($_GET["operation"])) && ($_GET["operation"]=="afficher")){
				$data=fournisseur::afficher();
				foreach ($data as $key => $value) {
					echo '<div class="col-md-6" style="margin:auto;margin-bottom:5%;">
                                <div class="card">
                                    <div class="card-cup ';
                                    if($value["genre"]=="homme"){
                                    	echo "bg-danger";
                                    }
                                    if($value["genre"]=="femme"){
                                    	echo "bg-primary";
                                    }
                                    echo ' text-white justify-content-center" ';
                                    if($value["genre"]=="enfant"){
                                    	echo 'style="background:#FF1493;"';
                                    }
                                    echo '>
                                        <h5 class="mb-0">'.$value["genre"].'</h5>
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-primary">'.$value["titre"].'</h5>
                                        <p class="card-text"><img src="../assets/img/contact/'.$value["id"].'.jpg" alt=""></p>
                                        <div class="text-muted font-13">'.$value["description"].'</div>
                                        <hr>
                                        <div class="flexbox"><a href="#">QUANTITE : '.$value["quantite"].'</a>
                                            <div><span class="text-muted mr-4"><i class="far fa-dollar-sign mr-2"></i>'.$value["prix"].'</span><a class="dropdown-toggle no-arrow" data-toggle="dropdown"><i class="ti-more-alt" style="color:blue;cursor:pointer;"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right"><span class="dropdown-item d-flex align-items-center modif" cni="'.$value["id"].'"><i class="ti-pencil-alt mr-3"></i>Edit</span><span class="dropdown-item d-flex align-items-center delete" cni="'.$value["id"].'"><i class="ti-close mr-3"></i>Remove</span></div>
                                            </div>

                                            

                                        </div>
                                    </div>
                                </div>
                            </div>';
				}
			}
			else{
				if((isset($_GET["operation"]) && !empty($_GET["operation"])) && ($_GET["operation"]=="un_resultat")){

					echo fournisseur::retourne_valeur("id",$_GET["valeur"],$_GET["rec"]);
				
			}else{
				echo "remplir le formualire";
			}
			}
		}
		}
	}

?>