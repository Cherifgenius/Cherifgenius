<div class='form-group'>
<input name='produit' type='text'    
            class='form-control' placeholder='produit' value='<?php echo  $crud->selectAfficheColumn('recommandation',$inss,1,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='client' type='text'    
            class='form-control' placeholder='client' value='<?php echo  $crud->selectAfficheColumn('recommandation',$inss,2,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='dateheure' type='text'    
            class='form-control' placeholder='dateheure' value='<?php echo  $crud->selectAfficheColumn('recommandation',$inss,3,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='description' type='text'    
            class='form-control' placeholder='description' value='<?php echo  $crud->selectAfficheColumn('recommandation',$inss,4,'id',$where);  ?>'>
</div>
