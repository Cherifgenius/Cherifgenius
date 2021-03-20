<div class="form-group">
    <?php

        $connexion = new ConnexionFactor();
        $query = "SELECT designation,marque FROM produits ";
        $donnees=$connexion->Connect()->query($query,PDO::FETCH_BOUND);
        $donnees->bindColumn('designation',$designation);
        $donnees->bindColumn('marque',$marque);


        ?>  
<select name="produit" class="form-control">
<option>Select Produit</option>
<?php  while($donnees->fetch()){   ?>
<option><?php print $designation.' '.$marque;  ?></option>
<?php  } ?>
</select>
</div>
<div class='form-group'>
<input name='prixu' type='text'    
            class='form-control' placeholder='prixu'>
</div><div class='form-group'>
<input name='quantite' type='text'    
            class='form-control' placeholder='quantite'>
</div>
</div>
<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
<div class='form-group'>
<input name='emplacement' type='text'    
            class='form-control' placeholder='emplacement'>
</div><div class='form-group'>
<input name='classe' type='text'    
            class='form-control' placeholder='classe'>
</div>
<div class="form-group">
  <input name="date" id="finish" type="text" class="form-control" placeholder="Date"  required>
</div>
<div class='form-group'>
<input name='dateexp' id="finish" type="text" class="form-control" placeholder="DateExp"  required>
</div>

</div>