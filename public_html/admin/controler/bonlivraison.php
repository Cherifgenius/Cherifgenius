
    <?php

session_start();

function input($data)
{
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

include_once '../modeles/bonlivraison.php';
include_once '../modeles/lestableaux.php';
function insertion()
{
  $ins = new ServiceBonlivraison();
$bonlivraison = new Bonlivraison();
   $tab = new Tableau();
   $inss = $tab->bonlivraison;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$bonlivraison->setBonlivraison($inss[$i],input($_POST[$inss[$i]]));
}
$ins->insert($bonlivraison);
}

function updated()
{
   $ins = new ServiceBonlivraison();
   $bonlivraison = new Bonlivraison();
   $tab = new Tableau();
   $inss = $tab->bonlivraison;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$bonlivraison->setBonlivraison($inss[$i],input($_POST[$inss[$i]]));
}
$bonlivraison->setBonlivraison($inss[0],input($_POST[$inss[0]]));
$ins->update($bonlivraison);
}

function deleted()
{
   $ins = new ServiceBonlivraison();
   $bonlivraison = new Bonlivraison();
   $tab = new Tableau();
   $inss = $tab->bonlivraison;
$bonlivraison->setBonlivraison($inss[0],input($_POST[$inss[0]]));
$ins->delete($bonlivraison);
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
 