
    <?php

session_start();

function input($data)
{
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

include_once '../modeles/admin.php';
include_once '../modeles/lestableaux.php';
function insertion()
{
  $ins = new ServiceAdmin();
$admin = new Admin();
   $tab = new Tableau();
   $inss = $tab->admin;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$admin->setAdmin($inss[$i],input($_POST[$inss[$i]]));
}
$ins->insert($admin);
}

function updated()
{
   $ins = new ServiceAdmin();
   $admin = new Admin();
   $tab = new Tableau();
   $inss = $tab->admin;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$admin->setAdmin($inss[$i],input($_POST[$inss[$i]]));
}
$admin->setAdmin($inss[0],input($_POST[$inss[0]]));
$ins->update($admin);
}

function deleted()
{
   $ins = new ServiceAdmin();
   $admin = new Admin();
   $tab = new Tableau();
   $inss = $tab->admin;
$admin->setAdmin($inss[0],input($_POST[$inss[0]]));
$ins->delete($admin);
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
 