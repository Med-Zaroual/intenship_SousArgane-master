<?php
// choose withc page or fonctionality should be seen at any point of time 
// Default will need major change
// only the essance of it sjould be specified 


function protoview($file,array $data=array()){
if (file_exists("Views/protoview/".$file.".php")) {
	if($file!="facture1")	{
				extract($data);
				ob_start();
				require ("Views/protoview/".$file.".php");
				$page = ob_get_clean();

			if($file!="facture")
				include ("Views/lTemplate.php");//maybe afterward backgound 
			else 

				include("Views/TemplateFacture.php");

			}
	 else{
	 	extract($data);
		ob_start();
	  include("Views/protoview/facture1.php");
	  }
	}
	else {
				throw new Exception("Fichier /protoview/".$file.".php introuvable ?! 
					how can i catch this exeption boy");
	}

}
?>