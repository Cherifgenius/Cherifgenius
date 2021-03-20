<div class='form-group'>
<input name='nom' type='text'    
            class='form-control' placeholder='nom' value='<?php echo  $crud->selectAfficheColumn('personne',$inss,1,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='prenom' type='text'    
            class='form-control' placeholder='prenom' value='<?php echo  $crud->selectAfficheColumn('personne',$inss,2,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='contact' type='text'    
            class='form-control' placeholder='contact' value='<?php echo  $crud->selectAfficheColumn('personne',$inss,3,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='adresse' type='text'    
            class='form-control' placeholder='adresse' value='<?php echo  $crud->selectAfficheColumn('personne',$inss,4,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='sexe' type='text'    
            class='form-control' placeholder='sexe' value='<?php echo  $crud->selectAfficheColumn('personne',$inss,5,'id',$where);  ?>'>
</div>
<div class='form-group'>
<input name='adresse_email' type='text'    
            class='form-control' placeholder='adresse_email' value='<?php echo  $crud->selectAfficheColumn('personne',$inss,6,'id',$where);  ?>'>
</div>
