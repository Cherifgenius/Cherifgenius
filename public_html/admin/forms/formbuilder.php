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
 
 
 $control ="

 <form action='controler/".$inscription.".php' class='dropzone dropzone-custom needsclick add-professors' id='demo1-upload' method='post'>\r\n\r\n".
                                                        "<div class='row'>\r\n".
                                                            "<div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>\r\n".
                                                            "<?php  include_once " ."'form"."$inscription.php'"."; ?>\r\n".
                                                                                       "</div>\r\n".
                                                        "</div>\r\n".
                                                        "<div class='row'>\r\n".
                                                            "<div class='col-lg-12'>\r\n".
                                                                "<div class='payment-adress'>\r\n".
                                                                    "<button type='submit' name='insert' class='btn btn-primary waves-effect waves-light'>Valider</button>\r\n".
                                                                "</div>\r\n".
                                                            "</div>\r\n".
                                                       " </div>\r\n".
                                                    "</form>\r\n"
   
 ;
$creation = $inscription.".php";
$fichephp = fopen($creation, 'a');
fseek($fichephp, 0);
fputs($fichephp, $control);
fclose($fichephp);
}

?>