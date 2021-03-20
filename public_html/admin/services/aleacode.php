<?php




function compte($table)
{
	$valeur =0;
	$connexion = new ConnexionFactor();
	$query = "SELECT MAX(id) as maximum from $table";
	$donnees=$connexion->Connect()->query($query,PDO::FETCH_BOUND);
	$donnees->bindColumn("maximum",$maximum);
	$donnees->fetch();
    
    /*if(!$maximum == null)
    {*/
	$valeur = $maximum + 1;
/*}else
	{ 
	$valeur = 1;	
   
   }*/

	return $valeur;

}



?>