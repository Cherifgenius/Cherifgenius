
    <?php

session_start();

function input($data)
{
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

include_once '../modeles/tracabiite.php';
include_once '../modeles/lestableaux.php';
function insertion()
{
  $ins = new ServiceTracabiite();
$tracabiite = new Tracabiite();
   $tab = new Tableau();
   $inss = $tab->tracabiite;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$tracabiite->setTracabiite($inss[$i],input($_POST[$inss[$i]]));
}
$ins->insert($tracabiite);
}

function updated()
{
   $ins = new ServiceTracabiite();
   $tracabiite = new Tracabiite();
   $tab = new Tableau();
   $inss = $tab->tracabiite;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$tracabiite->setTracabiite($inss[$i],input($_POST[$inss[$i]]));
}
$tracabiite->setTracabiite($inss[0],input($_POST[$inss[0]]));
$ins->update($tracabiite);
}

function deleted()
{
   $ins = new ServiceTracabiite();
   $tracabiite = new Tracabiite();
   $tab = new Tableau();
   $inss = $tab->tracabiite;
$tracabiite->setTracabiite($inss[0],input($_POST[$inss[0]]));
$ins->delete($tracabiite);
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
 