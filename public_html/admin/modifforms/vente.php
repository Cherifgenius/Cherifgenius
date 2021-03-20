<div class='form-group'>
<input name='commande' type='text'    
            class='form-control' placeholder='commande' value='<?php echo  $crud->selectAfficheColumn('vente',$inss,1,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='dateheure' type='text'    
            class='form-control' placeholder='dateheure' value='<?php echo  $crud->selectAfficheColumn('vente',$inss,2,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='livraison' type='text'    
            class='form-control' placeholder='livraison' value='<?php echo  $crud->selectAfficheColumn('vente',$inss,3,'id',$where);  ?>'>
</div>
