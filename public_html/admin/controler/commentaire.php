
    <?php

session_start();

function input($data)
{
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

include_once '../modeles/commentaire.php';
include_once '../modeles/lestableaux.php';
function insertion()
{
  $ins = new ServiceCommentaire();
$commentaire = new Commentaire();
   $tab = new Tableau();
   $inss = $tab->commentaire;
   $_POST[$inss[5]] = date('d-m-Y H:i');
for ($i=1; $i <sizeof($inss)  ; $i++) {
$commentaire->setCommentaire($inss[$i],input($_POST[$inss[$i]]));
}
$ins->insert($commentaire);

}

function updated()
{
   $ins = new ServiceCommentaire();
   $commentaire = new Commentaire();
   $tab = new Tableau();
   $inss = $tab->commentaire;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$commentaire->setCommentaire($inss[$i],input($_POST[$inss[$i]]));
}
$commentaire->setCommentaire($inss[0],input($_POST['idd']));
$ins->update($commentaire);
}

function deleted()
{

  if (isset($_GET['supprimer'])) {
    $delet = $_GET['supprimer'];
    $ins = new ServiceCommentaire();
   $commentaire = new Commentaire();
   $tab = new Tableau();
   $inss = $tab->commentaire;
$commentaire->setCommentaire($inss[0],$delet);
$ins->delete($commentaire);
  }
   
}

if (isset($_POST['insert']))
{
insertion();
header("location:".$_SERVER['HTTP_REFERER']);}

if (isset($_POST['update']))
{
updated();
}

deleted();
?>
 