<?php


if(!isset($_REQUEST['action'])){
    $_REQUEST['action'] = 'action';
    $action = $_REQUEST['action'];
    switch ($action)
    {
        case 'voir' :
            include("v_acceuil.php");
            break;
        case 'gererListe' :
            // include("vues/v_connexion.php");
            break;
        case 'gererTache' :
            break;
        case 'gererStatus':

            break;

        default : 
            // include("vues/v_connexion.php");
        

    }
}   
?>