<div class='form-group'>
<input name='personne' type='text'    
            class='form-control' placeholder='personne' value='<?php echo  $crud->selectAfficheColumn('clients',$inss,1,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='identifiant' type='text'    
            class='form-control' placeholder='identifiant' value='<?php echo  $crud->selectAfficheColumn('clients',$inss,2,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='password' type='text'    
            class='form-control' placeholder='password' value='<?php echo  $crud->selectAfficheColumn('clients',$inss,3,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='compteurcon' type='text'    
            class='form-control' placeholder='compteurcon' value='<?php echo  $crud->selectAfficheColumn('clients',$inss,4,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='important' type='text'    
            class='form-control' placeholder='important' value='<?php echo  $crud->selectAfficheColumn('clients',$inss,5,'id',$where);  ?>'>
</div>
