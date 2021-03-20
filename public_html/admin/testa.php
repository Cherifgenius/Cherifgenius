<?php



$connect = new PDO("mysql:host=localhost;dbname=u788290378_buvoindi", "u788290378_idbuvoindi", "CherifBvoindi123");            


	function crypter($motpass)
{
	$code = strlen($motpass);
	$code = ($code * 4)*($code/3);
	$sel = strlen($motpass);
	$sel2 = strlen($code.$motpass);
	$texte_hash = sha1($sel.$motpass.$sel2);
	$texte_hash_2 = md5($texte_hash.$sel2);
	$final = $texte_hash.$texte_hash_2;
	substr($final , 7, 8);
	$final = strtoupper($final);
	return $final;
}

	$motdepass = crypter("cereigebuvoindi20");
	$connect->exec("INSERT INTO admin(personne,login,password) values ('cereige bonita','cereige','$motdepass')");

?>