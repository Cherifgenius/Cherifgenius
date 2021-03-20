<?php

session_start();

function input($data)
{
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

include_once '../modeles/produits.php';
include_once '../modeles/annonces.php';
include_once '../modeles/lestableaux.php';
include_once '../services/entitymanager.php';

function insertion()
{

  $target = "../../lesimages/".basename($_FILES['image']['name']);
  $target1 = "../../lesimages/".basename($_FILES['image2']['name']);
  $target2 = "../../lesimages/".basename($_FILES['image3']['name']);


  $con = new PDO("mysql:host=localhost;dbname=u788290378_buvoindi", "u788290378_idbuvoindi", "CherifBvoindi123");
  $image =$_FILES['image']['name'];
  $image2 =$_FILES['image2']['name'];
  $image3 =$_FILES['image3']['name'];
  $designation = $_POST['designation'];
  $genre = $_POST['genre'];
  $marque = $_POST['marque'];
  $poids = $_POST['poids']; 
  $codebar = $_POST['codebar'];
  $description = $_POST['description'];
  $ingredient = $_POST['ingredient'];
  $prix = $_POST['prix'];
  $file_type = $_FILES['image']['type']; //returns the mimetype

$allowed = array("image/jpeg", "image/gif", "image/png");

  if(!in_array($file_type, $allowed)) {
  $error_message = 'Only jpg, gif, and png files are allowed.';

  echo "<script>alert('desolez seul les formats image jpeg, gif et png sont permis');</script>";
 }else{
  //$con->exec("INSERT INTO produits(designation,genre,marque,poids,codebar,description,ingredient,prix,image,image2,image3) VALUES ('$designation','$genre','$marque','$poids','$codebar','$description','$ingredient',$prix,'$image','$image2','$image3')");
  
  $sql = "INSERT INTO produits(designation,genre,marque,poids,codebar,description,ingredient,prix,image,image2,image3) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
$stmt= $con->prepare($sql);
$stmt->execute([$designation,$genre,$marque,$poids,$codebar,$description,$ingredient,$prix,$image,$image2,$image3]);
  if (move_uploaded_file($_FILES['image']['tmp_name'], $target)  )
  {
    $msg = "image a ete bien charger";
  }else
  {
    $msg = "desolez erreur de chargement de l'image dans la base de donnee";
  }
  if (move_uploaded_file($_FILES['image2']['tmp_name'], $target1))
  {
    $msg = "image a ete bien charger";
  }else
  {
    $msg = "desolez erreur de chargement de l'image dans la base de donnee";
  }
  if (move_uploaded_file($_FILES['image3']['tmp_name'], $target1))
  {
    $msg = "image a ete bien charger";
  }else
  {
    $msg = "desolez erreur de chargement de l'image dans la base de donnee";
  }
}

if (move_uploaded_file($_FILES['image']['tmp_name'], $target)  )
  {
    $msg = "image a ete bien charger";
  }else
  {
    $msg = "desolez erreur de chargement de l'image dans la base de donnee";
  }
  if (move_uploaded_file($_FILES['image2']['tmp_name'], $target1))
  {
    $msg = "image a ete bien charger";
  }else
{
    $msg = "desolez erreur de chargement de l'image dans la base de donnee";
}

 if (move_uploaded_file($_FILES['image3']['tmp_name'], $target2))
  {
    $msg = "image a ete bien charger";
  }else
{
    $msg = "desolez erreur de chargement de l'image dans la base de donnee";
}
}


function updated()
{
   $ins = new ServiceProduits();
   $produits = new Produits();
   $tab = new Tableau();
   $inss = $tab->produits;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$produits->setProduits($inss[$i],input($_POST[$inss[$i]]));
}
$produits->setProduits($inss[0],input($_POST['idd']));
$ins->update($produits);
}

function deleted()
{
   $delet = $_GET['supprimer'];
   $ins = new ServiceProduits();
   $produits = new Produits();
   $tab = new Tableau();
   $inss = $tab->produits;
$produits->setProduits($inss[0],$delet);
$ins->delete($produits);
header("location:../produits.php");
}

if (isset($_POST['insert']))
{
insertion();

}

if (isset($_POST['update']))
{
updated();
header("location:../produits.php");
}

deleted();

?>
    
   