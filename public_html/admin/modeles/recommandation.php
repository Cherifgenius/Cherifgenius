
  <?php
include_once '../monFramework/databasegenius.php';

include_once 'lestableaux.php';

class Recommandation {

function __construct()
{
     //nothing
}

function getRecommandation($recommandation)
{
     return $this->recommandation[$recommandation];
}

function setRecommandation($recommandation,$value)
{
     $this->recommandation[$recommandation] = $value;
}

}

include_once '../monFramework/databasegenius.php';

class ServiceRecommandation extends Mapper{
protected function doInsert($object)
 {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->recommandation;
   $tabget = array();
   for ($i=1; $i < sizeof($inss) ; $i++) {
array_push($tabget, $object->getRecommandation($inss[$i]));
 }
   unset($inss[0]);
   $crud->insertion($inss,$tabget,'recommandation');
 }

   protected function selectStmt()
   {
  //nothing;
   }
function update($object)
{
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->recommandation;
   $tabget = array();
   $base = $inss[0];
   $insss =array_merge(array_diff($inss,array($inss[0])));
   for ($i=0; $i < sizeof($insss) ; $i++) {
  array_push($tabget, $object->getRecommandation($insss[$i]));
   }
   $crud->updated($insss,$tabget,'recommandation',$inss[0],$object->getRecommandation($inss[0]));
  }

  function delete($object)
  {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->recommandation;
   $tabget= array();
   array_push($tabget, $object->getRecommandation($inss[0]));

   $crud->deleted('recommandation',$inss[0],$tabget[0]);
  }

protected function doCreateObject(array $array){}

}

?>