<div class='form-group'>
<input name='commandeligne' type='text'    
            class='form-control' placeholder='commandeligne' value='<?php echo  $crud->selectAfficheColumn('payement',$inss,1,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='montant' type='text'    
            class='form-control' placeholder='montant' value='<?php echo  $crud->selectAfficheColumn('payement',$inss,2,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='devise' type='text'    
            class='form-control' placeholder='devise' value='<?php echo  $crud->selectAfficheColumn('payement',$inss,3,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='modalite' type='text'    
            class='form-control' placeholder='modalite' value='<?php echo  $crud->selectAfficheColumn('payement',$inss,4,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='client' type='text'    
            class='form-control' placeholder='client' value='<?php echo  $crud->selectAfficheColumn('payement',$inss,5,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='dateheure' type='text'    
            class='form-control' placeholder='dateheure' value='<?php echo  $crud->selectAfficheColumn('payement',$inss,6,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='idrecu' type='text'    
            class='form-control' placeholder='idrecu' value='<?php echo  $crud->selectAfficheColumn('payement',$inss,7,'id',$where);  ?>'>
</div>
