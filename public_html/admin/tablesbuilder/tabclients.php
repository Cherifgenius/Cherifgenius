
 <?php

include_once '../monFramework/databasegenius.php';

$connexion = new ConnexionFactor();

$nombre_de_donnee = 200;

$sommeur = ('SELECT count(*) AS total from clients');
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
$query = "select * FROM clients  where  id LIKE '$search'
OR  personne LIKE '$search'
OR  identifiant LIKE '$search'
OR  password LIKE '$search'
OR  compteurcon LIKE '$search'
OR  important LIKE '$search'"
;}else 
{
$query = "select * FROM clients Order by id LIMIT $pageEntree, $nombre_de_donnee";
}
$donnees=$connexion->Connect()->query($query,PDO::FETCH_BOUND);
$donnees->bindColumn('id',$id);
$donnees->bindColumn('personne',$personne);
$donnees->bindColumn('identifiant',$identifiant);
$donnees->bindColumn('password',$password);
$donnees->bindColumn('compteurcon',$compteurcon);
$donnees->bindColumn('important',$important);
?>

<div class='product-status mg-b-15'>
<div class='container-fluid'>
<div class='row'>
<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
<div class='product-status-wrap'>
<h4>CLIENTS List</h4>
<div class='asset-inner'>
<table>
<tr>
<th>ID</th>
<th>PERSONNE</th>
<th>IDENTIFIANT</th>
<th>PASSWORD</th>
<th>COMPTEURCON</th>
<th>IMPORTANT</th>
<th>MODIFIER</th>
<th>SUPPRIMER</th>
</tr>
<?php  while($donnees->fetch()){   ?>
<tr>
<td><?php print $id; ?></td><td><?php print $personne; ?></td><td><?php print $identifiant; ?></td><td><?php print $password; ?></td><td><?php print $compteurcon; ?></td><td><?php print $important; ?></td><td>
<a href='modifieclients.php?id=<?php  print $id;  ?>' ><button data-toggle='tooltip' title='Edit' class='pd-setting-ed'><i class='fa fa-pencil-square-o' aria-hidden='true' ></i></button></a>
</td>
<td>
<form action='controler/clientsphp?supprimer=<?php print $id; ?>'  method='post'    onsubmit='return confirmation();'>
<a href='controler/clientsphp?supprimer=<?php  print $id;  ?>'><button data-toggle='tooltip' title='Trash' class='pd-setting-ed'><i class='fa fa-trash-o' aria-hidden='true'  ></i></button></a>
</form>
</td>
</tr>
<?php  }  ?>
</table>
<script>
function confirmation() {
return confirm('Êtes-vous sur de vouloir Supprimer la clients!');
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
tabclients.php