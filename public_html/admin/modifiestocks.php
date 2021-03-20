
<?php   include_once "header.php";?>
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
       <?php     include_once "menudroite.php"; ?>
            <!-- Mobile Menu start -->
    <?php  include_once "mobilemenu.php";     ?> 


 <?php
        include_once "monFramework/databasegenius.php";
        include_once "modeles/lestableaux.php";
         $tab = new Tableau();
        $inss = $tab->stocks;
        //$where = $_GET['idd'];
        $where = $_GET['id'];   
        $crud = new Crud();
       
        ?>
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Modifie Produit</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                  <form action="controler/stocks.php" id="demo1-upload" method="post">
                                                        <div class="row">
                                                            <div class='col-lg-6 col-md-6 col-sm-6 col-xs-12'>

                                                                 <div class="form-group">
                                                                    <input name="idd" type="text" class="form-control" placeholder="idd"  value="<?php print $_GET['id'];   ?>" readonly>
                                                                </div>

                                                               <?php  include_once "modifforms/stocks.php" ?>
                                                                
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" name="update" class="btn btn-primary waves-effect waves-light">Modifier</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <form id="acount-infor" action="#" class="acount-infor">
                                                            <div class="devit-card-custom">
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="phoneno" type="number" class="form-control" placeholder="Phone">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="password" type="password" class="form-control" placeholder="Password">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="confarmpassword" type="password" class="form-control" placeholder="Confirm Password">
                                                                </div>
                                                                <a href="#" class="btn btn-primary waves-effect waves-light">Submit</a>
                                                            </div>
                                                        </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php   include_once "footer.php";  ?>