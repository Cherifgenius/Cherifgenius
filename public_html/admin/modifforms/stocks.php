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
            class='form-control' placeholder='prixu' value='<?php echo  $crud->selectAfficheColumn('stocks',$inss,2,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='quantite' type='text'    
            class='form-control' placeholder='quantite' value='<?php echo  $crud->selectAfficheColumn('stocks',$inss,3,'id',$where);  ?>'>
</div>
</div>
<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
<div class='form-group'>
<input name='emplacement' type='text'    
            class='form-control' placeholder='emplacement' value='<?php echo  $crud->selectAfficheColumn('stocks',$inss,4,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='classe' type='text'    
            class='form-control' placeholder='classe' value='<?php echo  $crud->selectAfficheColumn('stocks',$inss,5,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='date' type='text'    
            class='form-control' placeholder='date' value='<?php echo  $crud->selectAfficheColumn('stocks',$inss,6,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='dateexp' type='text'    
            class='form-control' placeholder='dateexp' value='<?php echo  $crud->selectAfficheColumn('stocks',$inss,7,'id',$where);  ?>'>
</div>
</div>
