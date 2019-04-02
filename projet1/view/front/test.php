<?php 

	$vav=[];
	$vav[0][0]=1;
	$vav[0][1]="armand";
	$vav[0][2]=13;

	if(isset($_COOKIE["test"])){
		$tableau=json_decode($_COOKIE["test"]);
		$id=1;
		$i=0;
		foreach ($tableau as $key => $value) {
			if($value[0]==$id){
			unset($tableau[$i]);
			}
			$i++;
		}
			setcookie("test",json_encode($tableau),time()+60);	
			var_dump(json_decode($_COOKIE["test"]));
	}
	else{
		setcookie("test",json_encode($vav),time()+60);
	}
?>