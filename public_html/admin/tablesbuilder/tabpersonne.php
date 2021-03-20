
 <?php

include_once '../monFramework/databasegenius.php';

$connexion = new ConnexionFactor();

$nombre_de_donnee = 200;

$sommeur = ('SELECT count(*) AS total from personne');
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
$query = "select * FROM personne  where  id LIKE '$search'
OR  nom LIKE '$search'
OR  prenom LIKE '$search'
OR  contact LIKE '$search'
OR  adresse LIKE '$search'
OR  sexe LIKE '$search'
OR  adresse_email LIKE '$search'"
;}else 
{
$query = "select * FROM personne Order by id LIMIT $pageEntree, $nombre_de_donnee";
}
$donnees=$connexion->Connect()->query($query,PDO::FETCH_BOUND);
$donnees->bindColumn('id',$id);
$donnees->bindColumn('nom',$nom);
$donnees->bindColumn('prenom',$prenom);
$donnees->bindColumn('contact',$contact);
$donnees->bindColumn('adresse',$adresse);
$donnees->bindColumn('sexe',$sexe);
$donnees->bindColumn('adresse_email',$adresse_email);
?>

<div class='product-status mg-b-15'>
<div class='container-fluid'>
<div class='row'>
<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
<div class='product-status-wrap'>
<h4>PERSONNE List</h4>
<div class='asset-inner'>
<table>
<tr>
<th>ID</th>
<th>NOM</th>
<th>PRENOM</th>
<th>CONTACT</th>
<th>ADRESSE</th>
<th>SEXE</th>
<th>ADRESSE_EMAIL</th>
<th>MODIFIER</th>
<th>SUPPRIMER</th>
</tr>
<?php  while($donnees->fetch()){   ?>
<tr>
<td><?php print $id; ?></td><td><?php print $nom; ?></td><td><?php print $prenom; ?></td><td><?php print $contact; ?></td><td><?php print $adresse; ?></td><td><?php print $sexe; ?></td><td><?php print $adresse_email; ?></td><td>
<a href='modifiepersonne.php?id=<?php  print $id;  ?>' ><button data-toggle='tooltip' title='Edit' class='pd-setting-ed'><i class='fa fa-pencil-square-o' aria-hidden='true' ></i></button></a>
</td>
<td>
<form action='controler/personnephp?supprimer=<?php print $id; ?>'  method='post'    onsubmit='return confirmation();'>
<a href='controler/personnephp?supprimer=<?php  print $id;  ?>'><button data-toggle='tooltip' title='Trash' class='pd-setting-ed'><i class='fa fa-trash-o' aria-hidden='true'  ></i></button></a>
</form>
</td>
</tr>
<?php  }  ?>
</table>
<script>
function confirmation() {
return confirm('Êtes-vous sur de vouloir Supprimer la personne!');
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
tabpersonne.php