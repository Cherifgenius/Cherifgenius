
  <?php
include_once '../monFramework/databasegenius.php';

include_once 'lestableaux.php';

class Commande {

function __construct()
{
     //nothing
}

function getCommande($commande)
{
     return $this->commande[$commande];
}

function setCommande($commande,$value)
{
     $this->commande[$commande] = $value;
}

}

include_once '../monFramework/databasegenius.php';

class ServiceCommande extends Mapper{
protected function doInsert($object)
 {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->commande;
   $tabget = array();
   for ($i=1; $i < sizeof($inss) ; $i++) {
array_push($tabget, $object->getCommande($inss[$i]));
 }
   unset($inss[0]);
   $crud->insertion($inss,$tabget,'commande');
 }

   protected function selectStmt()
   {
  //nothing;
   }
function update($object)
{
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->commande;
   $tabget = array();
   $base = $inss[0];
   $insss =array_merge(array_diff($inss,array($inss[0])));
   for ($i=0; $i < sizeof($insss) ; $i++) {
  array_push($tabget, $object->getCommande($insss[$i]));
   }
   $crud->updated($insss,$tabget,'commande',$inss[0],$object->getCommande($inss[0]));
  }

  function delete($object)
  {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->commande;
   $tabget= array();
   array_push($tabget, $object->getCommande($inss[0]));

   $crud->deleted('commande',$inss[0],$tabget[0]);
  }

protected function doCreateObject(array $array){}

}

?>