 <?php  

include_once "monFramework/databasegenius.php";

            

$connexion = new ConnexionFactor();
if (isset($_POST['query']))
            {
                $search = $_POST['query'];
                $query = "SELECT * FROM controle_utilisateur  where  id LIKE '%".$search."%'
  OR date_validation LIKE '%".$search."%' 
  OR blocked LIKE '%".$search."%' 
  OR online LIKE '%".$search."%' 
  OR login LIKE '%".$search."%'";
                
            
} else 
{
    $query = "SELECT * FROM controle_utilisateur";
 
}

            $donnees=$connexion->Connect()->query($query,PDO::FETCH_BOUND);   
            $donnees->bindColumn("id",$id);
            $donnees->bindColumn("image",$image);
            $donnees->bindColumn("date_validation",$date_validation);
            $donnees->bindColumn("blocked",$blocked);
            $donnees->bindColumn("online",$online);
         $donnees->bindColumn("login",$login);
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
                                        <th>IMAGE</th>
                                        <th>DATE_VALIDATION</th>
                                        <th>BLOCKED</th>
                                        <th>ONLINE</th>
                                        <th>IDENTIFIANT</th>
                                        <th>MODIFIER_ETAT</th>
                                    </tr>
                                    <?php  while($donnees->fetch()){   ?>
                                    <tr>
                                        <td><?php print $id; ?></td>
                                        <td><?php print $image; ?></td>
                                        <td><?php print $date_validation; ?></td>
                                        <td>
                                            <button class="pd-setting"><?php print $blocked; ?></button>
                                        </td>
                                        <td><?php print $online; ?></td>
                                        <td><?php print $login; ?></td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            
                                        </td>
                                    </tr>
                                    <?php  }  ?>
                                </table>
                            </div>
                            <div class="custom-pagination">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>