<?php


include_once "../monFramework/databasegenius.php";


Class DataDatabase extends Mapper{

	function __construct()
	{
      //nothing
	}

     function getArrayy($bd,$colmunsArray)
     {
      parent:: __construct();
      $quer = self::$PDO->query("SHOW COLUMNS FROM $bd.$colmunsArray");
      $arrsel = array();
      while ($rows = $quer->fetch()) {
          array_push($arrsel, $rows[0]);
     }
     return $arrsel;
     }

      function getTablesArray()
     {
      parent:: __construct();
      $quer = self::$PDO->query("SHOW TABLES");
      $arrsel = array();
      while ($rows = $quer->fetch()) {
          array_push($arrsel, $rows[0]);
     }
     return $arrsel;
     }

   protected function doCreateObject(array $array){}
   protected function doInsert($object){}
             function update($object){}
   Protected function selectStmt(){}
}


$clas = new DataDatabase();

$base = $clas->getTablesArray();
$taille = sizeof($base);

for($i = 0; $i < $taille; $i++)
{
	print "public $".$base[$i]." = array(";
	$imp = implode("','", ($clas->getArrayy("ecom",$base[$i])));
	print "'$imp')";
	//print($clas->getArrayy("bd_com",$imp));
	print "<br>";
}



?>