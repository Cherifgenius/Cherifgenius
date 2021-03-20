
  <?php
include_once '../monFramework/databasegenius.php';

include_once 'lestableaux.php';

class Vente {

function __construct()
{
     //nothing
}

function getVente($vente)
{
     return $this->vente[$vente];
}

function setVente($vente,$value)
{
     $this->vente[$vente] = $value;
}

}

include_once '../monFramework/databasegenius.php';

class ServiceVente extends Mapper{
protected function doInsert($object)
 {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->vente;
   $tabget = array();
   for ($i=1; $i < sizeof($inss) ; $i++) {
array_push($tabget, $object->getVente($inss[$i]));
 }
   unset($inss[0]);
   $crud->insertion($inss,$tabget,'vente');
 }

   protected function selectStmt()
   {
  //nothing;
   }
function update($object)
{
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->vente;
   $tabget = array();
   $base = $inss[0];
   $insss =array_merge(array_diff($inss,array($inss[0])));
   for ($i=0; $i < sizeof($insss) ; $i++) {
  array_push($tabget, $object->getVente($insss[$i]));
   }
   $crud->updated($insss,$tabget,'vente',$inss[0],$object->getVente($inss[0]));
  }

  function delete($object)
  {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->vente;
   $tabget= array();
   array_push($tabget, $object->getVente($inss[0]));

   $crud->deleted('vente',$inss[0],$tabget[0]);
  }

protected function doCreateObject(array $array){}

}

?>