
  <?php
include_once '../monFramework/databasegenius.php';

include_once 'lestableaux.php';

class Produits {

function __construct()
{
     //nothing
}

function getProduits($produits)
{
     return $this->produits[$produits];
}

function setProduits($produits,$value)
{
     $this->produits[$produits] = $value;
}

}

include_once '../monFramework/databasegenius.php';

class ServiceProduits extends Mapper{
protected function doInsert($object)
 {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->produits;
   $tabget = array();
   for ($i=1; $i < sizeof($inss) ; $i++) {
array_push($tabget, $object->getProduits($inss[$i]));
 }
   unset($inss[0]);
   $crud->insertion($inss,$tabget,'produits');
 }

   protected function selectStmt()
   {
  //nothing;
   }
function update($object)
{
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->produits;
   $tabget = array();
   $base = $inss[0];
   $insss =array_merge(array_diff($inss,array($inss[0])));
   for ($i=0; $i < sizeof($insss) ; $i++) {
  array_push($tabget, $object->getProduits($insss[$i]));
   }
   $crud->updated($insss,$tabget,'produits',$inss[0],$object->getProduits($inss[0]));
  }

  function delete($object)
  {
   $crud = new Crud();
   $tab = new Tableau();
   $inss = $tab->produits;
   $tabget= array();
   array_push($tabget, $object->getProduits($inss[0]));

   $crud->deleted('produits',$inss[0],$tabget[0]);
  }

protected function doCreateObject(array $array){}

}

?>