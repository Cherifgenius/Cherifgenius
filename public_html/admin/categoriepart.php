 <?php  

include_once "monFramework/databasegenius.php";

            

$connexion = new ConnexionFactor();
$nombre_de_donnee = 200;

$sommeur = ("SELECT count(*) AS total from categorie");
$donnee=$connexion->Connect()->query($sommeur);  
$total = $donnee->fetch();
$totaldonnee = $total['total'];
$nombre_de_page = ceil($totaldonnee/$nombre_de_donnee);

if (isset($_GET['page']))
{
    $pageactuelle = intval($_GET['page']);
    if ($pageactuelle > $nombre_de_page)
    {   
        $pageactuelle = $nombre_de_page;
    }
}else
{
    $pageactuelle = 1;
}

$pageEntree = ($pageactuelle - 1)*($nombre_de_donnee);
$connexion = new ConnexionFactor();


if (isset($_POST['query']))
            {
                $search = $_POST['query'];
                $search = '%'.$search.'%';
                $query = "SELECT * FROM categorie  where  id LIKE  '$search'
  OR categories LIKE  '$search'
  OR emploie LIKE  '$search'
  OR service LIKE  '$search'";
                
            
}else 
{
    $query = "SELECT * FROM categorie Order by id LIMIT $pageEntree, $nombre_de_donnee";
 
}
            $donnees=$connexion->Connect()->query($query,PDO::FETCH_BOUND);  
            $donnees->bindColumn("id",$id);
            $donnees->bindColumn("categories",$categories);
            $donnees->bindColumn("emploie",$emploie);
            $donnees->bindColumn("service",$service);
        ?>



        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Users List</h4>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>ID</th>
                                        <th>CATEGORIES</th>
                                        <th>EMPLOIE</th>
                                        <th>SERVICE</th>
                                        <th>Modification</th>
                                        <th>Suppression</th>
                                    </tr>
                                    <?php  while($donnees->fetch()){   ?>
                                    <tr>
                                        <td><?php print $id; ?></td>
                                        <td><?php print $categories; ?></td>
                                        <td><?php print $emploie; ?></td>
                                        <td><?php print $service; ?></td>
                                        <td>
                                            <a href="modifiecategori.php?id=<?php  print $id;  ?>" ><button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true" ></i></button></a>
                                            
                                        </td>
                                        <td>
                                            <form action="controler/categorie.php?supprimer=<?php print $id; ?>"  method="post"    onsubmit="return confirmation();">
                                           <a  data-toggle="modal"  href="controler/categorie.php?supprimer=<?php print $id; ?>" ><button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"  ></i></button></a>
                                       </form>
                                        </td>

                                    </tr>
                                    <?php  }  ?>
                                </table>
                                <script>
function confirmation() {
   return confirm("Êtes-vous sur de vouloir Supprimer la Categorie!");
}
</script>
                            </div>
                            <div class="custom-pagination">                                                             
                                <ul class="pagination">
                                    <?php
                                    include_once "tools/pagination/paginefooter.php";

                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>