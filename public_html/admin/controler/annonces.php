
    <?php

session_start();

function input($data)
{
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

include_once '../modeles/annonces.php';
include_once '../modeles/lestableaux.php';
function insertion()
{
  $ins = new ServiceAnnonces();
$annonces = new Annonces();
   $tab = new Tableau();
   $inss = $tab->annonces;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$annonces->setAnnonces($inss[$i],input($_POST[$inss[$i]]));
}
$ins->insert($annonces);
}

function updated()
{
   $ins = new ServiceAnnonces();
   $annonces = new Annonces();
   $tab = new Tableau();
   $inss = $tab->annonces;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$annonces->setAnnonces($inss[$i],input($_POST[$inss[$i]]));
}
$annonces->setAnnonces($inss[0],input($_POST[$inss[0]]));
$ins->update($annonces);
}

function deleted()
{
   $ins = new ServiceAnnonces();
   $annonces = new Annonces();
   $tab = new Tableau();
   $inss = $tab->annonces;
$annonces->setAnnonces($inss[0],input($_POST[$inss[0]]));
$ins->delete($annonces);
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
 