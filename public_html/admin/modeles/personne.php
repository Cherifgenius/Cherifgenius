
  <?php
include_once '../monFramework/databasegenius.php';

include_once 'lestableaux.php';

class Personne {

function __construct()
{
     //nothing
}

function getPersonne($personne)
{
     return $this->personne[$personne];
}

function setPersonne($personne,$value)
{
     $this->personne[$personne] = $value;
}

}

include_once '../monFramework/databasegenius.php';

class ServicePersonne extends Mapper{
protected function doInsert($object)
 {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->personne;
   $tabget = array();
   for ($i=1; $i < sizeof($inss) ; $i++) {
array_push($tabget, $object->getPersonne($inss[$i]));
 }
   unset($inss[0]);
   $crud->insertion($inss,$tabget,'personne');
 }

   protected function selectStmt()
   {
  //nothing;
   }
function update($object)
{
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->personne;
   $tabget = array();
   $base = $inss[0];
   $insss =array_merge(array_diff($inss,array($inss[0])));
   for ($i=0; $i < sizeof($insss) ; $i++) {
  array_push($tabget, $object->getPersonne($insss[$i]));
   }
   $crud->updated($insss,$tabget,'personne',$inss[0],$object->getPersonne($inss[0]));
  }

  function delete($object)
  {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->personne;
   $tabget= array();
   array_push($tabget, $object->getPersonne($inss[0]));

   $crud->deleted('personne',$inss[0],$tabget[0]);
  }

protected function doCreateObject(array $array){}

}

?>