
  <?php
include_once '../monFramework/databasegenius.php';

include_once 'lestableaux.php';

class Commentairecli {

function __construct()
{
     //nothing
}

function getCommentairecli($commentairecli)
{
     return $this->commentairecli[$commentairecli];
}

function setCommentairecli($commentairecli,$value)
{
     $this->commentairecli[$commentairecli] = $value;
}

}

include_once '../monFramework/databasegenius.php';

class ServiceCommentairecli extends Mapper{
protected function doInsert($object)
 {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->commentairecli;
   $tabget = array();
   for ($i=1; $i < sizeof($inss) ; $i++) {
array_push($tabget, $object->getCommentairecli($inss[$i]));
 }
   unset($inss[0]);
   $crud->insertion($inss,$tabget,'commentairecli');
 }

   protected function selectStmt()
   {
  //nothing;
   }
function update($object)
{
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->commentairecli;
   $tabget = array();
   $base = $inss[0];
   $insss =array_merge(array_diff($inss,array($inss[0])));
   for ($i=0; $i < sizeof($insss) ; $i++) {
  array_push($tabget, $object->getCommentairecli($insss[$i]));
   }
   $crud->updated($insss,$tabget,'commentairecli',$inss[0],$object->getCommentairecli($inss[0]));
  }

  function delete($object)
  {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->commentairecli;
   $tabget= array();
   array_push($tabget, $object->getCommentairecli($inss[0]));

   $crud->deleted('commentairecli',$inss[0],$tabget[0]);
  }

protected function doCreateObject(array $array){}

}

?>