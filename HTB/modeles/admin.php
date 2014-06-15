<?php 
function mail_admin(){
	global $bdd;
$res = "SELECT * from admin where id ='1'";
$req = $bdd-> query($res) or die(print_r($bdd->errorInfo()));

 	$data = $req-> fetch();
 	return $data;
}

function modifier_mail($mail){
global $bdd; 
	$bdd->query("UPDATE admin SET mail='$mail' WHERE id='1'");

}

?>