
 <?php

include_once '../monFramework/databasegenius.php';

$connexion = new ConnexionFactor();

$nombre_de_donnee = 200;

$sommeur = ('SELECT count(*) AS total from produits');
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
$query = "select * FROM produits  where  id LIKE '$search'
OR  designation LIKE '$search'
OR  genre LIKE '$search'
OR  marque LIKE '$search'
OR  poids LIKE '$search'
OR  codebar LIKE '$search'
OR  description LIKE '$search'
OR  ingredient LIKE '$search'
OR  image LIKE '$search'"
;}else 
{
$query = "select * FROM produits Order by id LIMIT $pageEntree, $nombre_de_donnee";
}
$donnees=$connexion->Connect()->query($query,PDO::FETCH_BOUND);
$donnees->bindColumn('id',$id);
$donnees->bindColumn('designation',$designation);
$donnees->bindColumn('genre',$genre);
$donnees->bindColumn('marque',$marque);
$donnees->bindColumn('poids',$poids);
$donnees->bindColumn('codebar',$codebar);
$donnees->bindColumn('description',$description);
$donnees->bindColumn('ingredient',$ingredient);
$donnees->bindColumn('prix',$prix);
$donnees->bindColumn('image',$image);
$donnees->bindColumn('image2',$image2);
$donnees->bindColumn('image3',$image3);

?>

<div class='product-status mg-b-15'>
<div class='container-fluid'>
<div class='row'>
<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
<div class='product-status-wrap'>
<h4>PRODUITS List</h4>
<div class='asset-inner'>
<table>
<tr>
<th>ID</th>
<th>DESIGNATION</th>
<th>GENRE</th>
<th>MARQUE</th>
<th>POIDS</th>
<th>CODEBAR</th>
<th>DESCRIPTION</th>
<th>INGREDIENT</th>
<th>PRIX</th>
<th>IMAGE</th>
<th>IMAGE2</th>
<th>IMAGE3</th>
<th>MODIFIER</th>
<th>SUPPRIMER</th>
</tr>
<?php  while($donnees->fetch()){   ?>
<tr>
<td><?php print $id; ?></td><td><?php print $designation; ?></td><td><?php print $genre; ?></td><td><?php print $marque; ?></td><td><?php print $poids; ?></td><td><?php print $codebar; ?></td><td><?php print $description; ?></td><td><?php print $ingredient; ?></td><td><?php print $prix; ?></td><td><?php print $image; ?></td><td><?php print $image2; ?></td><td><?php print $image3; ?></td><td>
<a href='modifieproduits.php?id=<?php  print $id;  ?>' ><button data-toggle='tooltip' title='Edit' class='pd-setting-ed'><i class='fa fa-pencil-square-o' aria-hidden='true' ></i></button></a>
</td>
<td>
<form action='controler/produitsphp?supprimer=<?php print $id; ?>'  method='post'    onsubmit='return confirmation();'>
<a href='controler/produitsphp?supprimer=<?php  print $id;  ?>'><button data-toggle='tooltip' title='Trash' class='pd-setting-ed'><i class='fa fa-trash-o' aria-hidden='true'  ></i></button></a>
</form>
</td>
</tr>
<?php  }  ?>
</table>
<script>
function confirmation() {
return confirm('Êtes-vous sur de vouloir Supprimer la produits!');
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
