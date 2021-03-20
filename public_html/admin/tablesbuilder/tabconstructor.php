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

 $control ="
 <"."?"."php\r\n\r\n".
"include_once '../monFramework/databasegenius.php';\r\n\r\n".

"$"."connexion = new ConnexionFactor();\r\n\r\n".

"$"."nombre_de_donnee = 200;\r\n\r\n".

"$"."sommeur = ('SELECT count(*) AS total from ".$inscription."');\r\n".
"$"."donnee="."$"."connexion->Connect()->query("."$"."sommeur);\r\n".  
"$"."total = "."$"."donnee->fetch();\r\n".
"$"."totaldonnee = "."$"."total['total'];\r\n".
"$"."nombre_de_page = ceil("."$"."totaldonnee/"."$"."nombre_de_donnee);\r\n\r\n".

"if (isset("."$"."_GET['page']))\r\n".
"{\r\n".
    "$"."pageactuelle = intval("."$"."_GET['page']);\r\n".
    "if ("."$"."pageactuelle > "."$"."nombre_de_page)\r\n".
    "{\r\n".   
        "$"."pageactuelle = "."$"."nombre_de_page;\r\n".
    "}\r\n".
"} else\r\n".
"{\r\n".
    "$"."pageactuelle = 1;\r\n".
"}\r\n\r\n".

"$"."pageEntree = ("."$"."pageactuelle - 1)*("."$"."nombre_de_donnee);\r\n".


"$"."connexion = new ConnexionFactor();\r\n\r\n".

"if (isset("."$"."_POST['query']))\r\n".
            "{\r\n".
                "$"."search = "."$"."_POST['query'];\r\n".
                 "$"."search = '%'."."$"."search.'%';\r\n".
                "$"."query = ".chr(0x22)."select"." *"." FROM ".$inscription."  where  id LIKE "."'$"."search'\r\n";
  $tableslist = $table->getArrayy("ecom",$inscription);
  
  for ($j=1; $j < sizeof($tableslist)-1 ; $j++) { 
                                                              
           $control .="OR  ".$tableslist[$j]." LIKE "."'$"."search'\r\n";
}  
for ($j=sizeof($tableslist)-1; $j < sizeof($tableslist) ; $j++) { 
                                                              
           $control .="OR  ".$tableslist[$j]." LIKE "."'$"."search'".chr(0x22)."\r\n;";


}        


                
            
$control.="}else \r\n".
"{\r\n".
    "$"."query = ".chr(0x22)."select"." *"." FROM ".$inscription." Order by id LIMIT "."$"."pageEntree, "."$"."nombre_de_donnee".chr(0x22).";\r\n".
 
"}\r\n".

            "$"."donnees="."$"."connexion->Connect()->query("."$"."query,PDO::FETCH_BOUND);\r\n";
            for ($x=0; $x < sizeof($tableslist) ; $x++) { 
                                                              
           $control.="$"."donnees->bindColumn('".$tableslist[$x]."',"."$".$tableslist[$x].");\r\n";


}            
        $control.="?".">\r\n\r\n".

        "<div class='product-status mg-b-15'>\r\n".
            "<div class='container-fluid'>\r\n".
                "<div class='row'>\r\n".
                    "<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>\r\n".
                        "<div class='product-status-wrap'>\r\n".
                            "<h4>".strtoupper($inscription)." List</h4>\r\n".
                            "<div class='asset-inner'>\r\n".
                                "<table>\r\n".
                                    "<tr>\r\n";
                                      for ($y=0; $y < sizeof($tableslist) ; $y++) {                                                   
           $control.="<th>".strtoupper($tableslist[$y])."</th>\r\n";

       }            
                                        
                                       
                                    $control.="<th>MODIFIER</th>\r\n".
                                    "<th>SUPPRIMER</th>\r\n".
                                    "</tr>\r\n".
                                    "<"."?"."php"."  while("."$"."donnees->fetch()){   "."?".">\r\n".
                                    "<tr>\r\n";

                                        for ($z=0; $z < sizeof($tableslist) ; $z++) {                                                 
                                        $control .= "<td><"."?"."php"." print "."$".$tableslist[$z]."; "."?"."></td>";

                                          }

                                        $control .= "<td>\r\n".
                                            "<a href='modifie".$inscription.".php"."?"."id=<"."?"."php"."  print "."$"."id;  ?>' ><button data-toggle='tooltip' title='Edit' class='pd-setting-ed'><i class='fa fa-pencil-square-o' aria-hidden='true' ></i></button></a>\r\n".
                                            
                                        "</td>\r\n".
                                        "<td>\r\n".
                                           "<form action='controler/".$inscription."php"."?"."supprimer=<"."?"."php print "."$"."id; "."?".">'  method='post'    onsubmit='return confirmation();'>\r\n".
                                           "<a href='controler/".$inscription."php"."?"."supprimer=<"."?"."php  print "."$"."id;  ?>'><button data-toggle='tooltip' title='Trash' class='pd-setting-ed'><i class='fa fa-trash-o' aria-hidden='true'  ></i></button></a>\r\n".
                                            "</form>\r\n".
                                        "</td>\r\n".

                                    "</tr>\r\n".
                                    "<"."?"."php  }  "."?".">\r\n".
                                "</table>\r\n".
                                 "<script>\r\n".
                                  "function confirmation() {\r\n".
                                  "return confirm('Êtes-vous sur de vouloir Supprimer la ".$inscription."!');\r\n".
                                  "}\r\n".
                                  "</script>\r\n".
                            "</div>\r\n".
                            "<div class='custom-pagination'>\r\n".
                                "<ul class='pagination'>\r\n".
                                  "<"."?"."php\r\n".
                                    "include_once '../tools/pagination/paginefooter.php';\r\n".

                                    "?".">\r\n".
                                "</ul>\r\n".
                            "</div>\r\n".
                        "</div>\r\n".
                    "</div>\r\n".
                "</div>\r\n".
            "</div>\r\n".
        "</div>\r\n".

               $creation = "tab".$inscription.".php";
$fichephp = fopen($creation, 'a');
fseek($fichephp, 0);
fputs($fichephp, $control);
fclose($fichephp);
}
        ?>

       