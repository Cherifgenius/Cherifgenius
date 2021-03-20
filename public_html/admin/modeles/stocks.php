
  <?php
include_once '../monFramework/databasegenius.php';

include_once 'lestableaux.php';

class Stocks {

function __construct()
{
     //nothing
}

function getStocks($stocks)
{
     return $this->stocks[$stocks];
}

function setStocks($stocks,$value)
{
     $this->stocks[$stocks] = $value;
}

}

include_once '../monFramework/databasegenius.php';

class ServiceStocks extends Mapper{
protected function doInsert($object)
 {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->stocks;
   $tabget = array();
   for ($i=1; $i < sizeof($inss) ; $i++) {
array_push($tabget, $object->getStocks($inss[$i]));
 }
   unset($inss[0]);
   $crud->insertion($inss,$tabget,'stocks');
 }

   protected function selectStmt()
   {
  //nothing;
   }
function update($object)
{
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->stocks;
   $tabget = array();
   $base = $inss[0];
   $insss =array_merge(array_diff($inss,array($inss[0])));
   for ($i=0; $i < sizeof($insss) ; $i++) {
  array_push($tabget, $object->getStocks($insss[$i]));
   }
   $crud->updated($insss,$tabget,'stocks',$inss[0],$object->getStocks($inss[0]));
  }

  function delete($object)
  {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->stocks;
   $tabget= array();
   array_push($tabget, $object->getStocks($inss[0]));

   $crud->deleted('stocks',$inss[0],$tabget[0]);
  }

protected function doCreateObject(array $array){}

}

?>