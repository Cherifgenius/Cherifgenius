
<?php   include_once "header.php";?>
<?php    include_once "menu.php"; ?>


 <?php
        include_once "monFramework/databasegenius.php";
        include_once "modeles/lestableaux.php";
         $tab = new Tableau();
        $inss = $tab->annonces;
        //$where = $_GET['idd'];
        $where = 1;
        $crud = new Crud();
       
        ?>
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Edit Basic Information</a></li>
                                <li><a href="#reviews"> Edit Acount Information</a></li>
                                <li><a href="#INFORMATION">Edit Social Information</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                  <form action="controler/annonces.php" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload" method="post">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="titre" type="text" class="form-control" placeholder="titre"  value="<?php echo  $crud->selectAfficheColumn('annonces',$inss,1,"id",1);  ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="categories" type="text" class="form-control" placeholder="categories"  value="<?php  $crud->selectAfficheColumn("annonces",$inss,2,"id",1);   ?>">
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <input name="prix" id="" type="text" class="form-control" placeholder="prix"  value="<?php  $crud->selectAfficheColumn("annonces",$inss,4,"id",1);   ?>">
                                                                </div>
                                                               
                                                                
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="contact" type="text" class="form-control" placeholder="contact"  value="<?php   $crud->selectAfficheColumn("annonces",$inss,5,"id",1);  ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="login" type="text" class="form-control" placeholder="login"value="<?php  $crud->selectAfficheColumn("annonces",$inss,6,"id",1); ?>" >
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="adresse" type="text" class="form-control" placeholder="adresse" value="<?php  $crud->selectAfficheColumn("annonces",$inss,7,"id",1); ?>">
                                                                </div>
                                                                <div class="form-group res-mg-t-15">
                                                                    <textarea name="description" placeholder="description"  ><?php    $crud->selectAfficheColumn("annonces",$inss,3,"id",1); ?></textarea>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" name="update" class="btn btn-primary waves-effect waves-light">Submit</button>
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