<?php
//the index the only point of failure and only contact between the client and the server 
// index should be the one to redirect the client to wherever he needs 
//this is not clean at all needs more cleaning 
 
 require("model.php");
 require ("views.php");
 require ("controler.php");

try{
  $originlAction = (!empty($_GET["action"]))? $_GET["action"]: "acceuil";
  //try making it so that it will demande action only in espace etudiant and space where login is required
  $action= (!isset($_SESSION["user"]))? $originlAction : "verifierLogin";
  
 switch ($action) {

    case 'formLogin':
      formLoginAction();
      break;
//     //tous les autres cas en affiche la page d'acceuil
    case 'form':
      forms();
      break;
    case 'actionCommande':
      lCommande();
      break;
    case 'viewCommade':
      viewCommade();
      break;
    case 'client':
      lClient();
      break;
    case'facture':
      lFacture();
    break;
    case 'db_test':
      database();
    break;
    case 'local':
          lAcceuil();
    break;
    
    case 'print':
        printpdf();
    break;
    default:

    lAcceuil();


  }
}
catch(Exception $e) {//need more catch and detailed exploration of exeption this is quite shit even tho i can'y grassep how to make it better 
  $data["errorMessage"]= $e->getMessage();
 protoview("vError", $data);
}

?>