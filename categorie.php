<?php 
	require_once "config.php";
		    config::connexion();

	if((isset($_GET["title"]) && !empty($_GET["title"])) && (isset($_GET["operation"]) && $_GET["operation"]=="ajouter"))
	{
		extract($_GET);
		$req="select * from categorie where titre='".$title."'";
  	$requette=config::$bdd->query($req);
                		$i=0;
                		while($data=$requette->fetch()){
                		$i++;
                		}
                		if($i==0){
                		$req=config::$bdd->prepare("insert into categorie(titre) VALUE(:titre)");
						  	$req->execute([
							':titre'=>$title]
						  	) or die(print_r($req,true));
						  	echo "ok";
                		}
                		else{
                			echo "existe deja";
                		}

    }

   	if((isset($_GET["title"]) && !empty($_GET["title"])) && (isset($_GET["operation"]) && $_GET["operation"]=="supprimer"))
	{
		extract($_GET);
		$req="select * from categorie where titre='".$title."'";
  	$requette=config::$bdd->query($req);
                		$i=0;
                		while($data=$requette->fetch()){
                		$i++;
                		}
                		if($i!=0){
                		$req=config::$bdd->prepare("delete from categorie where titre=:titre");
						  	$req->execute([
							':titre'=>$title]
						  	) or die(print_r($req,true));
						  	echo "ok";
                		}
                		else{
                			echo "n'existe pas";
                		}

    }

    if(isset($_GET["operation"]) && $_GET["operation"]=="contenu"){
 		$req="select * from categorie order by titre asc";
  	$requette=config::$bdd->query($req);
  	$i=0;
                		while($data=$requette->fetch()){
                			$i++;
                		echo $data[0]."<br>";
                		} 	
    }

        if(isset($_GET["operation"]) && $_GET["operation"]=="select"){
 		$req="select * from categorie";
  	$requette=config::$bdd->query($req);
  						echo "<option value='option'>Catégories</option>"; 
                		while($data=$requette->fetch()){
                		echo "<option value='".$data[0]."'>".$data[0]."</option>";
                		} 	
    }

?>