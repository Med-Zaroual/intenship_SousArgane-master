<!DOCTYPE html>
<html lang="fr">
<head>
<style>
body{
	padding:3px 10px 10px 10px;
		background:url("/facture/argane.gif") center; 
}

table{
	  margin-bottom: 30px;
}
table,tr,td{
	text-align: center;
	font-family: arial, sans-serif;
  	border-collapse: collapse;
}
 td, th {
  border: 1px solid #1c1a1a;
  padding: 8px;
}

table.first-table , table.third-table , table.f-table {
  width: 100%;


}

.first-table tr:nth-child(1) {
  background-color: #9bbb59;
  font-size: large;
}
.first-table tr:nth-child(2) {
  background-color: #08a4092e;
}
.img-head{
/*background:url("../img/logo.jpg") center top;*/
background-size: contain;
background-color: white; 
}
.second-table tr:nth-child(1) {
  font-size: large;
  font-weight: bold;
}

.third-table tr:nth-child(1), .f-table tr:nth-child(1){
  background-color: #08a4092e;
  font-size: large;
  font-weight: bold;
}

.f-table tr:nth-child(3),.f-table tr:nth-child(4),.f-table tr:nth-child(5),.f-table tr:nth-child(6),.f-table tr:nth-child(7),.f-table tr:nth-child(8){
	font-size: 11px;
	font-weight: bold;
	text-align: left;
}

footer{
	margin-top:100px;
	font-size:11px;
}
footer div{
	padding: 0px;
}


</style>
</head>


	<body >


		<!-- 1er tableau : header  -->
		<table class="first-table">

			<tr>
				<td rowspan="3" style="width: 20%" class="img-head">
					<img src="img/logo.jpg">
				</td>
				<td style="text-align: center;">R&eacute;f&eacute;rence : F-COM-13</td>
				<td> Indice de r&eacute;vision : 0 </td>

			</tr>

			<tr>
				<td rowspan="2"><h2>Facture</h2></td>

				<td><?php echo date('d/m/y') ?></td>
			</tr>

			<tr>
				<td>Page 1 sur 1</td>
			</tr>

		</table>




		<!-- 2eme tab : Date facture  -->
		<table class="second-table">
			<tr>
				<td style="background-color: #90c965"><b>Date de Facture:</b></td>
				<td style="width: 180px"> <?php echo date('d/m/y') ?></td>
			</tr>

			<tr>
				<td style="width:100%;position:absolute;background-color: #08a4092e;border:none; ">
				Num:   </td>
			</tr>
		</table>




		<!-- 3eme tableau des cordonnées de client  -->
		<table class="third-table" style="margin-top: 50px">

			<tr>
				<td>
					N BCC
				</td>
				<td>
					N BL
				</td>
				<td>
					Client:
				</td>
				<td>
					Adresse Client:
				</td>
				<td>
					Modalit&eacute; de paiement:
				</td>
				<td>
					Coordonn&eacute;s bancaire:
				</td>
			</tr>

			<tr height="100px">

				<td >
					<br>

				</td>
				<td >
					<br>

				</td>
				<td >
					<br>
					<?php
						echo $nomClient;
					 ?>

				</td>
				<td >
					<br>
					<?php
						echo $emailClient;
					 ?>
				</td>
				<td >
					<br>
					<?php
					echo $Method_Paiement;
					?>
				</td>
				<td >
					<br>

				</td>
			</tr>


			<tr>
				<td colspan="6">
					Destination :  
					<?php
						echo $adressClient;
					 ?>
				</td>
			</tr>

		</table>


		<!-- 3eme tableau de produits -->
		<table class="f-table" style="margin-top: 50px">
			<tr >
				<td width="30px">
					Code
				</td>
				<td  width="120px">
					Ref
				</td>
				<td >
					Produit
				</td>
				<td width="90px">
					Quantit&eacute;
				</td>
				<td  width="120px">
					PU H.T
				</td>
				<td  width="120px">
					TOTAL
				</td>
			</tr>
		
<?php for ($i=0;  ; $i++) { 
				$name="codePDB".$i;
				$Quantit="QuantitéP".$i;
				if(!isset($data[$name])) break;
			
			echo 
			"<tr height=\"50px\" >
				<td>
					 ".$data[$name][0]."
					
				</td>
				<td>
					".$data[$name][2]."
				</td>
				<td>
				".$data[$name][1]."
				</td>
				<td name=\"price\" >
				".$_POST[$Quantit]."
				</td>
				<td >
				".$data[$name][4]."<!-- price-->
				</td>
				<td>
				".($_POST[$Quantit]*$data[$name][4])."
				</td>
			</tr>";
			
		}
?>

			</table>

</body>

<script type="text/javascript">
   var a=document.getElementsByName('price');
   window.alert(a[0].innerText);
	// function ajouter(){
	// var a=$("#main_div");
	// a.append('<tr height="50px" id="main_tr"><td>0</td><td>#N/A</td><td>#N/A</td><td></td><td></td><td><input type="submit" value="ajouter autre produit" onclick="ajouter()"></td></tr>');
}
</script>



<!-- footer -->
<footer >
	<center>

		<div>
			SOUSS ARGANE SARL, Rue 14,zone industrielle,Ait MELLOUL– Agadir .MAROC
		</div>

		<div>
			IF: 6927640, ICE N° : 001547466000004,Pattente N° 48851000,RC: N° 10025 à Inzegane, Capital :1 200 000 dhs ,CNSS N° 6798047
		</div>

		<div>
			Tel/Fax: +212 528243527, GSM: +212 661419738
		</div>

		<div>
			E-mail: souss.argane@yahoo.fr ; Site Web: www.soussargane.com.
		</div>

	<center>
</footer>
</html>
