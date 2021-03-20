<div class='form-group'>
<input name='client' type='text'    
            class='form-control' placeholder='client' value='<?php echo  $crud->selectAfficheColumn('commentairecli',$inss,1,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='commentaire' type='text'    
            class='form-control' placeholder='commentaire' value='<?php echo  $crud->selectAfficheColumn('commentairecli',$inss,2,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='produit' type='text'    
            class='form-control' placeholder='produit' value='<?php echo  $crud->selectAfficheColumn('commentairecli',$inss,3,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='reponse' type='text'    
            class='form-control' placeholder='reponse' value='<?php echo  $crud->selectAfficheColumn('commentairecli',$inss,4,'id',$where);  ?>'>
</div>
