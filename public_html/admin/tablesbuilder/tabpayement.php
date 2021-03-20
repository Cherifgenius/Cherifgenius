
 <?php

include_once '../monFramework/databasegenius.php';

$connexion = new ConnexionFactor();

$nombre_de_donnee = 200;

$sommeur = ('SELECT count(*) AS total from payement');
$donnee=$connexion->Connect()->query($sommeur);
$total = $donnee->fetch();
$totaldonnee = $total['total'];
$nombre_de_page = ceil($totaldonnee/$nombre_de_donnee);

if (isset($_GET['page']))
{
$pageactuelle = intval($_GET['page']);
if ($pageactuelle > $nombre_de_page)
{
$pageactuelle = $nombre_de_page;
}
} else
{
$pageactuelle = 1;
}

$pageEntree = ($pageactuelle - 1)*($nombre_de_donnee);
$connexion = new ConnexionFactor();

if (isset($_POST['query']))
{
$search = $_POST['query'];
$search = '%'.$search.'%';
$query = "select * FROM payement  where  id LIKE '$search'
OR  commandeligne LIKE '$search'
OR  montant LIKE '$search'
OR  devise LIKE '$search'
OR  modalite LIKE '$search'
OR  client LIKE '$search'
OR  dateheure LIKE '$search'
OR  idrecu LIKE '$search'"
;}else 
{
$query = "select * FROM payement Order by id LIMIT $pageEntree, $nombre_de_donnee";
}
$donnees=$connexion->Connect()->query($query,PDO::FETCH_BOUND);
$donnees->bindColumn('id',$id);
$donnees->bindColumn('commandeligne',$commandeligne);
$donnees->bindColumn('montant',$montant);
$donnees->bindColumn('devise',$devise);
$donnees->bindColumn('modalite',$modalite);
$donnees->bindColumn('client',$client);
$donnees->bindColumn('dateheure',$dateheure);
$donnees->bindColumn('idrecu',$idrecu);
?>

<div class='product-status mg-b-15'>
<div class='container-fluid'>
<div class='row'>
<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
<div class='product-status-wrap'>
<h4>PAYEMENT List</h4>
<div class='asset-inner'>
<table>
<tr>
<th>ID</th>
<th>COMMANDELIGNE</th>
<th>MONTANT</th>
<th>DEVISE</th>
<th>MODALITE</th>
<th>CLIENT</th>
<th>DATEHEURE</th>
<th>IDRECU</th>
<th>MODIFIER</th>
<th>SUPPRIMER</th>
</tr>
<?php  while($donnees->fetch()){   ?>
<tr>
<td><?php print $id; ?></td><td><?php print $commandeligne; ?></td><td><?php print $montant; ?></td><td><?php print $devise; ?></td><td><?php print $modalite; ?></td><td><?php print $client; ?></td><td><?php print $dateheure; ?></td><td><?php print $idrecu; ?></td><td>
<a href='modifiepayement.php?id=<?php  print $id;  ?>' ><button data-toggle='tooltip' title='Edit' class='pd-setting-ed'><i class='fa fa-pencil-square-o' aria-hidden='true' ></i></button></a>
</td>
<td>
<form action='controler/payementphp?supprimer=<?php print $id; ?>'  method='post'    onsubmit='return confirmation();'>
<a href='controler/payementphp?supprimer=<?php  print $id;  ?>'><button data-toggle='tooltip' title='Trash' class='pd-setting-ed'><i class='fa fa-trash-o' aria-hidden='true'  ></i></button></a>
</form>
</td>
</tr>
<?php  }  ?>
</table>
<script>
function confirmation() {
return confirm('Êtes-vous sur de vouloir Supprimer la payement!');
}
</script>
</div>
<div class='custom-pagination'>
<ul class='pagination'>
<?php
include_once '../tools/pagination/paginefooter.php';
?>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
tabpayement.php