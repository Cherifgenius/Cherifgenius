
 <?php

include_once '../monFramework/databasegenius.php';

$connexion = new ConnexionFactor();

$nombre_de_donnee = 200;

$sommeur = ('SELECT count(*) AS total from tracabiite');
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
$query = "select * FROM tracabiite  where  id LIKE '$search'
OR  clients LIKE '$search'
OR  ip LIKE '$search'
OR  zone LIKE '$search'
OR  terminal LIKE '$search'
OR  dateheureconn LIKE '$search'
OR  dateheuredeconn LIKE '$search'
OR  operation LIKE '$search'"
;}else 
{
$query = "select * FROM tracabiite Order by id LIMIT $pageEntree, $nombre_de_donnee";
}
$donnees=$connexion->Connect()->query($query,PDO::FETCH_BOUND);
$donnees->bindColumn('id',$id);
$donnees->bindColumn('clients',$clients);
$donnees->bindColumn('ip',$ip);
$donnees->bindColumn('zone',$zone);
$donnees->bindColumn('terminal',$terminal);
$donnees->bindColumn('dateheureconn',$dateheureconn);
$donnees->bindColumn('dateheuredeconn',$dateheuredeconn);
$donnees->bindColumn('operation',$operation);
?>

<div class='product-status mg-b-15'>
<div class='container-fluid'>
<div class='row'>
<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
<div class='product-status-wrap'>
<h4>TRACABIITE List</h4>
<div class='asset-inner'>
<table>
<tr>
<th>ID</th>
<th>CLIENTS</th>
<th>IP</th>
<th>ZONE</th>
<th>TERMINAL</th>
<th>DATEHEURECONN</th>
<th>DATEHEUREDECONN</th>
<th>OPERATION</th>
<th>MODIFIER</th>
<th>SUPPRIMER</th>
</tr>
<?php  while($donnees->fetch()){   ?>
<tr>
<td><?php print $id; ?></td><td><?php print $clients; ?></td><td><?php print $ip; ?></td><td><?php print $zone; ?></td><td><?php print $terminal; ?></td><td><?php print $dateheureconn; ?></td><td><?php print $dateheuredeconn; ?></td><td><?php print $operation; ?></td><td>
<a href='modifietracabiite.php?id=<?php  print $id;  ?>' ><button data-toggle='tooltip' title='Edit' class='pd-setting-ed'><i class='fa fa-pencil-square-o' aria-hidden='true' ></i></button></a>
</td>
<td>
<form action='controler/tracabiitephp?supprimer=<?php print $id; ?>'  method='post'    onsubmit='return confirmation();'>
<a href='controler/tracabiitephp?supprimer=<?php  print $id;  ?>'><button data-toggle='tooltip' title='Trash' class='pd-setting-ed'><i class='fa fa-trash-o' aria-hidden='true'  ></i></button></a>
</form>
</td>
</tr>
<?php  }  ?>
</table>
<script>
function confirmation() {
return confirm('Êtes-vous sur de vouloir Supprimer la tracabiite!');
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
tabtracabiite.php