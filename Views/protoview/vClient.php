<?php

?>
<!-- HTML START at 5  -->

<div class="form-style-5">
    <form method="post" action="index.php?action=actionCommande">
        <fieldset>
              <legend><!-- <span class="number">1 --></span> Informations de Client : </legend>
                    <input type="text" name="nom_client" required placeholder="Client: *">
                    <!-- ce champs là et pour la destination de client-->
                    <textarea name="Adresse_Client" required placeholder="Adresse_Client: (destination) *"></textarea>
                    <input type="text"  required name="Numero_Client"  placeholder="Numero de Telephone: *">
                    <input type="email" required name="E_mail" placeholder="E-mail Client: *">
                    <label for="job">Modalité de paiement:</label>
                        <select id="job" required name="Method_Paiement" >
                            <optgroup label="Indoors">
                                <option value="Carte bancaire">Carte bancaire</option>
                                <option value="Dépôt d'espèces dans une agence bancaire">Dépôt d'espèces dans une agence bancaire</option>
                                <option value="Virement Bancaire">Virement Bancaire</option>
                                <option value="Espèces à la livraison">Espèces à la livraison</option>
                                <option value="Chèque bancaire certifié">chèque bancaire certifié</option>
                                <option value="Pas Specifié !">Autre</option>
                            </optgroup>
                        </select>   
        </fieldset>

<!--<fieldset>
<legend><span class="number">2</span> Additional Info</legend>
<textarea name="field3" placeholder="E-macsdcil"></textarea>
</fieldset>-->

      <center><fieldset id="date">
        <?php 
          echo "<center>Aujourd'hui c'est le : ".date('d/m/y')."</center>";
        ?>
      </fieldset></center>

             <!-- <a href="index.php?action=actionCommande">  -->
              <input  type="submit" value="Faire Commande"   />
              <!-- Faire Commande</a> -->
              </form>
</div>