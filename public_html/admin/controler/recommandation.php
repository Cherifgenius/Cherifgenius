
    <?php

session_start();

function input($data)
{
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

include_once '../modeles/recommandation.php';
include_once '../modeles/lestableaux.php';
function insertion()
{
  $ins = new ServiceRecommandation();
$recommandation = new Recommandation();
   $tab = new Tableau();
   $inss = $tab->recommandation;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$recommandation->setRecommandation($inss[$i],input($_POST[$inss[$i]]));
}
$ins->insert($recommandation);
}

function updated()
{
   $ins = new ServiceRecommandation();
   $recommandation = new Recommandation();
   $tab = new Tableau();
   $inss = $tab->recommandation;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$recommandation->setRecommandation($inss[$i],input($_POST[$inss[$i]]));
}
$recommandation->setRecommandation($inss[0],input($_POST[$inss[0]]));
$ins->update($recommandation);
}

function deleted()
{
   $ins = new ServiceRecommandation();
   $recommandation = new Recommandation();
   $tab = new Tableau();
   $inss = $tab->recommandation;
$recommandation->setRecommandation($inss[0],input($_POST[$inss[0]]));
$ins->delete($recommandation);
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
 