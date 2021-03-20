<div class='form-group'>
<input name='personne' type='text'    
            class='form-control' placeholder='personne' value='<?php echo  $crud->selectAfficheColumn('admin',$inss,1,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='identifiant' type='text'    
            class='form-control' placeholder='identifiant' value='<?php echo  $crud->selectAfficheColumn('admin',$inss,2,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='password' type='text'    
            class='form-control' placeholder='password' value='<?php echo  $crud->selectAfficheColumn('admin',$inss,3,'id',$where);  ?>'>
</div>
