<?php
function setWord($word)
{
	 $i = 0;
	 $taille = 80;
     $mots = "";
	 while ($i <= $taille)
	 {
	 	$mots .= $word[$i];
	 	$i++;
	 }
	 print $mots."...";
   }


?>