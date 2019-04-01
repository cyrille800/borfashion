<?php 

include "../../entities/class_panier.php";

if($_GET["operation"]=="ajouter"){
	extract($_GET);
	$vav=[];
	$vav[0][0]=$id;
	$vav[0][1]=$nom;
	$vav[0][2]=$prix;
	$vav[0][3]=1;
	if(isset($_COOKIE["panier"])){
		$vav=[];
		$tableau=json_decode($_COOKIE["panier"]);
		$i=0;
		$j=0;
		foreach ($tableau as $key => $value) {
			if($value[0]==$id){
				$i++;
			}
			$vav[$j][0]=$value[0];
			$vav[$j][1]=$value[1];
			$vav[$j][2]=$value[2];
			$vav[$j][3]=$value[3];
			$j++;
		}
			$vav[$j][0]=$id;
	$vav[$j][1]=$nom;
	$vav[$j][2]=$prix;
	$vav[$j][3]=1;
	$n=new panier($id,1);
if($i==0){
	if($n->ajouter()){
			setcookie("panier",json_encode($vav),time()+100000);
	}
}	
	}
	else{
		$n=new panier($id,1);
	if($n->ajouter()){
			setcookie("panier",json_encode($vav),time()+100000);
	}
	}
}

if($_GET["operation"]=="lires"){
	if(isset($_COOKIE["panier"])){
	$tableau=json_decode($_COOKIE["panier"]);
	$taille=sizeof($tableau);
	$taille1=$taille-1;
	echo $tableau[$taille1][0].";".$tableau[$taille1][1].";".$tableau[$taille1][2].";".$tableau[$taille1][3];
}
}

if($_GET["operation"]=="lire"){
	if(isset($_COOKIE["panier"])){
		$tableau=json_decode($_COOKIE["panier"]);
				$j=0;
		foreach ($tableau as $key => $value) {
			if($j==intval($_GET["numero"])){
echo $value[0].";".$value[1].";".$value[2].";".$value[3];
			}
			$j++;
		}
}
}

if($_GET["operation"]=="compter"){
	$tableau=[];
	if(isset($_COOKIE["panier"])){
		$tableau=json_decode($_COOKIE["panier"]);
	}
	echo sizeof($tableau);
}

if($_GET["operation"]=="modifier"){
	extract($_GET);

if(isset($_COOKIE["panier"])){
			$tableau=json_decode($_COOKIE["panier"]);
		$id1=$id;
		$qte1=$qte;
		$i=0;
		foreach ($tableau as $key => $value) {
			if($value[0]==$id1){
				$tableau[$i][3]=$qte1;
			}
			$i++;
		}
		if(panier::modifier($id,$qte)){
			setcookie("panier",json_encode($tableau),time()+100000);
		}
		}

}

if($_GET["operation"]=="supprimer"){
	if(isset($_COOKIE["panier"])){
		extract($_GET);
		$tableau=json_decode($_COOKIE["panier"]);
		$id1=$id;
		$i=0;
		$tableaux=[];
		foreach ($tableau as $key => $value) {
			if($value[0]!=$id1){
			$tableaux[$i][0]=$value[0];
			$tableaux[$i][1]=$value[1];
			$tableaux[$i][2]=$value[2];
			$tableaux[$i][3]=$value[3];
			$i++;
			}
		}
		if(panier::suprimer($id1)){
			var_dump($tableaux);
			setcookie("panier",json_encode($tableaux),time()+100000);
			}	
		}
}

if($_GET["operation"]=="trier"){
		extract($_GET);
		$tableau=[$nom,$prix,$genre,$categorie];
			setcookie("trier",json_encode($tableau),time()+100000);	
}

if($_GET["operation"]=="organiser"){
		extract($_GET);
		if(isset($_COOKIE["trier"])){
$tableau=json_decode($_COOKIE["trier"]);
			$noms=$tableau[0];
			$prixs=$tableau[1];
			$genres=$tableau[2];
			$categories=$tableau[3];
			if($noms==""){
			if(intval($prix)>=0 && intval($prix)<=intval($prixs) ){
			if(strpos(strtolower($genres),strtolower($genre)) !== false){
			if(strpos(strtolower($categories),strtolower($categorie)) !== false){
				echo "oui";
			}				
			}				
			}
			}
			else{
			if(strpos(strtolower($nom),strtolower($noms)) !== false){
			if(intval($prix)>=0 && intval($prix)<=intval($prixs) ){
			if(strpos(strtolower($genres),strtolower($genre)) !== false){
			if(strpos(strtolower($categories),strtolower($categorie)) !== false){
				echo "oui";
			}				
			}				
			}	
			}
			}
		}
		else{
			echo "n'exste pas";
		}
		}


?>