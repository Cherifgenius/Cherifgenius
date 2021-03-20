<?php

//singleton definition
 Class Singleton {
     //delcaration de l'attriut instance
  /* private static $instance = [];

   protected function __construct()
   {
    //nothing
   }

   protected function __clone(){//nothing
   }

   protected function __wakeup(){  throw new Exception("desolez refu de unserilizing");
     }

   public static function getInstance()
   {
    $subclass = static::class;
    if(!isset(self::$instance[$subclass]))
    {

      self::$instance[$subclass] = new static;
    }
    return self::$instance[$subclass];

   }*/

 }


Abstract class Mapper{
Protected static  $PDO;
  private $host;
  private $dbname;
  private $user;
  private $password;

  function __construct()
  {
   $this->host    ="localhost";
   $this->dbname  ="u788290378_buvoindi";
   $this->user    ="u788290378_idbuvoindi";
   $this->password="CherifBvoindi123";

    $dsn="mysql:host=".$this->host.";dbname=".$this->dbname;
    self::$PDO=new PDO($dsn,$this->user,$this->password);
    self::$PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  }


  function find($id)
  {
    $this->selectStmt()->execute(array($id));
    $array=$this->selectStmt()->fetch( );
    $this->selectStmt()->closeCursor();
    if(! is_array($array)){return null;}
    if(! isset($array['ID'])){return null;}
     $objec=$this->creatObject($array);
     return $objec;

  }




  function creatObject($object)
  {
    $obj=$this->doCreateObject($object);
    return $obj;
  }
    function insert($object)
  {
    $ob=$this->doInsert($object);
    return $ob;
  }




  Abstract protected function doCreateObject(array $array);
  Abstract protected function doInsert($object);
  Abstract           function update($object);
  Abstract Protected function selectStmt();
}

class ConnexionFactor {

  function __construct(){
    //nothing
  }
     
  function Connect()
  {
   $host    ="localhost";
   $dbname  ="u788290378_buvoindi";
   $user    ="u788290378_idbuvoindi";
   $password="CherifBvoindi123";

    $dsn="mysql:host=".$host.";dbname=".$dbname;
    $PDO=new PDO($dsn,$user,$password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $PDO;
  }

  } 

   



class Crud extends Mapper{
  private $select;
  private $updatee;
  private $delete;
  private $insert;
  private $selectall;
  private $search;
    private $tableau = array();

    public function __construct()
    {
      //null
    }

    public function gettab()
    {
      return $this->tableau;
    }

/*
    public function queryParameter($tableau)
    {
        $this->tableau = $tableau;
    }*/

    public function selectColumn($nomtable,array $tableau,$index,$where)
    {
        if(sizeof($tableau)<$index)
       {
        throw new Exception("erreur index depasser");

       }
       parent::__construct();
       $this->select=static::$PDO->query("SELECT $tableau[$index] from $nomtable where $tableau[$index]='$where'");


       $arrow=$this->select->fetch();
       $imp = implode(" ",$arrow);
       $exp = explode(" ", $imp);
       return $exp[0];
    }

    public function selectAfficheColumn($nomtable,array $tableau,$index,$columns,$indexe)
    {
        if(sizeof($tableau)<$index)
       {
        throw new Exception("erreur index depasser");

       }
       parent::__construct();
       $this->select=static::$PDO->query("SELECT $tableau[$index] from $nomtable where $columns = $indexe");
       $arrows = array();
       while($arrow=$this->select->fetch()){
         $arrow[$tableau[$index]];
         array_push($arrows, $arrow[$tableau[$index]]);
       }
       $imp = implode("<br>",$arrows);
       $exp = explode(" ", $imp);
       print ($imp);
    }

     public function insertion(array $columns , array $values, $table)
     {
      $impcol = implode(",", $columns);
      //print $impcol;
      function cube($n)
          {
            $n="?";
            return $n;
          }
      $mapping = array_map("cube", $values);
      $impval = implode(",", $mapping);
      //print $impval;
      parent::__construct();
      $this->insert = self::$PDO->prepare("INSERT INTO $table($impcol) VALUES ($impval)");
      $this->insert->execute($values);
     }

     public function updated(array $table, array $tabupdate,$tab,$column,$num)
     {
         $taille = sizeof($table);

         for($i = 0; $i < $taille -1 ; $i++)
         {
          $table[$i] = $table[$i].' = ?,';
         }
         for ($i = $taille - 1; $i < $taille; $i++)
         {
          $table[$i] = $table[$i].' = ?';
         }

         $implotable = implode(" ", $table);

         parent::__construct();
         $this->updatee = self::$PDO->prepare("UPDATE $tab SET $implotable Where $column = $num");
         $this->updatee->execute($tabupdate);

     }

     public function deleted($table,$column,$where)
     {
      parent::__construct();
         $this->update = self::$PDO->prepare("DELETE FROM $table WHERE $column=?");
         $this->update->execute(array($where));
     }

    


   protected function doCreateObject(array $array){}
   protected function doInsert($object){}
             function update($object){}
   Protected function selectStmt(){}


}

 /*$arrayName = array("id","roll","name");

$ob = new Crud($arrayName);
  print_r($ob->gettab());
 $pro=$ob->selectColumn('etude',$arrayName,2,'pro');



 $comp = "";
 if (isset($_POST['ok']))
 {
 $comp = $_POST['essaie'];

 if ($comp == $pro)
 {

  print "<script>alert('desolez ne peux pas etre injecter');</script>";

 }else if($comp != $pro)
 {
  header("location:databasegenius.php");
 }

}


 $arrayNam = array("cherif","mamar");
 $arrayNamee = array("roll","name");
 //$ob->insertion($arrayNamee , $arrayNam, 'etude');
 //$ob->delete('etude','id',20);
*/



?>



