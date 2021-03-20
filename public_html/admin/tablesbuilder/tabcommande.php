
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
OR  nom LIKE '$search'
OR  prenom LIKE '$search'
OR  telephone LIKE '$search'
OR  email LIKE '$search'
OR  ville LIKE '$search'
OR  adresse1 LIKE '$search'
OR  adresse2 LIKE '$search'
OR  quartier LIKE '$search'
OR  codepostal LIKE '$search'
OR  note LIKE '$search"
;}else 
{
$query = "select * FROM commande Order by id LIMIT $pageEntree, $nombre_de_donnee";
}
$donnees=$connexion->Connect()->query($query,PDO::FETCH_BOUND);
$donnees->bindColumn('id',$id);
$donnees->bindColumn('nom',$nom);
$donnees->bindColumn('prenom',$prenom);
$donnees->bindColumn('telephone',$telephone);
$donnees->bindColumn('email',$email);
$donnees->bindColumn('ville',$ville);
$donnees->bindColumn('adresse1',$adresse1);
$donnees->bindColumn('adresse2',$adresse2);
$donnees->bindColumn('quartier',$quartier);
$donnees->bindColumn('codepostal',$codepostal);
$donnees->bindColumn('note',$note);
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
<th>NOM</th>
<th>PRENOM</th>
<th>TELEPHONE</th>
<th>EMAIL</th>
<th>VILLE</th>
<th>ADRESSE1</th>
<th>ADRESSE2</th>
<th>QUARTIER</th>
<th>CODEPOSTAL</th>
<th>NOTE</th>
<th>COMMANDE</th>
<th>SUPPRIMER</th>
</tr>
<?php  while($donnees->fetch()){   ?>
<tr>
<td><?php print $id; ?></td><td><?php print $nom; ?></td><td><?php print $prenom; ?></td><td><?php print $telephone; ?></td><td><?php print $email; ?></td><td><?php print $ville; ?></td><td><?php print $adresse1; ?></td><td><?php print $adresse2; ?></td><td><?php print $quartier; ?></td><td><?php print $codepostal; ?></td><td><?php print $note; ?></td>
<td>
<a href='panier.php?id=<?php  print $id;  ?>' >voirs</a>
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
