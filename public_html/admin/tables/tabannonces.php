
 <?php

include_once '../monFramework/databasegenius.php';

$connexion = new ConnexionFactor();

$nombre_de_donnee = 200;

$sommeur = ('SELECT count(*) AS total from annonces');
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
$query = "select * FROM annonces  where  id LIKE '$search'
OR  produit LIKE '$search'
OR  date LIKE '$search'
OR  reduction LIKE '$search'
OR  active LIKE '$search'
OR  bloque LIKE '$search'
OR  lancepage LIKE '$search'"
;}else 
{
$query = "select * FROM annonces Order by id LIMIT $pageEntree, $nombre_de_donnee";
}
$donnees=$connexion->Connect()->query($query,PDO::FETCH_BOUND);
$donnees->bindColumn('id',$id);
$donnees->bindColumn('produit',$produit);
$donnees->bindColumn('date',$date);
$donnees->bindColumn('reduction',$reduction);
$donnees->bindColumn('active',$active);
$donnees->bindColumn('bloque',$bloque);
$donnees->bindColumn('lancepage',$lancepage);
?>

<div class='product-status mg-b-15'>
<div class='container-fluid'>
<div class='row'>
<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
<div class='product-status-wrap'>
<h4>ANNONCES List</h4>
<div class='asset-inner'>
<table>
<tr>
<th>ID</th>
<th>PRODUIT</th>
<th>DATE</th>
<th>REDUCTION</th>
<th>ACTIVE</th>
<th>BLOQUE</th>
<th>LANCEPAGE</th>
<th>MODIFIER</th>
<th>SUPPRIMER</th>
</tr>
<?php  while($donnees->fetch()){   ?>
<tr>
<td><?php print $id; ?></td><td><?php print $produit; ?></td><td><?php print $date; ?></td><td><?php print $reduction; ?></td><td><?php print $active; ?></td><td><?php print $bloque; ?></td><td><?php print $lancepage; ?></td><td>
<a href='modifieannonces.php?id=<?php  print $id;  ?>' ><button data-toggle='tooltip' title='Edit' class='pd-setting-ed'><i class='fa fa-pencil-square-o' aria-hidden='true' ></i></button></a>
</td>
<td>
<form action='controler/annoncesphp?supprimer=<?php print $id; ?>'  method='post'    onsubmit='return confirmation();'>
<a href='controler/annoncesphp?supprimer=<?php  print $id;  ?>'><button data-toggle='tooltip' title='Trash' class='pd-setting-ed'><i class='fa fa-trash-o' aria-hidden='true'  ></i></button></a>
</form>
</td>
</tr>
<?php  }  ?>
</table>
<script>
function confirmation() {
return confirm('Êtes-vous sur de vouloir Supprimer la annonces!');
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
tabannonces.php