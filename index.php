<?php
include("data/class.PDOlisteGestion.php");
include("vues/v_entete.php") ;
include("vues/v_sommaire.php");
session_start();
$pdo = PdogestionListe::getPdogestionListe();
if(!isset($_REQUEST['uc'])){
     $_REQUEST['uc'] = 'acceuil';
}	 
$uc = $_REQUEST['uc'];
switch($uc){
	case 'acceuil':
		include("controleurs/c_liste.php");
		break;

}
include("vues/v_pied.php") ;
?>

