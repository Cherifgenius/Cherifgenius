<div class='form-group'>
<input name='designation' type='text'    
            class='form-control' placeholder='designation' value='<?php echo  $crud->selectAfficheColumn('produits',$inss,1,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='genre' type='text'    
            class='form-control' placeholder='genre' value='<?php echo  $crud->selectAfficheColumn('produits',$inss,2,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='marque' type='text'    
            class='form-control' placeholder='marque' value='<?php echo  $crud->selectAfficheColumn('produits',$inss,3,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='poids' type='text'    
            class='form-control' placeholder='poids' value='<?php echo  $crud->selectAfficheColumn('produits',$inss,4,'id',$where);  ?>'>
</div>
</div>
<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>
<div class='form-group'>
<input name='codebar' type='text'    
            class='form-control' placeholder='codebar' value='<?php echo  $crud->selectAfficheColumn('produits',$inss,5,'id',$where);  ?>'>
</div>
<div class="form-group res-mg-t-15">
<textarea name="description" placeholder="Description"><?php echo  $crud->selectAfficheColumn('produits',$inss,6,'id',$where); ?></textarea>
</div>
<div class="form-group res-mg-t-15">
<textarea name="ingredient" placeholder="Ingredient"><?php echo  $crud->selectAfficheColumn('produits',$inss,7,'id',$where);  ?></textarea>
</div>
<div class='form-group'>
<input name='prix' type='text'    
            class='form-control' placeholder='prix' value='<?php echo  $crud->selectAfficheColumn('produits',$inss,8,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='image' type='text'    
            class='form-control' placeholder='image' value='<?php echo  $crud->selectAfficheColumn('produits',$inss,9,'id',$where);  ?>' >
</div>
<div class='form-group'>
<input name='image2' type='text'    
            class='form-control' placeholder='image'  value='<?php echo  $crud->selectAfficheColumn('produits',$inss,10,'id',$where);  ?>' >
</div>
<div class='form-group'>
<input name='image3' type='text'    
            class='form-control' placeholder='image'  value='<?php echo  $crud->selectAfficheColumn('produits',$inss,11,'id',$where);  ?>' >
</div>
</div>
