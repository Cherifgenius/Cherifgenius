
    <?php

session_start();

function input($data)
{
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

include_once '../modeles/commentairecli.php';
include_once '../modeles/lestableaux.php';
function insertion()
{
  $ins = new ServiceCommentairecli();
$commentairecli = new Commentairecli();
   $tab = new Tableau();
   $inss = $tab->commentairecli;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$commentairecli->setCommentairecli($inss[$i],input($_POST[$inss[$i]]));
}
$ins->insert($commentairecli);
}

function updated()
{
   $ins = new ServiceCommentairecli();
   $commentairecli = new Commentairecli();
   $tab = new Tableau();
   $inss = $tab->commentairecli;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$commentairecli->setCommentairecli($inss[$i],input($_POST[$inss[$i]]));
}
$commentairecli->setCommentairecli($inss[0],input($_POST[$inss[0]]));
$ins->update($commentairecli);
}

function deleted()
{
   $ins = new ServiceCommentairecli();
   $commentairecli = new Commentairecli();
   $tab = new Tableau();
   $inss = $tab->commentairecli;
$commentairecli->setCommentairecli($inss[0],input($_POST[$inss[0]]));
$ins->delete($commentairecli);
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
 