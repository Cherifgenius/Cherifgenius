
    <?php

session_start();

function input($data)
{
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

include_once '../modeles/personne.php';
include_once '../modeles/lestableaux.php';
function insertion()
{
  $ins = new ServicePersonne();
$personne = new Personne();
   $tab = new Tableau();
   $inss = $tab->personne;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$personne->setPersonne($inss[$i],input($_POST[$inss[$i]]));
}
$ins->insert($personne);
}

function updated()
{
   $ins = new ServicePersonne();
   $personne = new Personne();
   $tab = new Tableau();
   $inss = $tab->personne;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$personne->setPersonne($inss[$i],input($_POST[$inss[$i]]));
}
$personne->setPersonne($inss[0],input($_POST[$inss[0]]));
$ins->update($personne);
}

function deleted()
{
   $ins = new ServicePersonne();
   $personne = new Personne();
   $tab = new Tableau();
   $inss = $tab->personne;
$personne->setPersonne($inss[0],input($_POST[$inss[0]]));
$ins->delete($personne);
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
 