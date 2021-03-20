<?php   include_once "header.php";?>

<!--   head  -->




 <?php   /*
      if(empty($_SESSION['login']))
{
  header("location:login.php");
}
*/

  ?> 

 <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="index.html"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a class="has-arrow" href="produits.php">
                                   <span class="produit"></span>
                                   <span class="mini-click-non">Produits</span>
                                </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Toute les produit" href="produits.php"><span class="mini-sub-pro">Produits</span></a></li>
                                <li><a title="Ajout user" href="ajoutproduits.php"><span class="mini-sub-pro">Ajout Produit</span></a></li>
                            </ul>
                        </li>
                        <li >
                            <a class="has-arrow" href="paiements.php" aria-expanded="false"><span class="payement"></span> <span class="mini-click-non">Paiements</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Professors" href="paiements.php"><span class="mini-sub-pro">Paiements</span></a></li>
                               </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="commandes.php" aria-expanded="false"><span class="commande"></span> <span class="mini-click-non">Commandes</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="commandes.php"><span class="mini-sub-pro">Commandes</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="livraisons.php" aria-expanded="false"><span class="livraison"></span> <span class="mini-click-non">Livraisons</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Courses" href="livraisons.php"><span class="mini-sub-pro">Bon Livraisons</span></a></li>
                                <li><a title="Add Courses" href="confirmationliv.php><span class="mini-sub-pro">Confirmation</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="stocks.php" aria-expanded="false"><span class="stock"></span> <span class="mini-click-non">Stocks</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Library" href="stocks.php"><span class="mini-sub-pro">Stocks</span></a></li>
                                <li><a title="Add Library" href="ajoutstock.php"><span class="mini-sub-pro">Ajout Stock</span></a></li>
                                <li><a title="Edit Library" href="inventairesto.php"><span class="mini-sub-pro">Inventaire</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="clients.php" aria-expanded="false"><span class="client"></span> <span class="mini-click-non">Clients</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Departments List" href="clients.php"><span class="mini-sub-pro">Clients</span></a></li>
                                <li><a title="Add Departments" href="activitecli.php"><span class="mini-sub-pro">Activites</span></a></li>
                                <li><a title="Edit Departments" href="Recommandationcli.php"><span class="mini-sub-pro">Recommandation</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="ventes.php" aria-expanded="false"><span class="vente"></span> <span class="mini-click-non">Ventes</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="ventes.php"><span class="mini-sub-pro">Ventes</span></a></li>
                                <li><a title="View Mail" href="performanceven.php"><span class="mini-sub-pro">Performance</span></a></li>
                            </ul>
                        </li>
                         <li>
                            <a class="has-arrow" href="annonces.php" aria-expanded="false"><span class="annonce"></span> <span class="mini-click-non">Annonces</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="lanceannonce.php"><span class="mini-sub-pro">Lancez Annonce</span></a></li>
                                <li><a title="View Mail" href="parametreannonce.php"><span class="mini-sub-pro">Parametres</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="commentaires.php" aria-expanded="false"><span class="commentaire"></span> <span class="mini-click-non">Commentaire</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="commentaires.php"><span class="mini-sub-pro">Les Commentaires</span></a></li>
                                <li><a title="View Mail" href="paramcommentaire"><span class="mini-sub-pro">Parametres</span></a></li>
                            </ul>
                        </li>
                         <li>
                            <a class="has-arrow" href="statistiquepart.php" aria-expanded="false"><span class="statistique"></span> <span class="mini-click-non">Statistique</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Inbox" href="statistiquepart.php"><span class="mini-sub-pro">Stat Partiels</span></a></li>
                                <li><a title="View Mail" href="correlationstat.php"><span class="mini-sub-pro">Correlations</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="rapportgen.php" aria-expanded="false"><span class="rapport"></span> <span class="mini-click-non">Les Rapports</span></a>
                            <ul class="submenu-angle interface-mini-nb-dp" aria-expanded="false">
                                <li><a title="Google Map" href="rapportgen.php"><span class="mini-sub-pro">Rapports Gen</span></a></li>
                                <li><a title="Data Maps" href="businessrap.php"><span class="mini-sub-pro">Rapport Business</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
        <?php     include_once "menudroite.php"; ?>
            <!-- Mobile Menu start -->
    <?php  include_once "mobilemenu.php";     ?> 


 <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                 <input type="text"  name="search_text" id="search_text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Toutes stockpoulets</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
       <div id="result"></div>
       

<?php   include_once "footer.php";  ?>

<script>
  function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });
    return vars;
}

 urvalue = "tablesbuilder/tabproduits.php";
if (getUrlVars()['page']>1)
{
    urvalue = "tablesbuilder/tabproduits.php?liste="+getUrlVars()['page'];
}
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:urvalue,
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script> 
