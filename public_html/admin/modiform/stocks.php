<div class='form-group'>
<input name='produit' type='text'    
            class='form-control' placeholder='produit' value='<?php echo  $crud->selectAfficheColumn('stocks',$inss,1,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='prixu' type='text'    
            class='form-control' placeholder='prixu' value='<?php echo  $crud->selectAfficheColumn('stocks',$inss,2,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='quantite' type='text'    
            class='form-control' placeholder='quantite' value='<?php echo  $crud->selectAfficheColumn('stocks',$inss,3,'id',$where);  ?>'>
</div>
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
