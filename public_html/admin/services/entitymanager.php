<?php 
include_once '../monFramework/databasegenius.php';
function connexion()
{
   $connexion = new PDO("mysql:host=localhost;dbname=ecom","root","");
   return $connexion;
}

interface Entity {
	function InjectRelationId($table);
}

Class Injecteur implements Entity{

	function  __construct()
	{
		//nothing
	}

	function InjectRelationId($table){
		 $resultat = connexion()->query("SELECT  Max(id) as idname from $table");
        $result = $resultat->fetch();
        $lacolonne = $result['idname'];
        return $lacolonne ;

        
	}
}



?>