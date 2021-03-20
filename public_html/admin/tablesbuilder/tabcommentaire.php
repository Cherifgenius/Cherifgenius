
 <?php

include_once '../monFramework/databasegenius.php';

$connexion = new ConnexionFactor();

$nombre_de_donnee = 200;

$sommeur = ('SELECT count(*) AS total from commentaire');
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
$query = "select * FROM commentaire  where  id LIKE '$search'
OR  nomcomplet LIKE '$search'
OR  email LIKE '$search'
OR  contact LIKE '$search'
OR  commentaire LIKE '$search'
OR  dateheure LIKE '$search'
OR  idproduit LIKE '$search'"
;}else 
{
$query = "select * FROM commentaire Order by id LIMIT $pageEntree, $nombre_de_donnee";
}
$donnees=$connexion->Connect()->query($query,PDO::FETCH_BOUND);
$donnees->bindColumn('id',$id);
$donnees->bindColumn('nomcomplet',$nomcomplet);
$donnees->bindColumn('email',$email);
$donnees->bindColumn('contact',$contact);
$donnees->bindColumn('commentaire',$commentaire);
$donnees->bindColumn('dateheure',$dateheure);
$donnees->bindColumn('idproduit',$idproduit);
?>

<div class='product-status mg-b-15'>
<div class='container-fluid'>
<div class='row'>
<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
<div class='product-status-wrap'>
<h4>COMMENTAIRE List</h4>
<div class='asset-inner'>
<table>
<tr>
<th>ID</th>
<th>NOMCOMPLET</th>
<th>EMAIL</th>
<th>CONTACT</th>
<th>COMMENTAIRE</th>
<th>DATEHEURE</th>
<th>IDPRODUIT</th>
<th>MODIFIER</th>
<th>SUPPRIMER</th>
</tr>
<?php  while($donnees->fetch()){   ?>
<tr>
<td><?php print $id; ?></td><td><?php print $nomcomplet; ?></td><td><?php print $email; ?></td><td><?php print $contact; ?></td><td><?php print $commentaire; ?></td><td><?php print $dateheure; ?></td><td><?php print $idproduit; ?></td><td>
<a href='modifiecommentaire.php?id=<?php  print $id;  ?>' ><button data-toggle='tooltip' title='Edit' class='pd-setting-ed'><i class='fa fa-pencil-square-o' aria-hidden='true' ></i></button></a>
</td>
<td>
<form action='controler/commentairephp?supprimer=<?php print $id; ?>'  method='post'    onsubmit='return confirmation();'>
<a href='controler/commentairephp?supprimer=<?php  print $id;  ?>'><button data-toggle='tooltip' title='Trash' class='pd-setting-ed'><i class='fa fa-trash-o' aria-hidden='true'  ></i></button></a>
</form>
</td>
</tr>
<?php  }  ?>
</table>
<script>
function confirmation() {
return confirm('Êtes-vous sur de vouloir Supprimer la commentaire!');
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
tabcommentaire.php