<div class="form-style-5">
    <form method="post" action="index.php?action=db_test">
        <fieldset>
              <legend> Product information</legend>
                    <input type="text" name="nom_produit1" required placeholder="default is 0 so nothing is going to be returned " onblur="">
                    <?php 
                     echo $codePs."</br>";

                     

                        // if (isset($produits)) {
                          $query=$_POST;
                          foreach ($query as $row=> $hoho) {//you can use this loop only once(each action) in all your code if you want to use  the result more than once you can use other loop like for (i)
                            // var_dump($row);
                            echo $row."</br> value =";
                            echo $hoho."</br>";
                            var_dump($hoho);
                            echo $row." ==> ".$hoho."</br>"; 
                            foreach ($row as $key => $value) {    #key is collom name and number and value is the value on the case
                              echo $key." ==> ".$value."</br>"; 
                            }
                          }
                        // }
                        
                     ?>
        </fieldset>

      <center><fieldset id="date"> <!-- simple date can be removed  -->
        <?php 
          echo "<center>Aujourd'hui c'est le : ".date('d/m/y')."</center>";
        ?>
      </fieldset></center>

              <input  type="submit" value="Valider"   />
    </form>
</div>