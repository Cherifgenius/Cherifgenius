<div class='form-group'>
<input name='produit' type='text'    
            class='form-control' placeholder='produit' value='<?php echo  $crud->selectAfficheColumn('annonces',$inss,1,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='date' type='text'    
            class='form-control' placeholder='date' value='<?php echo  $crud->selectAfficheColumn('annonces',$inss,2,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='reduction' type='text'    
            class='form-control' placeholder='reduction' value='<?php echo  $crud->selectAfficheColumn('annonces',$inss,3,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='active' type='text'    
            class='form-control' placeholder='active' value='<?php echo  $crud->selectAfficheColumn('annonces',$inss,4,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='bloque' type='text'    
            class='form-control' placeholder='bloque' value='<?php echo  $crud->selectAfficheColumn('annonces',$inss,5,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='lancepage' type='text'    
            class='form-control' placeholder='lancepage' value='<?php echo  $crud->selectAfficheColumn('annonces',$inss,6,'id',$where);  ?>'>
</div>
