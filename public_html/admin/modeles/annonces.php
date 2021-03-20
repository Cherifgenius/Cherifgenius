
  <?php
include_once '../monFramework/databasegenius.php';

include_once 'lestableaux.php';

class Annonces {

function __construct()
{
     //nothing
}

function getAnnonces($annonces)
{
     return $this->annonces[$annonces];
}

function setAnnonces($annonces,$value)
{
     $this->annonces[$annonces] = $value;
}

}

include_once '../monFramework/databasegenius.php';

class ServiceAnnonces extends Mapper{
protected function doInsert($object)
 {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->annonces;
   $tabget = array();
   for ($i=1; $i < sizeof($inss) ; $i++) {
array_push($tabget, $object->getAnnonces($inss[$i]));
 }
   unset($inss[0]);
   $crud->insertion($inss,$tabget,'annonces');
 }

   protected function selectStmt()
   {
  //nothing;
   }
function update($object)
{
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->annonces;
   $tabget = array();
   $base = $inss[0];
   $insss =array_merge(array_diff($inss,array($inss[0])));
   for ($i=0; $i < sizeof($insss) ; $i++) {
  array_push($tabget, $object->getAnnonces($insss[$i]));
   }
   $crud->updated($insss,$tabget,'annonces',$inss[0],$object->getAnnonces($inss[0]));
  }

  function delete($object)
  {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->annonces;
   $tabget= array();
   array_push($tabget, $object->getAnnonces($inss[0]));

   $crud->deleted('annonces',$inss[0],$tabget[0]);
  }

protected function doCreateObject(array $array){}

}

?>