
  <?php
include_once '../monFramework/databasegenius.php';

include_once 'lestableaux.php';

class Clients {

function __construct()
{
     //nothing
}

function getClients($clients)
{
     return $this->clients[$clients];
}

function setClients($clients,$value)
{
     $this->clients[$clients] = $value;
}

}

include_once '../monFramework/databasegenius.php';

class ServiceClients extends Mapper{
protected function doInsert($object)
 {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->clients;
   $tabget = array();
   for ($i=1; $i < sizeof($inss) ; $i++) {
array_push($tabget, $object->getClients($inss[$i]));
 }
   unset($inss[0]);
   $crud->insertion($inss,$tabget,'clients');
 }

   protected function selectStmt()
   {
  //nothing;
   }
function update($object)
{
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->clients;
   $tabget = array();
   $base = $inss[0];
   $insss =array_merge(array_diff($inss,array($inss[0])));
   for ($i=0; $i < sizeof($insss) ; $i++) {
  array_push($tabget, $object->getClients($insss[$i]));
   }
   $crud->updated($insss,$tabget,'clients',$inss[0],$object->getClients($inss[0]));
  }

  function delete($object)
  {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->clients;
   $tabget= array();
   array_push($tabget, $object->getClients($inss[0]));

   $crud->deleted('clients',$inss[0],$tabget[0]);
  }

protected function doCreateObject(array $array){}

}

?>