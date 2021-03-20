
    <?php

session_start();

function input($data)
{
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

include_once '../modeles/payement.php';
include_once '../modeles/lestableaux.php';
function insertion()
{
  $ins = new ServicePayement();
$payement = new Payement();
   $tab = new Tableau();
   $inss = $tab->payement;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$payement->setPayement($inss[$i],input($_POST[$inss[$i]]));
}
$ins->insert($payement);
}

function updated()
{
   $ins = new ServicePayement();
   $payement = new Payement();
   $tab = new Tableau();
   $inss = $tab->payement;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$payement->setPayement($inss[$i],input($_POST[$inss[$i]]));
}
$payement->setPayement($inss[0],input($_POST[$inss[0]]));
$ins->update($payement);
}

function deleted()
{
   $ins = new ServicePayement();
   $payement = new Payement();
   $tab = new Tableau();
   $inss = $tab->payement;
$payement->setPayement($inss[0],input($_POST[$inss[0]]));
$ins->delete($payement);
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
 