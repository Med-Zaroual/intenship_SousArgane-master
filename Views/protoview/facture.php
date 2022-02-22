


		<!-- 1er tableau : header  -->
		<table class="first-table">

			<tr>
				<td rowspan="3" style="width: 20%" class="img-head"></td>
				<td style="text-align: center;">R&eacute;f&eacute;rence : F-COM-13</td>
				<td> Indice de r&eacute;vision : 0 </td>

			</tr>

			<tr>
				<td rowspan="2"><h2>Facture</h2></td>

				<td>Date : 09 / 02 / 2016</td>
			</tr>

			<tr>
				<td>Page 1 sur 1</td>
			</tr>

		</table>






		<!-- 2eme tab : Date facture  -->
		<table class="second-table">
			<tr>
				<td style="background-color: #27ff27"><b>Date de Facture:</b></td>
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

			<tr>

				<td height="100px">
					<br>

				</td>
				<td height="100px">
					<br>

				</td>
				<td height="100px">
					<br>

				</td>
				<td height="100px">
					<br>

				</td>
				<td height="100px">
					<br>

				</td>
				<td height="100px">
					<br>

				</td>
			</tr>


			<tr>
				<td colspan="6">
					Destination :
				</td>
			</tr>

		</table>







		<!-- 3eme tableau de produits -->
		<table class="f-table" style="margin-top: 50px">
			<tr>
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
		

			<tr height="50px" id="main_tr">
				<td>
					314
				</td>
				<td>
					VRACHAA10B
				</td>
				<td>
					Vrac Huile d'Argane Alimentaire Cos 10 L 
				</td>
				<td>
				
				</td>
				<td>
				
				</td>
				<td>
				<!-- <input type="button" value="ajouter autre produit" onclick="ajouter()"> -->
				</td>
			</tr>

			<tr height="50px" >
				<td>
					2
				</td>
				<td>
					#N/A
				</td>
				<td>
					#N/A
				</td>
				<td>
				
				</td>
				<td>
				
				</td>
				<td>
				<!-- <input type="button" value="ajouter autre produit" onclick="ajouter()"> -->
				</td>
			</tr>

			<tr height="50px" >
				<td>
					3
				</td>
				<td>
					#N/A
				</td>
				<td>
					#N/A
				</td>
				<td>
				
				</td>
				<td>
				
				</td>
				<td>
				<!-- <input type="button" value="ajouter autre produit" onclick="ajouter()"> -->
				</td>
			</tr>
<!-- 		<tr>
			<td style="visibility:  hidden;border: none">
				
			</td>
			<td style="visibility:  hidden;border: none">
				let it free
			</td>
			<td style="visibility:  hidden;border: none">
				let it free
			</td>
			<td style="visibility:  hidden;border: none">
				
			</td>
			<td style="text-align: left;">
				SOUS-TOTAL
			</td>
			<td>
				0,00 MAD
			</td>
		</tr>

		<tr>
			<td style="visibility:  hidden;border: none">
				let it free
			</td>
			<td style="visibility:  hidden;border: none">
				let it free
			</td>
			<td style="visibility:  hidden;border: none">
				let it free
			</td>
			<td style="visibility:  hidden;border: none">
				
			</td>
			<td style="text-align: left;">
				T.V.A.10%
			</td>
			<td>
				0,00 MAD
			</td>
		</tr>

		<tr>
			<td style="visibility:  hidden;border: none">
				let it free
			</td>
			<td style="visibility:  hidden;border: none">
				let it free
			</td>
			<td style="visibility:  hidden;border: none">
				let it free
			</td>
			<td style="visibility:  hidden;border: none">
				
			</td>
			<td style="text-align: left;">
				T.V.A.20%
			</td>
			<td>
				0,00 MAD
			</td>
		</tr>

		<tr>
			<td style="visibility:  hidden;border: none">
				let it free
			</td>
			<td style="visibility:  hidden;border: none">
				let it free
			</td>
			<td style="visibility:  hidden;border: none">
				let it free
			</td>
			<td style="visibility:  hidden;border: none">
				
			</td>
			<td style="text-align: left;">
				FRAIS TRANSPORT
			</td>
			<td>
				0,00 MAD
			</td>
		</tr>

		<tr>
			<td style="visibility:  hidden;border: none">
				let it free
			</td>
			<td style="visibility:  hidden;border: none">
				let it free
			</td>
			<td style="visibility:  hidden;border: none">
				let it free
			</td>
			<td style="visibility:  hidden;border: none">
				
			</td>
			<td style="text-align: left;">
				TOTAL
			</td>
			<td>
				0,00 MAD
			</td>
		</tr> -->

			</table>



<!-- <script type="text/javascript">
	function ajouter(){
	var a=$("#main_div");
	a.append('<tr height="50px" id="main_tr"><td>0</td><td>#N/A</td><td>#N/A</td><td></td><td></td><td><input type="submit" value="ajouter autre produit" onclick="ajouter()"></td></tr>');
}
</script>
 -->


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
