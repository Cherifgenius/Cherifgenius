
    <?php

session_start();

function input($data)
{
  $data=trim($data);
  $data=stripcslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}

include_once '../modeles/stocks.php';
include_once '../modeles/lestableaux.php';
function insertion()
{
  $ins = new ServiceStocks();
$stocks = new Stocks();
   $tab = new Tableau();
   $inss = $tab->stocks;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$stocks->setStocks($inss[$i],input($_POST[$inss[$i]]));
}
$ins->insert($stocks);
}

function updated()
{
   $ins = new ServiceStocks();
   $stocks = new Stocks();
   $tab = new Tableau();
   $inss = $tab->stocks;
for ($i=1; $i <sizeof($inss)  ; $i++) {
$stocks->setStocks($inss[$i],input($_POST[$inss[$i]]));
}
$stocks->setStocks($inss[0],input($_POST['idd']));
$ins->update($stocks);
}

function deleted()
{
  $delet = $_GET['supprimer'];
   $ins = new ServiceStocks();
   $stocks = new Stocks();
   $tab = new Tableau();
   $inss = $tab->stocks;
$stocks->setStocks($inss[0],$delet);
$ins->delete($stocks);
header("location:../stocks.php");
}

if (isset($_POST['insert']))
{
insertion();
header("location:../stocks.php");
}

if (isset($_POST['update']))
{
updated();
}


deleted();


?>
 