
  <?php
include_once '../monFramework/databasegenius.php';

include_once 'lestableaux.php';

class Bonlivraison {

function __construct()
{
     //nothing
}

function getBonlivraison($bonlivraison)
{
     return $this->bonlivraison[$bonlivraison];
}

function setBonlivraison($bonlivraison,$value)
{
     $this->bonlivraison[$bonlivraison] = $value;
}

}

include_once '../monFramework/databasegenius.php';

class ServiceBonlivraison extends Mapper{
protected function doInsert($object)
 {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->bonlivraison;
   $tabget = array();
   for ($i=1; $i < sizeof($inss) ; $i++) {
array_push($tabget, $object->getBonlivraison($inss[$i]));
 }
   unset($inss[0]);
   $crud->insertion($inss,$tabget,'bonlivraison');
 }

   protected function selectStmt()
   {
  //nothing;
   }
function update($object)
{
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->bonlivraison;
   $tabget = array();
   $base = $inss[0];
   $insss =array_merge(array_diff($inss,array($inss[0])));
   for ($i=0; $i < sizeof($insss) ; $i++) {
  array_push($tabget, $object->getBonlivraison($insss[$i]));
   }
   $crud->updated($insss,$tabget,'bonlivraison',$inss[0],$object->getBonlivraison($inss[0]));
  }

  function delete($object)
  {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->bonlivraison;
   $tabget= array();
   array_push($tabget, $object->getBonlivraison($inss[0]));

   $crud->deleted('bonlivraison',$inss[0],$tabget[0]);
  }

protected function doCreateObject(array $array){}

}

?>