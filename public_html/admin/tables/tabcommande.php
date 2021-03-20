
 <?php

include_once '../monFramework/databasegenius.php';

$connexion = new ConnexionFactor();

$nombre_de_donnee = 200;

$sommeur = ('SELECT count(*) AS total from commande');
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
$query = "select * FROM commande  where  id LIKE '$search'
OR  produit LIKE '$search'
OR  client LIKE '$search'
OR  dateheure LIKE '$search'
OR  prix LIKE '$search'
OR  quantite LIKE '$search'
OR  idpanier LIKE '$search'"
;}else 
{
$query = "select * FROM commande Order by id LIMIT $pageEntree, $nombre_de_donnee";
}
$donnees=$connexion->Connect()->query($query,PDO::FETCH_BOUND);
$donnees->bindColumn('id',$id);
$donnees->bindColumn('produit',$produit);
$donnees->bindColumn('client',$client);
$donnees->bindColumn('dateheure',$dateheure);
$donnees->bindColumn('prix',$prix);
$donnees->bindColumn('quantite',$quantite);
$donnees->bindColumn('idpanier',$idpanier);
?>

<div class='product-status mg-b-15'>
<div class='container-fluid'>
<div class='row'>
<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
<div class='product-status-wrap'>
<h4>COMMANDE List</h4>
<div class='asset-inner'>
<table>
<tr>
<th>ID</th>
<th>PRODUIT</th>
<th>CLIENT</th>
<th>DATEHEURE</th>
<th>PRIX</th>
<th>QUANTITE</th>
<th>IDPANIER</th>
<th>MODIFIER</th>
<th>SUPPRIMER</th>
</tr>
<?php  while($donnees->fetch()){   ?>
<tr>
<td><?php print $id; ?></td><td><?php print $produit; ?></td><td><?php print $client; ?></td><td><?php print $dateheure; ?></td><td><?php print $prix; ?></td><td><?php print $quantite; ?></td><td><?php print $idpanier; ?></td><td>
<a href='modifiecommande.php?id=<?php  print $id;  ?>' ><button data-toggle='tooltip' title='Edit' class='pd-setting-ed'><i class='fa fa-pencil-square-o' aria-hidden='true' ></i></button></a>
</td>
<td>
<form action='controler/commandephp?supprimer=<?php print $id; ?>'  method='post'    onsubmit='return confirmation();'>
<a href='controler/commandephp?supprimer=<?php  print $id;  ?>'><button data-toggle='tooltip' title='Trash' class='pd-setting-ed'><i class='fa fa-trash-o' aria-hidden='true'  ></i></button></a>
</form>
</td>
</tr>
<?php  }  ?>
</table>
<script>
function confirmation() {
return confirm('Êtes-vous sur de vouloir Supprimer la commande!');
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
tabcommande.php