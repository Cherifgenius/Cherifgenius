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
  $tableslist = $table->getArrayy("ecom",$inscription);
  for ($j=1; $j < sizeof($tableslist) ; $j++) { 
                                                              
           $vare = "<div class='form-group'>\r\n".
            "<input name='".$tableslist[$j]."' type='text'    
            class='form-control' placeholder='".$tableslist[$j]."' value='<?php echo  "."$"."crud->selectAfficheColumn('".$inscription."',"."$"."inss,".$j.",'id',"."$"."where);  ?>'>\r\n".
           "</div>\r\n";


            $creation = $inscription.".php";
$fichephp = fopen($creation, 'a');
fseek($fichephp, 0);
fputs($fichephp, $vare);
fclose($fichephp);

           };

         
}


?>