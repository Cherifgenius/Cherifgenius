
 <?php

include_once '../monFramework/databasegenius.php';

$connexion = new ConnexionFactor();

$nombre_de_donnee = 200;

$sommeur = ('SELECT count(*) AS total from bonlivraison');
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
$query = "select * FROM bonlivraison  where  id LIKE '$search'
OR  client LIKE '$search'
OR  produit LIKE '$search'
OR  adresse LIKE '$search'
OR  quantitelivre LIKE '$search'
OR  quantiterestant LIKE '$search'
OR  dateheure LIKE '$search'
OR  moyenlivraison LIKE '$search'
OR  fraislivraison LIKE '$search'
OR  livreur/societe LIKE '$search'
OR  tempslivraison LIKE '$search'
OR  poids LIKE '$search'
OR  valide LIKE '$search'"
;}else 
{
$query = "select * FROM bonlivraison Order by id LIMIT $pageEntree, $nombre_de_donnee";
}
$donnees=$connexion->Connect()->query($query,PDO::FETCH_BOUND);
$donnees->bindColumn('id',$id);
$donnees->bindColumn('client',$client);
$donnees->bindColumn('produit',$produit);
$donnees->bindColumn('adresse',$adresse);
$donnees->bindColumn('quantitelivre',$quantitelivre);
$donnees->bindColumn('quantiterestant',$quantiterestant);
$donnees->bindColumn('dateheure',$dateheure);
$donnees->bindColumn('moyenlivraison',$moyenlivraison);
$donnees->bindColumn('fraislivraison',$fraislivraison);
$donnees->bindColumn('livreur/societe',$livreur/societe);
$donnees->bindColumn('tempslivraison',$tempslivraison);
$donnees->bindColumn('poids',$poids);
$donnees->bindColumn('valide',$valide);
?>

<div class='product-status mg-b-15'>
<div class='container-fluid'>
<div class='row'>
<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
<div class='product-status-wrap'>
<h4>BONLIVRAISON List</h4>
<div class='asset-inner'>
<table>
<tr>
<th>ID</th>
<th>CLIENT</th>
<th>PRODUIT</th>
<th>ADRESSE</th>
<th>QUANTITELIVRE</th>
<th>QUANTITERESTANT</th>
<th>DATEHEURE</th>
<th>MOYENLIVRAISON</th>
<th>FRAISLIVRAISON</th>
<th>LIVREUR/SOCIETE</th>
<th>TEMPSLIVRAISON</th>
<th>POIDS</th>
<th>VALIDE</th>
<th>MODIFIER</th>
<th>SUPPRIMER</th>
</tr>
<?php  while($donnees->fetch()){   ?>
<tr>
<td><?php print $id; ?></td><td><?php print $client; ?></td><td><?php print $produit; ?></td><td><?php print $adresse; ?></td><td><?php print $quantitelivre; ?></td><td><?php print $quantiterestant; ?></td><td><?php print $dateheure; ?></td><td><?php print $moyenlivraison; ?></td><td><?php print $fraislivraison; ?></td><td><?php print $livreur/societe; ?></td><td><?php print $tempslivraison; ?></td><td><?php print $poids; ?></td><td><?php print $valide; ?></td><td>
<a href='modifiebonlivraison.php?id=<?php  print $id;  ?>' ><button data-toggle='tooltip' title='Edit' class='pd-setting-ed'><i class='fa fa-pencil-square-o' aria-hidden='true' ></i></button></a>
</td>
<td>
<form action='controler/bonlivraisonphp?supprimer=<?php print $id; ?>'  method='post'    onsubmit='return confirmation();'>
<a href='controler/bonlivraisonphp?supprimer=<?php  print $id;  ?>'><button data-toggle='tooltip' title='Trash' class='pd-setting-ed'><i class='fa fa-trash-o' aria-hidden='true'  ></i></button></a>
</form>
</td>
</tr>
<?php  }  ?>
</table>
<script>
function confirmation() {
return confirm('Êtes-vous sur de vouloir Supprimer la bonlivraison!');
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
tabbonlivraison.php