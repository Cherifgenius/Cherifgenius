
  <?php
include_once '../monFramework/databasegenius.php';

include_once 'lestableaux.php';

class Admin {

function __construct()
{
     //nothing
}

function getAdmin($admin)
{
     return $this->admin[$admin];
}

function setAdmin($admin,$value)
{
     $this->admin[$admin] = $value;
}

}

include_once '../monFramework/databasegenius.php';

class ServiceAdmin extends Mapper{
protected function doInsert($object)
 {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->admin;
   $tabget = array();
   for ($i=1; $i < sizeof($inss) ; $i++) {
array_push($tabget, $object->getAdmin($inss[$i]));
 }
   unset($inss[0]);
   $crud->insertion($inss,$tabget,'admin');
 }

   protected function selectStmt()
   {
  //nothing;
   }
function update($object)
{
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->admin;
   $tabget = array();
   $base = $inss[0];
   $insss =array_merge(array_diff($inss,array($inss[0])));
   for ($i=0; $i < sizeof($insss) ; $i++) {
  array_push($tabget, $object->getAdmin($insss[$i]));
   }
   $crud->updated($insss,$tabget,'admin',$inss[0],$object->getAdmin($inss[0]));
  }

  function delete($object)
  {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->admin;
   $tabget= array();
   array_push($tabget, $object->getAdmin($inss[0]));

   $crud->deleted('admin',$inss[0],$tabget[0]);
  }

protected function doCreateObject(array $array){}

}

?>