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

 $control = "
    <?php\r\n\r\n".
"session_start();\r\n\r\n".

"function input($"."data)\r\n".
"{\r\n".
"  $"."data=trim($"."data);\r\n".
"  $"."data=stripcslashes($"."data);\r\n".
"  $"."data=htmlspecialchars($"."data);\r\n".
"  return $"."data;\r\n".
"}\r\n\r\n".

"include_once '../modeles/".$inscription.".php';\r\n".
"include_once '../modeles/lestableaux.php';\r\n".
"function insertion()\r\n".
"{\r\n".
"  $"."ins = new Service".$ins.$inscript."();\r\n".
"$".$inscription." = new ".$ins.$inscript."();\r\n".
 "   $"."tab = new Tableau();\r\n".
        "   $"."inss = $"."tab->".$inscription.";\r\n".
"for ($"."i=1; $"."i <sizeof($"."inss)  ; $"."i++) {\r\n".
    "$".$inscription."->set".$ins.$inscript."($"."inss[$"."i],input($"."_POST[$"."inss[$"."i]]));\r\n".
"}\r\n".
"$"."ins->insert($".$inscription.");\r\n".
"}\r\n\r\n".

"function updated()\r\n".
"{\r\n".
"   $"."ins = new Service".$ins.$inscript."();\r\n".
"   $".$inscription." = new ".$ins.$inscript."();\r\n".
"   $"."tab = new Tableau();\r\n".
"   $"."inss = $"."tab->".$inscription.";\r\n".
"for ($"."i=1; $"."i <sizeof($"."inss)  ; $"."i++) {\r\n".
    "$".$inscription."->set".$ins.$inscript."($"."inss[$"."i],input($"."_POST[$"."inss[$"."i]]));\r\n".
"}\r\n".
"$".$inscription."->set".$ins.$inscript."($"."inss[0],input($"."_POST[$"."inss[0]]));\r\n".
"$"."ins->update($".$inscription.");\r\n".
"}\r\n\r\n".

"function deleted()\r\n".
"{\r\n".
"   $"."ins = new Service".$ins.$inscript."();\r\n".
"   $".$inscription." = new ".$ins.$inscript."();\r\n".
"   $"."tab = new Tableau();\r\n".
"   $"."inss = $"."tab->".$inscription.";\r\n".
"$".$inscription."->set".$ins.$inscript."($"."inss[0],input($"."_POST[$"."inss[0]]));\r\n".
"$"."ins->delete($".$inscription.");\r\n".
"}\r\n\r\n".

 "if (isset($"."_POST['insert']))\r\n".
 "{\r\n".
"insertion();\r\n".
 "}\r\n\r\n".
"if (isset($"."_POST['update']))\r\n".
"{\r\n".
"updated();\r\n".
"}\r\n\r\n".

"if (isset($"."_POST['delete']))\r\n".
"{\r\n".
"deleted();\r\n".
"}\r\n\r\n".


"?>
 ";
$creation = $inscription.".php";
$fichephp = fopen($creation, 'a');
fseek($fichephp, 0);
fputs($fichephp, $control);
fclose($fichephp);
}

?>