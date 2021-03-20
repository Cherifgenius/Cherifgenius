
  <?php
include_once '../monFramework/databasegenius.php';

include_once 'lestableaux.php';

class Payement {

function __construct()
{
     //nothing
}

function getPayement($payement)
{
     return $this->payement[$payement];
}

function setPayement($payement,$value)
{
     $this->payement[$payement] = $value;
}

}

include_once '../monFramework/databasegenius.php';

class ServicePayement extends Mapper{
protected function doInsert($object)
 {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->payement;
   $tabget = array();
   for ($i=1; $i < sizeof($inss) ; $i++) {
array_push($tabget, $object->getPayement($inss[$i]));
 }
   unset($inss[0]);
   $crud->insertion($inss,$tabget,'payement');
 }

   protected function selectStmt()
   {
  //nothing;
   }
function update($object)
{
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->payement;
   $tabget = array();
   $base = $inss[0];
   $insss =array_merge(array_diff($inss,array($inss[0])));
   for ($i=0; $i < sizeof($insss) ; $i++) {
  array_push($tabget, $object->getPayement($insss[$i]));
   }
   $crud->updated($insss,$tabget,'payement',$inss[0],$object->getPayement($inss[0]));
  }

  function delete($object)
  {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->payement;
   $tabget= array();
   array_push($tabget, $object->getPayement($inss[0]));

   $crud->deleted('payement',$inss[0],$tabget[0]);
  }

protected function doCreateObject(array $array){}

}

?>