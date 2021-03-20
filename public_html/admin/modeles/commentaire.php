
  <?php
include_once '../monFramework/databasegenius.php';

include_once 'lestableaux.php';

class Commentaire {

function __construct()
{
     //nothing
}

function getCommentaire($commentaire)
{
     return $this->commentaire[$commentaire];
}

function setCommentaire($commentaire,$value)
{
     $this->commentaire[$commentaire] = $value;
}

}

include_once '../monFramework/databasegenius.php';

class ServiceCommentaire extends Mapper{
protected function doInsert($object)
 {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->commentaire;
   $tabget = array();
   for ($i=1; $i < sizeof($inss) ; $i++) {
array_push($tabget, $object->getCommentaire($inss[$i]));
 }
   unset($inss[0]);
   $crud->insertion($inss,$tabget,'commentaire');
 }

   protected function selectStmt()
   {
  //nothing;
   }
function update($object)
{
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->commentaire;
   $tabget = array();
   $base = $inss[0];
   $insss =array_merge(array_diff($inss,array($inss[0])));
   for ($i=0; $i < sizeof($insss) ; $i++) {
  array_push($tabget, $object->getCommentaire($insss[$i]));
   }
   $crud->updated($insss,$tabget,'commentaire',$inss[0],$object->getCommentaire($inss[0]));
  }

  function delete($object)
  {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->commentaire;
   $tabget= array();
   array_push($tabget, $object->getCommentaire($inss[0]));

   $crud->deleted('commentaire',$inss[0],$tabget[0]);
  }

protected function doCreateObject(array $array){}

}

?>