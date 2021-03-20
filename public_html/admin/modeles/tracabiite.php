
  <?php
include_once '../monFramework/databasegenius.php';

include_once 'lestableaux.php';

class Tracabiite {

function __construct()
{
     //nothing
}

function getTracabiite($tracabiite)
{
     return $this->tracabiite[$tracabiite];
}

function setTracabiite($tracabiite,$value)
{
     $this->tracabiite[$tracabiite] = $value;
}

}

include_once '../monFramework/databasegenius.php';

class ServiceTracabiite extends Mapper{
protected function doInsert($object)
 {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->tracabiite;
   $tabget = array();
   for ($i=1; $i < sizeof($inss) ; $i++) {
array_push($tabget, $object->getTracabiite($inss[$i]));
 }
   unset($inss[0]);
   $crud->insertion($inss,$tabget,'tracabiite');
 }

   protected function selectStmt()
   {
  //nothing;
   }
function update($object)
{
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->tracabiite;
   $tabget = array();
   $base = $inss[0];
   $insss =array_merge(array_diff($inss,array($inss[0])));
   for ($i=0; $i < sizeof($insss) ; $i++) {
  array_push($tabget, $object->getTracabiite($insss[$i]));
   }
   $crud->updated($insss,$tabget,'tracabiite',$inss[0],$object->getTracabiite($inss[0]));
  }

  function delete($object)
  {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->tracabiite;
   $tabget= array();
   array_push($tabget, $object->getTracabiite($inss[0]));

   $crud->deleted('tracabiite',$inss[0],$tabget[0]);
  }

protected function doCreateObject(array $array){}

}

?>