<div class='form-group'>
<input name='produit' type='text'    
            class='form-control' placeholder='produit' value='<?php echo  $crud->selectAfficheColumn('commande',$inss,1,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='client' type='text'    
            class='form-control' placeholder='client' value='<?php echo  $crud->selectAfficheColumn('commande',$inss,2,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='dateheure' type='text'    
            class='form-control' placeholder='dateheure' value='<?php echo  $crud->selectAfficheColumn('commande',$inss,3,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='prix' type='text'    
            class='form-control' placeholder='prix' value='<?php echo  $crud->selectAfficheColumn('commande',$inss,4,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='quantite' type='text'    
            class='form-control' placeholder='quantite' value='<?php echo  $crud->selectAfficheColumn('commande',$inss,5,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='idpanier' type='text'    
            class='form-control' placeholder='idpanier' value='<?php echo  $crud->selectAfficheColumn('commande',$inss,6,'id',$where);  ?>'>
</div>
