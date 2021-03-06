<?PHP
include "config2.php";
class PublicationP{
function afficherPublication($Publication){
		echo "Titre: ".$Publication->gettitre()."<br>";
		echo "Catégorie: ".$Publication->getcate()."<br>";
		echo "Date_Debut: ".$Publication->getDD()."<br>";
		echo "Date_Fin: ".$Publication->getDF()."<br>";
		echo "Description: ".$Publication->getdesc()."<br>";
	    echo "type: ".$Publication->gettype()."<br>";
	}
	function calculerSalaire($employe){
		echo $employe->getNbHeures() * $employe->getTarifHoraire();
	}
	function ajouterPublication($Publication){
		$sql="insert into publications (Description,Categorie,Date_debut,Date_fin,Titre,Type) values (:Description, :Categorie,:Date_debut,:Date_fin,:Titre,:Type)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $titre=$Publication->gettitre();
        $desc=$Publication->getdesc();
        $cate=$Publication->getcate();
        $DD=$Publication->getDD();
        $DF=$Publication->getDF();
		$type=$Publication->gettype();
		$req->bindValue(':Description',$desc);
		$req->bindValue(':Titre',$titre);
		$req->bindValue(':Categorie',$cate);
		$req->bindValue(':Date_debut',$DD);
		$req->bindValue(':Date_fin',$DF);
		$req->bindValue(':Type',$type);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherPublicationP(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		 $tableau=array();
		$tabeaui=array(
		'id_pub'=>'',
		'Description'=>'',
		'Categorie'=>'',
		'Date_debut'=>'',
		'Date_fin'=>'',
		'Titre'=>'',
		'Type'=>''
		);
		$sql='select * From publications ';
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		$liste->execute();
		$i=0;
		while($data=$liste->fetch()){
			
			$tabeaui['id_pub']=$data['id_pub'];
			$tabeaui['Description']=$data['Description'];
			$tabeaui['Categorie']=$data['Categorie'];
			$tabeaui['Date_debut']=$data['Date_debut'];
			$tabeaui['Date_fin']=$data['Date_fin'];
			$tabeaui['Titre']=$data['Titre'];
			$tabeaui['Type']=$data['Type'];
			array_push($tableau,$tabeaui);
		}
		return $tableau;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
        return $tableau;
	}
	




function getBillet($idBillet) {
     $db = config::getConnexion();
    $billet = $db->prepare( 'select * From publication'
            . ' where id_pub=?');
    $billet->execute(array($idBillet));
    if ($billet->rowCount() > 0)
        return $billet->fetch();  // Accès à la première ligne de résultat
    else
        throw new Exception("Aucun billet ne correspond à l'identifiant '$idBillet'");
}
	




	function supprimerPublication($id_pub){
		$sql="DELETE FROM publications where id_pub= :id_pub";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_pub',intval($id_pub));
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierPublication($Publication){
		$sql="UPDATE publications SET   Description=:Description,Categorie=:Categorie,Date_debut=:Date_debut,Date_fin=:Date_fin,Titre=:Titre,Type=:Type WHERE id_pub=:id_pub";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$des=$Publication->getdesc();
        $titre=$Publication->gettitre();
        $cate=$Publication->getcate();
        $DD=$Publication->getDD();
        $DF=$Publication->getDF();
		$type=$Publication->gettype();
		$datas = array(':Description'=>$des, ':Titre'=>$titre,':Categorie'=>$cate,':Date_debut'=>$DD,':Date_fin'=>$DF,':Type'=>$type);
		$req->bindValue(':Description',$des);
		$req->bindValue(':Type',$type);
		$req->bindValue(':Titre',$titre);
		$req->bindValue(':Categorie',$cate);
		$req->bindValue(':Date_debut',$DD);
		$req->bindValue(':Date_fin',$DF);
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function RecupererPub($id_pub){
		$sql="SELECT * from publications where id_pub=$id_pub";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListeEmployes($tarif){
		$sql="SELECT * from employe where tarifHoraire=$tarif";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>