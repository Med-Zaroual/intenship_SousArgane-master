<?php

//still need to be modified the action is from to index.php for security  

// *****include 'Controler/localControler.php';#need to see if you can have diffrent function in diffrent file so it is clearer

function forms(){
	protoview("vform");
};
function lAcceuil(){
	protoview("vAcceuil");
};

function lClient()
{
    protoview("vClient");
};
function lCommande(){
	setClient();
	$data["produits"]=getProducts();
	protoview("vCommande",$data);
};


function database(){// REALLY need a rename #and will be deleted 

	$gotten_value_from_db_test=isset($_POST['nom_produit1'])? $_POST['nom_produit1'] : 0;//any number that is not in sql table will not give any results 
	$data["produits"]=NULL;
	if (ctype_digit( $gotten_value_from_db_test) ) 
	{//test if String is made only frome numbers or integerable hhh	
		$num=(int)$gotten_value_from_db_test;
			if (table_contains($num)) {
				$data["produits"]=getproduct($num);
			}else 	echo "product number: ".$num."doesn't exist!";#need styling
		
	}
	protoview("db_test",$data);
};

 function printpdf(){
 	$data["nomClient"]=isset($_POST['nom_client'])? $_POST['nom_client'] : NULL;
	$data["adressClient"]=getClientAdress($data["nomClient"]);
	$data["emailClient"]=getClientEmail($data["nomClient"]);
	 $data["Method_Paiement"]=isset($_POST['Method_Paiement'])? $_POST['Method_Paiement'] : NULL;

	
 	for ($i=0;  ; $i++) { 
 		$productId="codePDB".$i;
 			if(isset($_POST[$productId])){
 				$data[$productId]=getProduct((int)$_POST[$productId]);
 			}else {
 				break;
 			}
 	}
    // $data[]


 	protoview("facture1",$data);
 };

// ##################### past code for reference only need rewriting

// function authentifierUser($a){
// 	if (isset($_COOKIE["login"]) && isset($_COOKIE["pass"])){
// 		$login=$_COOKIE["login"];
// 		$pass= $_COOKIE["pass"];
// 		if(isAllowedUser($login,md5($pass))) {
// 			$_SESSION["user"]=$login;
// 			header("location: index.php?action=". $a);
// 		} else formLoginAction();
// 	}
// 	else if (isset($_POST["user"]) && isset($_POST["pass"])){
// 		$login=$_POST["user"];
// 		$pass= $_POST["pass"];
// 		if(isAllowedUser($login,md5($pass))) {
// 			$_SESSION["user"]=$login;
// 			if (isset($_POST["saveLogin"])) {
// 				setCookie("login",$login,time() + 60*60);
// 				setCookie("pass",md5($pass),time() + 60*60);
// 			}
// 			header("location: index.php?action=". $a);
// 		} else formLoginAction();

// 	}

// 	else {
// 		formLoginAction();

// 	}

// }

// function deconnexion() {
// 	session_destroy();
// 	setCookie("login",'',time()-3600);
// 	setCookie("pass",'',time()-3600);
// 	unset($_COOKIE["login"]);
// 	unset($_COOKIE["pass"]);
// 	header("location: index.php");
// };

?>