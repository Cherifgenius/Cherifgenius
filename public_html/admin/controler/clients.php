
    <?php

session_start();

function input($data)
{
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

include_once '../modeles/clients.php';
include_once '../modeles/lestableaux.php';
function insertion()
{
  $ins = new ServiceClients();
$clients = new Clients();
   $tab = new Tableau();
   $inss = $tab->clients;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$clients->setClients($inss[$i],input($_POST[$inss[$i]]));
}
$ins->insert($clients);
}

function updated()
{
   $ins = new ServiceClients();
   $clients = new Clients();
   $tab = new Tableau();
   $inss = $tab->clients;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$clients->setClients($inss[$i],input($_POST[$inss[$i]]));
}
$clients->setClients($inss[0],input($_POST[$inss[0]]));
$ins->update($clients);
}

function deleted()
{
   $ins = new ServiceClients();
   $clients = new Clients();
   $tab = new Tableau();
   $inss = $tab->clients;
$clients->setClients($inss[0],input($_POST[$inss[0]]));
$ins->delete($clients);
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
 