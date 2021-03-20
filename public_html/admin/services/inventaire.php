<?php


//les param
//la clee de dependance 
//colone droite 
//colone gauche 
include_once '../monFramework/databasegenius.php';
function connexion()
{
   $connexion = new PDO("mysql:host=localhost;dbname=monferme","root","");
   return $connexion;
}
interface inventaire 
{
	function injecteur($table,$colone,$dependance,$iddependance);
	function restant($injecteur1,$injecteur2);
	function score(Scoreur $scoreur);
	//function score($table,$colone,$dependance,$iddependance,$dependance1,$iddependance1,$operation);
}

interface inventairedouble
{
	function injecteur($table,$colone,$dependance,$iddependance,$dependance1,$iddependance1);
}


class etatinventaire implements inventaire{

	function __construct()
	{
		//nothing
	}

	function injecteur($table,$colone,$dependance,$iddependance)
	{
        $resultat = connexion()->query("SELECT $colone from $table where $dependance = '$iddependance'");
        $result = $resultat->fetch();
        $lacolonne = $result[$colone];
        return $lacolonne;
	}
	function restant($injecteur1,$injecteur2){
	    return $injecteur1 - $injecteur2;
	}
	function score(Scoreur $scoreur){

	    $resultat = connexion()->query("SELECT $scoreur->operation($scoreur->colone) as $scoreur->colone from $scoreur->table where $scoreur->dependance = '$scoreur->iddependance'");
        $result = $resultat->fetch();
        $lacolonne = $result[$scoreur->colone];
        return $lacolonne;
	}
	
}


class SommeEtatInventaire implements inventaire{

	function __construct()
	{
		//nothing
	}

	function injecteur($table,$colone,$dependance,$iddependance)
	{
        $resultat = connexion()->query("SELECT Distinct SUM($colone) as $colone from $table where $dependance = '$iddependance'");
        $result = $resultat->fetch();
        $lacolonne = $result[$colone];
        return $lacolonne;
	}
	function restant($injecteur1,$injecteur2){
	    return $injecteur1 - $injecteur2;
	}
	function score(Scoreur $scoreur){

	    $resultat = connexion()->query("SELECT $scoreur->operation($scoreur->colone) as $scoreur->colone from $scoreur->table where $scoreur->dependance = '$scoreur->iddependance'");
        $result = $resultat->fetch();
        $lacolonne = $result[$scoreur->colone];
        return $lacolonne;
	}
	
}
class SommeEtatInventaireBi implements inventairedouble{

	function __construct()
	{
		//nothing
	}

	function injecteur($table,$colone,$dependance,$iddependance,$dependance1,$iddependance1)
	{
        $resultat = connexion()->query("SELECT Distinct SUM($colone) as $colone from $table where $dependance = '$iddependance' AND $dependance1 = '$iddependance1'");
        $result = $resultat->fetch();
        $lacolonne = $result[$colone];
        return $lacolonne;
	}
	function restant($injecteur1,$injecteur2){
	    return $injecteur1 - $injecteur2;
	}
	function score(Scoreur $scoreur){

	    $resultat = connexion()->query("SELECT $scoreur->operation($scoreur->colone) as $scoreur->colone from $scoreur->table where $scoreur->dependance = '$scoreur->iddependance'");
        $result = $resultat->fetch();
        $lacolonne = $result[$scoreur->colone];
        return $lacolonne;
	}
	
}




class Scoreavance implements inventaire
{
	public function __construct()
	{
		//nothing
	}

	function score(Scoreur $scoreur){

	    $resultat = connexion()->query("SELECT $scoreur->operation($scoreur->colone) as $scoreur->colone from $scoreur->table where $scoreur->dependance = '$scoreur->iddependance' and $scoreur->dependance1 = '$scoreur->iddependance1'");
        $result = $resultat->fetch();
        $lacolonne = $result[$scoreur->colone];
        return $lacolonne;
	}
	function injecteur($table,$colone,$dependance,$iddependance){
		//nothimg
	}
	function restant($injecteur1,$injecteur2){
		//nothimg
	}
}

class Scoreur 
{
    public $table;
    public $colone;
    public $dependance;
    public $iddependance;
    public $dependance1;
    public $iddependance1;
    public $operation;
	function __construct($table=null,$colone=null,$dependance=null,$iddependance=null,$dependance1=null,$iddependance1=null,$operation=null)
	{
	 $this->table=$table;
     $this->colone=$colone;
     $this->dependance=$dependance;
     $this->iddependance=$iddependance;
     $this->dependance1=$dependance1;
     $this->iddependance1=$iddependance1;
     $this->operation=$operation;
	}
    
}

 /*$nouvelleinjection = new SommeEtatInventaire();
        $avancerscore = new Scoreavance();
        $monscoreavacer = new Scoreur("consomationaliment","quantite","reference",1,"designation","mais","SUM");
        $var = $nouvelleinjection->injecteur("stockalimentation","quantite","designation","entrepot_chambre");
        $var2 = $nouvelleinjection->injecteur("consomationaliment","quantite","designation","c");
        $restant = $nouvelleinjection->restant($var,$var2);
        print "<script>alert('".$var."');</script>";
   $var2 = $nouvelleinjection->injecteur("stockalimentation","quantite","designation","riz");
   print $var2;*/



//testeur 

//$monscore = new Scoreur("consomationaliment","quantite","reference",2,"designation","mil","SUM");
//$nouvelleinjection = new Scoreavance();
//$avancerscore = new Scoreavance();
//$monscoreavacer = new Scoreur("consomationaliment","quantite","reference",1,"designation","mais","SUM");
//$var = $nouvelleinjection->injecteur("stockpoulets","quantite","reference",0);
//$var2 = $nouvelleinjection->injecteur("mortalite","quantite","reference",0);
//$var3 = $nouvelleinjection->score($monscore);
//$var4 = $avancerscore->score($monscoreavacer);

//$var3 = $nouvelleinjection->score("consomationaliment","quantite","reference",1,"designation","'mais'","SUM");
//print "<br/>";
//print $var2;
//print "<br/>";
//print "restant de la bande1 est: ".$nouvelleinjection->restant($var,$var2);
//print "<br>";
//print $var3;
//print "<br>";
//print $var4;

//score   consomation par bande / par produit
//score de mortalite dans une bande  et apres conversion en pourcentage de la bande 
//score des dechets
//score de recueille ovulaire par bande 
//score dechets obulaire 



?>