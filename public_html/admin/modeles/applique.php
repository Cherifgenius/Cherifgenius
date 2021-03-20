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



$table = new DataDatabase();
$tables = $table->getTablesArray();

$taille = sizeof($tables);

for ($i=0; $i < $taille ; $i++)
{
  $inscription = $tables[$i];
  $ins = strtoupper($inscription[0]);
  $inscript = substr($inscription, -strlen($inscription) + 1);

  $object ="
  <?php
include_once '../monFramework/databasegenius.php';\r\n\r\n".
"include_once 'lestableaux.php';\r\n\r\n".

"class ".$ins.$inscript." {\r\n\r\n".


  "function __construct()\r\n".
  "{\r\n".
    "     //nothing\r\n".
  "}\r\n\r\n".

  "function get".$ins.$inscript."($".$inscription.")\r\n".
        "{\r\n".
          "     return $"."this->".$inscription."[$".$inscription."];\r\n".
        "}\r\n\r\n".

    "function set".$ins.$inscript."($".$inscription.",$"."value)\r\n".
        "{\r\n".
          "     $"."this->".$inscription."[$".$inscription."] = $"."value;\r\n".
        "}\r\n\r\n".

"}\r\n\r\n".

"include_once '../monFramework/databasegenius.php';\r\n\r\n".
"class Service".$ins.$inscript." extends Mapper{\r\n".

"protected function doInsert($"."object)\r\n".
  " {\r\n".
        "   $"."crud = new Crud();\r\n".
        "   $"."tab = new Tableau();\r\n".
        "   $"."inss = $"."tab->".$inscription.";\r\n".
        "   $"."tabget = array();\r\n".
        "   for ($"."i=1; $"."i < sizeof($"."inss) ; $"."i++) {\r\n".
            "array_push($"."tabget, $"."object->get".$ins.$inscript."($"."inss[$"."i]));\r\n".
        " }\r\n".
         "   unset($"."inss[0]);\r\n".
        "   $"."crud->insertion($"."inss,$"."tabget,'".$inscription."');\r\n".
  " }\r\n\r\n".
  "   protected function selectStmt()\r\n".
    "   {\r\n".
      "  //nothing;\r\n".
    "   }\r\n".
    "function update($"."object)\r\n".
    "{\r\n".
        "   $"."crud = new Crud();\r\n".
        "   $"."tab = new Tableau();\r\n".
        "   $"."inss = $"."tab->".$inscription.";\r\n".
        "   $"."tabget = array();\r\n".
        "   $"."base = $"."inss[0];\r\n".
        "   $"."insss =array_merge(array_diff($"."inss,array($"."inss[0])));\r\n".
        "   for ($"."i=0; $"."i < sizeof($"."insss) ; $"."i++) {\r\n".
            "  array_push($"."tabget, $"."object->get".$ins.$inscript."($"."insss[$"."i]));\r\n".
        "   }\r\n".
            

        "   $"."crud->updated($"."insss,$"."tabget,'".$inscription."',$"."inss[0],$"."object->get".$ins.$inscript."($"."inss[0]));\r\n".
    "  }\r\n\r\n".
    "  function delete($"."object)\r\n".
    "  {\r\n".
        "   $"."crud = new Crud();\r\n".
        "   $"."tab = new Tableau();\r\n".
        "   $"."inss = $"."tab->".$inscription.";\r\n".
        "   $"."tabget= array();\r\n".
        "   array_push($"."tabget, $"."object->get".$ins.$inscript."($"."inss[0]));\r\n\r\n".

        "   $"."crud->deleted('".$inscription."',$"."inss[0],$"."tabget[0]);\r\n".
    "  }\r\n\r\n".


  "protected function doCreateObject(array $"."array){}\r\n\r\n".
"}\r\n\r\n".


"?>";


/*



}
?>
";*/
$creation = $inscription.".php";
$fichephp = fopen($creation, 'a');
fseek($fichephp, 0);
fputs($fichephp, $object);
fclose($fichephp);
}
/*
$creation = $inscription.".php";
$fichephp = fopen($creation, 'a');
fseek($fichephp, 0);
$taille = sizeof($fichephp);
ftruncate($fichephp, $taille);
fwrite($fichephp, "");


$ar = array("Banque");
$object = "
<?php include_once 'monFramework/databasegenius.php';\r\n";

$object1="class"." ".$ar[0]." "."{";

 $object3 = "function __construct()";
 $object4 = "{";

  $object5= "}";

$creation = $inscription.".php";
$fichephp = fopen($creation, 'a');
fseek($fichephp, 0);
fputs($fichephp, $object);
fseek($fichephp, 3);
fputs($fichephp, $object1);
fclose($fichephp);
*/

?>
