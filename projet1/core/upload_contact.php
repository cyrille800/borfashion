<?php 

		$folder="../view/assets/img/contact/";
if(!empty($_FILES)){

		$temp_name=$_FILES['file']['tmp_name'];

	// $extension="";
	// $reponse=false;
	// for($i=0;i<strlen($temp_name)-1;$i++){
	// 	if($reponse==true){
	// 		$extension.=$temp_name[$i];
	// 	}
	// 	if($temp_name[$i]=="."){
	// 		$reponse=true;
	// 	}
	// }
	// $name="tmp.".$extension;
	$location=$folder."tmp.jpg";
	move_uploaded_file($temp_name,$location);
}
else{
	if(!empty($_GET["id"]) && isset($_GET["id"])){
		copy($folder."tmp.jpg",$folder.$_GET["id"].".jpg");
	}
	else{
		echo "non";
	}
}
?>