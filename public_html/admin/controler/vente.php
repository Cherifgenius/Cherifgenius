
    <?php

session_start();

function input($data)
{
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

include_once '../modeles/vente.php';
include_once '../modeles/lestableaux.php';
function insertion()
{
  $ins = new ServiceVente();
$vente = new Vente();
   $tab = new Tableau();
   $inss = $tab->vente;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$vente->setVente($inss[$i],input($_POST[$inss[$i]]));
}
$ins->insert($vente);
}

function updated()
{
   $ins = new ServiceVente();
   $vente = new Vente();
   $tab = new Tableau();
   $inss = $tab->vente;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$vente->setVente($inss[$i],input($_POST[$inss[$i]]));
}
$vente->setVente($inss[0],input($_POST[$inss[0]]));
$ins->update($vente);
}

function deleted()
{
   $ins = new ServiceVente();
   $vente = new Vente();
   $tab = new Tableau();
   $inss = $tab->vente;
$vente->setVente($inss[0],input($_POST[$inss[0]]));
$ins->delete($vente);
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
 