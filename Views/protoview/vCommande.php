
<!-- need to clean up css into a more apropriate file -->
<!-- maybe javascript to  -->

<!-- ============================== START css form ================================ -->

<style type="text/css">
.style-download input

{
  background: brown;
  border: none;
  padding: 10px 20px 10px 20px;
  border-bottom: 3px solid #1abc9c;
  border-radius: 3px;
  color: #D2E2FF;
  margin-bottom: : 50px;
  width: 15%;
}

.style-download input:hover

{
    background: #6B9FFF;
  color:#fff;
}

</style>

<!-- ========================== END css form ======================== -->
<form method="post" action="index.php?action=print">
<div  id="main_div">
	<div class="form-style-5" id="assemblage0" >
	<legend >Produit: <span class="number">1</span></legend>
	<?php if(isset($_POST["nom_client"])) 
	 echo  "<p>  <strong name=\"nom_client\">Client Name :</strong><i> ".$_POST["nom_client"]."</i>  </p>";
	 echo  "<p hidden>  <input name=\"nom_client\"; value=\"".$_POST["nom_client"]."\"></p>";
	  echo  "<p hidden>  <input name=\"Method_Paiement\"; value=\"".$_POST["Method_Paiement"]."\"></p>";
	?>
			<fieldset>
            		            <br>
								<br>
					<input type="number" tabindex="1" name="codePDB0" id="test1" placeholder="Code: *" pattern="[1-3]-[0-9]-[1-9]" min="101" max="394" required onblur="fillForm()">
					<input type="text"   tabindex="-1" name="field1DB" placeholder="Intitulé *">
					<input type="text"   tabindex="-1" name="field2DB" placeholder="Reference*">
					<input type="text"   tabindex="-1" name="field3DB" placeholder="embalage">
					Price
					<input type="number"   tabindex="-1" name="field4DB" placeholder="price *">
					Quantité:
					<input type="number"  tabindex="2" name="QuantitéP0" required value="1" placeholder="Quantité*">

					
					
								<br>
			</fieldset>
		<input  type="button" tabindex="3" value="Ajouter autre Produit"  onclick="ajouter()">
	</div>
</div>
								<br>
								<br>

<div class="style-download">
	<center ><input  tabindex="0" type="submit"  value="Telecharger PDF"  ></center>
</div>

</form>
<p hidden>
					<?php
					if (isset($produits)) {
                          $query=$produits;
                          $i=0;
                          foreach ($query as $row) {//you can use this loop only once(each action) in all your code if you want to use  the result more than once you can use other loop like for (i)
                            // foreach ($row as $key => $value) {    #key is collom name and number and value is the value on the case
                            //   echo $key." ==> ".$value."</br>"; 
                            // }
                          	$i+=1;
                            echo "produit numero $i";
                            echo "<input type=\"number\" class=\"output0\"   placeholder=\"Code: *\" value=\"$row[0]\" disabled=\"disabled\"> </br>";
                            	echo "<input type=\"text\" class=\"output1\"   placeholder=\"Reference*\" value=\"$row[1]\" disabled=\"disabled\" > </br>";
								echo "<input type=\"text\" class=\"output2\"  placeholder=\"Intitulé*\" value=\"$row[2]\" disabled=\"disabled\"></br>";
								echo "<input type=\"text\" class=\"output3\"   placeholder=\"embalage\" value=\"$row[3]\" disabled=\"disabled\"></br>";
								echo "<input type=\"number\" class=\"output4\"   placeholder=\"Price\" value=\"$row[4]\" disabled=\"disabled\"></br>>";

                          }
                        }
					?>
				</p>
<!-- ========================== Duplicate Formulaire======================== -->

<!-- <script type="text/javascript">
	var a=document.getElementById("assemblage0");

	a.addEventListener('submit', function(e) {
        alert('Vous avez envoyé le formulaire !\n\nMais celui-ci a été bloqué pour que vous ne changiez pas de page.');
        e.preventDefault();
    });
</script> -->
<!-- ==================== ------------ the famous life saving code ----------- =========================== -->

<script type="text/javascript">

	
		function fillForm(){

			var output=document.getElementsByClassName("output0");
			var numbreOfInput=parseInt(document.getElementsByClassName("number").length);
	 		var found=false;
		for (var j =0; j < numbreOfInput; j++) {
			found=false;
			// if(isProductNumber(someargument))// thi function suucks godamit i am stupid 
			for (var i = 0; i < output.length; i++) {

		            // if(document.getElementsByName("codePDB"+j)[0].value==document.getElementsByClassName("output0")[i].value){
		            if(document.getElementsByName("codePDB"+j)[0].value==output[i].value){

 	     				document.getElementsByName("field1DB")[j].value=document.getElementsByClassName("output1")[i].value;
    	  				document.getElementsByName("field2DB")[j].value=document.getElementsByClassName("output2")[i].value;
      					document.getElementsByName("field3DB")[j].value=document.getElementsByClassName("output3")[i].value;
      					document.getElementsByName("field4DB")[j].value=document.getElementsByClassName("output4")[i].value;
      				found=true;
                  	break;
      				}
     		}
     		if(!found)
     		window.alert("the product code must be between 101-148  201-265  301-394");
      			// break;
     		// else ;
     	}
      }

      function isProductNumber(productNum){
		var output=document.getElementsByClassName("output0");
			for (var i = 0; i < output.length; i++) {
		            if(productNum==document.getElementsByClassName("output0")[i].value){
        				return true;
      				}
     		}
      	return false;
      }

		function ajouter(){

					var n=parseInt(document.getElementsByClassName("number").length);
					var a=$("#main_div");
					// console.log("jj ",(n))
					// document.write("field1DB"+n);
					a.append('	<div  id="main_div"><div class="form-style-5" id="assemblage0" ><legend >Produit: <span class="number">'+(n+1)+'</span></legend> <fieldset><input type="number" tabindex="'+(10*n+1)+'" name="codePDB'+(n)+'" placeholder="Code: *"  onblur="fillForm()"><input type="text" tabindex="-1"  name="field1DB" placeholder="Reference*"><input type="text" tabindex="-1"  name="field2DB" placeholder="Intitulé *"><input type="text" tabindex="-1"  name="field3DB" placeholder="embalage"><input type="text" tabindex="-1"  name="field4DB" placeholder="price *">Quantité:<input type="text" tabindex="'+(10*n+2)+'" name="QuantitéP'+(n)+'"required value="1" placeholder="Quantité*"></fieldset><input type="button" tabindex="'+(10*n+3)+'" value="Ajouter autre Produit" onclick="ajouter()"></div></div></div>');
					//add delete perviews add input button
			}

	</script>

<!-- ========================== END Duplicate formulaire ======================== -->

<!--PS: convert this page to PDF using mPDF library in PHP-->