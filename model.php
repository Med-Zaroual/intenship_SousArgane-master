<?php
// //code n'est pas fonctionnelle
// // Default will need major change
// // only the essance of it sjould be specified

function ouvrirConnexion(){
	// if(is_null($user)){
	$user="root";//CHANGE THE USER DEPENDING ON HOW MANY YOU WANT AND THERE PRIVELEDGE
	$password="";//CHAMGE THE PASSWORD DEPENDING ON YOUR SETTING
	// }
	try{
	$dbo=new PDO("mysql:host=localhost;dbname=factuel", $user, $password);
}catch(Exeption $e){
	echo $e->getMessage();
}
	return $dbo;
};


function table_contains($num){
	$query=getProductsNum();
 foreach ($query as $row) {
 	if($row[0]==$num) return true;
 }
return false;
};

function getProduct($num){
	$sql="select * from produit where NUM=".$num;//the query
	$con=ouvrirConnexion();// open connection

	$query=$con->query($sql);//IN here we have the result of the query
	foreach ($query as $row) {
		return $row;
		break;
	}

};

function getProducts(){
$sql="select * from produit;";//the query

	$con=ouvrirConnexion();// open connection

	$query=$con->query($sql);//IN here we have the result of the query
return $query;
};

function getProductsNum(){
	$sql="select num from produit";
	$con=ouvrirConnexion();// open connection
	$query=$con->query($sql);//IN here we have the result of the query
return $query;
};

function getProductsIntitule(){
	$sql="select INTITULE from produit";
	$con=ouvrirConnexion();// open connection
	$query=$con->query($sql);//IN here we have the result of the query
return $query;
};

function getProductIntitule($num){
	$sql="select INTITULE from produit where NUM=".$num;
	$con=ouvrirConnexion();// open connection
	$query=$con->query($sql);//IN here we have the result of the query
return $query;
};

function getProductsRef(){
	$sql="select ref from produit";
	$con=ouvrirConnexion();// open connection
	$query=$con->query($sql);//IN here we have the result of the query
return $query;
};

function getProductRef($num){
	$sql="select ref from produit".$num;
	$con=ouvrirConnexion();// open connection
	$query=$con->query($sql);//IN here we have the result of the query
return $query;
};

function getProductsPrice(){
	$sql="select prix from produit";
	$con=ouvrirConnexion();// open connection
	$query=$con->query($sql);//IN here we have the result of the query
return $query;
};

function getProductPrice($num){
	$sql="SELECT `prix` from produit".$num;
	$con=ouvrirConnexion();// open connection
	$query=$con->query($sql);//IN here we have the result of the query
return $query;
};

///////#product seters
function setProductPrice($num,float $price){#need to specifie a test funtion for this
  $sql="update produits
   set prix=".$price
   ." where NUM=".$num;
  //this ===**QUERY NEED TESTING**=== need to be once it is validated  DELET this COMMENT
	$con=ouvrirConnexion();
	$query=$con->query($sql);
};


/////////////// client  getter
function getClientRow($num,$nom_client){
$sql="SELECT * FROM `client` WHERE `name_client` LIKE '$nom_client' ";
	//PLEASE CHEQUE IF THE DATA BASE WAS CHANGED AND MODIFIE THIS COMMENT ACCORDINGLY
	// the client table is |id|nom_client|client_adress|email_client|number_client

	$con=ouvrirConnexion();
	$query=null;
 	if($query=$con->query($sql)){
 	   // echo "record inserted successfully";
 		foreach ($query as $row) {
 			if ($row[1]==$nom_client) {
 				// echo  "this the found likliness".$row[0];
 			return $row[$num];
 		  }
 		}
 	 }

	else
		var_dump($query);
};

function getClientAdress($nom_client){
	//PLEASE CHEQUE IF THE DATA BASE WAS CHANGED AND MODIFIE THIS COMMENT ACCORDINGLY
	// the client table is |id|nom_client|client_adress|email_client|number_client
 	return getClientRow(2,$nom_client);
};

function getClientId($nom_client){
	//PLEASE CHEQUE IF THE DATA BASE WAS CHANGED AND MODIFIE THIS COMMENT ACCORDINGLY
	// the client table is |id|nom_client|client_adress|email_client|number_client
		return getClientRow(0,$nom_client);
};

function getClientEmail($nom_client){
	//PLEASE CHEQUE IF THE DATA BASE WAS CHANGED AND MODIFIE THIS COMMENT ACCORDINGLY
	// the client table is |id|nom_client|client_adress|email_client|number_client
		return getClientRow(3,$nom_client);
};

function clientExist($nom_client){
$sql="SELECT * FROM `client` WHERE `name_client` LIKE '$nom_client' ";

	$con=ouvrirConnexion();
	$query=null;
 	if($query=$con->query($sql)){
 		foreach ($query as $row) {
 			if ($row[1]==$nom_client) {
 			return true;
 		  }
 		}
 		return false;
 	 }
	else{
		var_dump($query);
		  echo "ERROR: Could not able to execute $sql. ";# . mysqli_error($query);
	}

};

function setClient(){
	//if(isset($_POST["nom_client"])){
	$nom_client=$_POST["nom_client"];
	$Adresse_Client=$_POST["Adresse_Client"];
	$Numero_Client=(String)$_POST["Numero_Client"];
	$E_mail=$_POST["E_mail"];
	$id=0;

		$typeOfAction="";

	if(clientExist($nom_client)){// UPDATE CLIENT IF HE EXIST
		$id=getClientId($nom_client);
		$sql="UPDATE `factuel`.`client` SET `name_client` = '$nom_client', `client_address` = '$Adresse_Client',`email_client` ='$E_mail', `numbre_client` = '$Numero_Client'  WHERE `client`.`id_client` = $id; ";
		$typeOfAction="UPDATE";
	}else{// insert if client doesn't already exist in the database
		$id=getNumberOfClients();
		$sql="insert into `factuel`.`client` (`id_client`, `name_client`, `client_address`, `numbre_client`, `email_client`)VALUES ('".$id."','".$nom_client."', '".$Adresse_Client."', '".$Numero_Client."', '".$E_mail."');";
		$typeOfAction="INSERTION";
	}

	$con=ouvrirConnexion();
 	if($query=$con->query($sql))
 	   echo "this " . $typeOfAction." successfull";
	else{
		  echo "ERROR: Could not able to execute this $sql " ;#. mysqli_error($query);
		}

// 	$link = mysqli_connect("localhost", "root", "", "factuel");

// // Check connection
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }

// // Attempt insert query execution
// $sql="insert into `factuel`.`client` (`id_client`, `name_client`, `client_address`, `numbre_client`, `email_client`)VALUES ('".$id."','".$nom_client."', '".$Adresse_Client."', '".(int)$Numero_Client."', '".$E_mail."');";
// if(mysqli_query($link, $sql)){
//     echo "Records inserted successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }

// // Close connection
// mysqli_close($link);

};
 function getNumberOfClients(){
 	$sql="select count(*) as numClients from client";
 	$connec=ouvrirConnexion();
	$query=$connec->query($sql);
	foreach ($query as $row) {
		  $value=$row[0];
          $num=$value;
          return $num;

       }
 };
function autoComplete(){
// Dim bd As DAO.Database;
// Dim rst As DAO.Recordset;
// Set bd = CurrentDb;
// dim sql as String;
//  
// sql = "SELECT * FROM maTable WHERE Nom= '" & champFormulaireNom.value & "';";
// Set rst = bd.OpenRecordset(sql)
// champFormulairePrenom.value= rst![Prenom ]
// champFormulaireId.value= rst![UserID]
};


function isAllowedUser($login,$pass){


return ouvrirConnexion()->query("select * from etudiant where login= '$login' and pass= '$pass'")->rowCount();
}

?>
