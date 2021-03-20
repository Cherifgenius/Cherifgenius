
 <?php

include_once '../monFramework/databasegenius.php';

$connexion = new ConnexionFactor();

$nombre_de_donnee = 200;

$sommeur = ('SELECT count(*) AS total from stocks');
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
$query = "select * FROM stocks  where  id LIKE '$search'
OR  produit LIKE '$search'
OR  prixu LIKE '$search'
OR  quantite LIKE '$search'
OR  emplacement LIKE '$search'
OR  classe LIKE '$search'
OR  date LIKE '$search'
OR  dateexp LIKE '$search'"
;}else 
{
$query = "select * FROM stocks Order by id LIMIT $pageEntree, $nombre_de_donnee";
}
$donnees=$connexion->Connect()->query($query,PDO::FETCH_BOUND);
$donnees->bindColumn('id',$id);
$donnees->bindColumn('produit',$produit);
$donnees->bindColumn('prixu',$prixu);
$donnees->bindColumn('quantite',$quantite);
$donnees->bindColumn('emplacement',$emplacement);
$donnees->bindColumn('classe',$classe);
$donnees->bindColumn('date',$date);
$donnees->bindColumn('dateexp',$dateexp);
?>

<div class='product-status mg-b-15'>
<div class='container-fluid'>
<div class='row'>
<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
<div class='product-status-wrap'>
<h4>STOCKS List</h4>
<div class='asset-inner'>
<table>
<tr>
<th>ID</th>
<th>PRODUIT</th>
<th>PRIXU</th>
<th>QUANTITE</th>
<th>EMPLACEMENT</th>
<th>CLASSE</th>
<th>DATE</th>
<th>DATEEXP</th>
<th>MODIFIER</th>
<th>SUPPRIMER</th>
</tr>
<?php  while($donnees->fetch()){   ?>
<tr>
<td><?php print $id; ?></td><td><?php print $produit; ?></td><td><?php print $prixu; ?></td><td><?php print $quantite; ?></td><td><?php print $emplacement; ?></td><td><?php print $classe; ?></td><td><?php print $date; ?></td><td><?php print $dateexp; ?></td><td>
<a href='modifiestocks.php?id=<?php  print $id;  ?>' ><button data-toggle='tooltip' title='Edit' class='pd-setting-ed'><i class='fa fa-pencil-square-o' aria-hidden='true' ></i></button></a>
</td>
<td>
<form action='controler/stocks.php?supprimer=<?php print $id; ?>'  method='post'    onsubmit='return confirmation();'>
<a href='controler/stocksphp?supprimer=<?php  print $id;  ?>'><button data-toggle='tooltip' title='Trash' class='pd-setting-ed'><i class='fa fa-trash-o' aria-hidden='true'  ></i></button></a>
</form>
</td>
</tr>
<?php  }  ?>
</table>
<script>
function confirmation() {
return confirm('Êtes-vous sur de vouloir Supprimer la stocks!');
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
