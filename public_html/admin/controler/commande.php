
    <?php

session_start();

function input($data)
{
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

include_once '../modeles/commande.php';
include_once '../modeles/lestableaux.php';
function insertion()
{
  $ins = new ServiceCommande();
$commande = new Commande();
   $tab = new Tableau();
   $inss = $tab->commande;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$commande->setCommande($inss[$i],input($_POST[$inss[$i]]));
}
$ins->insert($commande);
}

function updated()
{
   $ins = new ServiceCommande();
   $commande = new Commande();
   $tab = new Tableau();
   $inss = $tab->commande;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$commande->setCommande($inss[$i],input($_POST[$inss[$i]]));
}
$commande->setCommande($inss[0],input($_POST[$inss[0]]));
$ins->update($commande);
}

function deleted()
{
   $ins = new ServiceCommande();
   $commande = new Commande();
   $tab = new Tableau();
   $inss = $tab->commande;
$commande->setCommande($inss[0],input($_POST[$inss[0]]));
$ins->delete($commande);
}

if (isset($_POST['insert']))
{
insertion();
}

if (isset($_POST['update']))
{
updated();
}

if (isset($_POST['delete']))
{
deleted();
}

?>
 