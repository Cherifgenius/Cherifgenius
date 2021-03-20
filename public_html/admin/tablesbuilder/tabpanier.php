
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
$idd = $_GET['id'];
if (isset($_POST['query']))
{
$search = $_POST['query'];
$search = '%'.$search.'%';
$query = "select * FROM panier  where  id LIKE '$search'
OR  produit LIKE '$search'
OR  quantite LIKE '$search'
OR  prixu LIKE '$search'
OR  idcommande LIKE '$search'
OR  dateheure LIKE '$search'"
;}else 
{
$query = "select * FROM panier where idcommande = '$idd' Order by id LIMIT $pageEntree, $nombre_de_donnee";
}
$donnees=$connexion->Connect()->query($query,PDO::FETCH_BOUND);
$donnees->bindColumn('id',$id);
$donnees->bindColumn('produit',$produit);
$donnees->bindColumn('quantite',$quantite);
$donnees->bindColumn('prixu',$prixu);
$donnees->bindColumn('idcommande',$idcommande);
$donnees->bindColumn('dateheure',$dateheure);
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
<th>QUANTITE</th>
<th>PRIXU</th>
<th>IDCOMMANDE</th>
<th>DATEHEURE</th>
</tr>
<?php  while($donnees->fetch()){   ?>
<tr>
<td><?php print $id; ?></td><td><?php print $produit; ?></td><td><?php print $quantite; ?></td><td><?php print $prixu; ?></td><td><?php print $idcommande; ?></td><td><?php print $dateheure; ?></td>
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
