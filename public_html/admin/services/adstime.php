<?php

 

interface  IDateurAds{

		function compteurDeTemps($temps);
		function compteurExpiration($depart,$expiration);
		function compteurValidation($validation);
}


class EntityTemps {
	private $dateur;

	public function __construct($dateur)
	{
		$this->dateur = $dateur;
	}

	public function setDateur($dateur)
	{
		$this->dateur = $dateur;
	}

	public function getDateur()
	{
		return $this->dateur;
	}
}

   /**
    * 
    */
   class CompteurTemps implements IDateurAds
   {
   	
   	function __construct()
   	{
   		//nothing
   	}

    function  compteurDeTemps($temps)
   	{
   		$dateancien = strtotime($temps->getDateur());
   		$date_maintenant = time(); 
   		$datediff = $date_maintenant - $dateancien;
 		$tempss = "";


   		if((round($datediff / (60 * 60 * 24))-1)==0)
   		{
   			$tempss = "Publiée Ajourdhui";
   		}else if((round($datediff / (60 * 60 * 24))-1)==1)
   		{
   			$tempss = "Publiée Hier";
   		}else
   		{
   			$tempss = "Publiée il y'a ".(round($datediff / (60 * 60 * 24))-1)." jours";
   		}
          return $tempss;
   }
   function compteurExpiration($depart,$expiration)
   {
   	//nothing
   }
		function compteurValidation($validation)
		{
			//nothing
		}
}


	class EntityExpiration 
	{
		private $datedebut;
		private $datefin;


		public function __construct($datedebut, $datefin)
		{
			$this->datedebut = $datedebut;
			$this->datefin = $datefin;
		}

		public function setDateDebut($datedebut)
		{
			$this->datedebut = $datedebut;
		}
		public function setDateFin($datefin)
		{
			$this->datefin = $datefin;
		}


		public function getDateDebut()
		{
			return $this->datedebut;
		}
		public function getDateFin()
		{
			return $this->datefin;
		}
	}


	class CompteurDateExpiration implements IDateurAds
	{
		public function __construct()
		{
			//nothing
		}
		function compteurExpiration($depart,$expiration)
      {
   		$dateancien = $temps->getDateur();
   		$first_local = new DateTime($dateancien);
   		$date_maintenant = new datetime("now",new DateTimeZone("Africa/Dakar"));
   		$diff = $date_maintenant->diff($first_local);

   		if(($diff->format('%a') % 7) == 0)
   		{
   			$temps = "Publiée Ajourdhui";
   		}else if(($diff->format('%a') % 7) == 0)
   		{
   			$temps = "Publiée Hier";
   		}else
   		{
   			$temps = "Publiée il y'a ".$diff->format('%a') % 7;
   		}
          return $temps;
     }
		function compteurValidation($validation)
		{
			//nothing
		}
		function compteurDeTemps($temps)
		{
			//nothing
		}
	}









  /* include_once "../monFramework/databasegenius.php";

        $connexion = new ConnexionFactor();
		$query = ("SELECT datee from annonces  where  id=14");
		$donnees=$connexion->Connect()->query($query,PDO::FETCH_BOUND);  
		$donnees->bindColumn("datee",$datee);
		$donnees->fetch();
  	    $nouvelle = new EntityTemps("2020-05-05");
  	    $laduree = new CompteurTemps();
  	    print $laduree->compteurDeTemps($nouvelle)."<br>";


*/






?>