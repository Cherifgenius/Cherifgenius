<?php  

session_start();
$total_price = 0;
$total_item = 0;


?>


<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/buvoindifavlog.png" sizes="32X32" type="image/png">
        <title>ListAshop</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css"> 
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">

        <style type="text/css">

        </style>
        
        
        
        <style type="text/css">
        	.btn-suc
        	{
        		border: 2px solid #a2e665;
        		cursor: pointer;
        	}

        	.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:40px;
	right:40px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:16px;
}
        </style>
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
       <?php  include_once "header.php";  ?>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content text-center">
						<h2>Valider la Commande</h2>
						<div class="page_link">
							<a href="index.html">Accueil</a>
							<a href="checkout.html">Valider Commande</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Checkout Area =================-->
        <section class="checkout_area p_120">
        	<div class="container">
        		
        		<div class="billing_details">
        			<div class="row">
        				<div class="col-lg-8">
        					<h3>Details de la facturation</h3>
        					<form class="row contact_form" action="commande.php" method="post" novalidate="novalidate">
								<div class="col-md-6 form-group p_star">
									<input type="text" class="form-control" id="first" name="nom" placeholder="Nom" required>
								</div>
								<div class="col-md-6 form-group p_star">
									<input type="text" class="form-control" id="last" name="prenom" placeholder="Prenom" required>
								</div>
								<div class="col-md-6 form-group p_star">
									<input type="text" class="form-control" id="number" name="telephone" placeholder="Numero Telephone" required>
								</div>
								<div class="col-md-6 form-group p_star">
									<input type="text" class="form-control" id="email" name="email" placeholder="Adresse email" required>
								</div>
								<div class="col-md-12 form-group p_star">
									<select class="country_select"  name="ville">
										<option value="1">Estuaire(Libreville)</option>
										<option value="2">Haut-Ogooué</option>
										<option value="4">Moyen-Ogooué</option>
										<option value="1">Ngounié </option>
										<option value="2">Nyanga</option>
										<option value="4">Ogooué-Ivindo</option>
										<option value="1">Ogooué-Lolo</option>
										<option value="2">Ogooué-Maritime</option>
										<option value="4">Woleu-Ntem</option>
									</select>
								</div>
								<div class="col-md-12 form-group ">
									<input type="text" class="form-control"  name="adresse1" placeholder="Addresse 1" required>
								</div>
								<div class="col-md-12 form-group ">
									<input type="text" class="form-control"  name="adresse2" placeholder="Addresse 2" required>
								</div>
								<div class="col-md-12 form-group ">
									<input type="text" class="form-control"  name="quartier" placeholder="Ville/Quartier" required>
								</div>
								<div class="col-md-12 form-group">
									<input type="text" class="form-control" id="zip" name="codepostal" placeholder="Postcode/ZIP" required>
								</div>
								<div class="col-md-12 form-group">
									<div class="creat_account">
										<input type="checkbox" id="f-option2" name="selector">
										<label for="f-option2">Cree un compte?</label>
									</div>
								</div>
								<div class="col-md-12 form-group">
									<div class="creat_account">
										<h3>Details Livraison</h3>
										<input type="checkbox" id="f-option3" name="selector">
										<label for="f-option3">Livraison à une adresse diffrente?</label>
									</div>
									<textarea class="form-control" name="note" id="message" rows="1" placeholder="Une Note"></textarea>
								</div>
        				</div>


        				<div class="col-lg-4">
        					<div class="order_box">
        						<h2>Votre Facture</h2>
        						<ul class="list">
        							<li><a href="#">Produit <span>Total</span></a></li>
                                     <?php   
                            if(!empty($_SESSION["shopping_cart"]))
                                {
                        foreach($_SESSION["shopping_cart"] as $keys => $values)
                                {

                        ?>
        							<li><a href="#"><?php print $values["product_name"];   ?> <span class="middle"><?php print $values["product_quantity"];  ?></span> <span class="last"><?php print $values["product_price"];  ?></span></a></li>

                                <?php 

                                $total_price = $total_price + ($values["product_quantity"] * $values["product_price"]);

                                 }} ?>
        						</ul>
        						<ul class="list list_2">
        							<li><a href="#">Sous Total <span><?php  print number_format($total_price,2); ?></span></a></li>
        							<li><a href="#">Cout de Livraison <span>: 50.00</span></a></li>
        							<li><a href="#">Total <span><?php  print number_format($total_price,2); ?></span></a></li>
        						</ul>
        						<div class="payment_item">
        							<div class="radion_btn">
										<input type="radio" id="f-option5" name="selector">
										<label for="f-option5">Payer a la livraison</label>
										<div class="check"></div>
        							</div>
        							<p>Payer a la livraison </p>
        						</div>
        						<div class="payment_item active">
        							<div class="radion_btn">
										<input type="radio" id="f-option6" name="selector" disabled>
										<label for="f-option6">Paiement en ligne </label>
										<img src="img/product/single-product/card.jpg" alt="">
										<div class="check"></div>
        							</div>
        							<p>Paiment en ligne avec un moyen de paiement par carte bancaire ou e-money</p>
        						</div>
        						<div class="creat_account">
									<input type="checkbox" id="f-option4" name="selector">
									<label for="f-option4">j'accepte les </label>
									<a href="#">termes et conditions</a>
								</div>
       							<input type="submit" name="validation" class="main_btn" value="Valider La commande">
                                </form>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>

        
        <!--================End Checkout Area =================-->
        <?php
        include('database_connection.php');
        $nom = $prenom = $telephone = $email = $ville = $adresse1 = $adresse2 = $quartier = $codepostal='';
        if (isset($_POST['validation'])) {
            include('database_connection.php');
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $telephone = $_POST['telephone'];
            $email = $_POST['email'];
            $ville = $_POST['ville'];
            $adresse1 = $_POST['adresse1'];
            $adresse2 = $_POST['adresse2'];
            $quartier = $_POST['quartier'];
            $codepostal = $_POST['codepostal'];
            $note = $_POST['note'];
            $connect->exec("INSERT INTO commande (nom,prenom,telephone,email,ville,adresse1,adresse2,quartier,codepostal,note)  VALUES ('$nom','$prenom','$telephone','$email','$ville','$adresse1','$adresse2','$quartier','$codepostal','$note')");

            $sommeur = ('SELECT MAX(id) AS idd from commande');
            $donnee=$connect->query($sommeur);
            $total = $donnee->fetch();
            $iddd = $total['idd'];

            
             if(!empty($_SESSION["shopping_cart"]))
                                {
                        foreach($_SESSION["shopping_cart"] as $keys => $values)
                                {
                            $produit = $values["product_name"];
                            $prix = $values["product_price"];
                            $quantite = $values["product_quantity"];
                            $date = date("d-m-Y h:i:s");
                            $connect->exec("INSERT INTO panier (produit,quantite,prixu,idcommande,dateheure)  VALUES ('$produit','$quantite','$prix','$iddd','$date')");
                            }
                        }        
        
                         session_unset();
        }

        ?>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=+24106732698&text=Salut je veux avoir des informations A propos." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
        <!--================ start footer Area  =================-->	
           <?php include_once "footer.php"  ?>
		<!--================ End footer Area  =================-->
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>

<div id="popover_content_wrapper" style="display: none">
                <span id="cart_details"></span>
                <div align="right">
                    <a href="panier.php" class="btn btn-primary" id="check_out_cart">
                    <span class="glyphicon glyphicon-shopping-cart"></span> Valider
                    </a>
                    <a href="#" class="btn btn-default" id="clear_cart">
                    <span class="glyphicon glyphicon-trash"></span> Effacer
                    </a>
                </div>
            </div>


<script>  
$(document).ready(function(){

	load_product();

	load_cart_data();
    
	function load_product()
	{
		$.ajax({
			url:"fetchindex.php",
			method:"POST",
			success:function(data)
			{
				$('#display_item').html(data);
			}
		});
	}

	function load_cart_data()
	{
		$.ajax({
			url:"fetch_cart.php",
			method:"POST",
			dataType:"json",
			success:function(data)
			{
				$('#cart_details').html(data.cart_details);
				$('.total_price').text(data.total_price);
				$('.badge').text(data.total_item);
			}
		});
	}

	$('#cart-popover').popover({
		html : true,
        container: 'body',
        content:function(){
        	return $('#popover_content_wrapper').html();
        }
	});
		$('#cart-popoverpop').popover({
		html : true,
        container: 'body',
        content:function(){
        	return $('#popover_content_wrapper').html();
        }
	});

	$(document).on('click', '.add_to_cart', function(){
		var product_id = $(this).attr("id");
		var product_name = $('#name'+product_id+'').val();
		var product_price = $('#price'+product_id+'').val();
		var product_quantity = $('#quantity'+product_id).val();
		var action = "add";
		if(product_quantity > 0)
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
				success:function(data)
				{
					load_cart_data();
					alert("Item has been Added into Cart");
				}
			});
		}
		else
		{
			alert("lease Enter Number of Quantity");
		}
	});

	$(document).on('click', '.delete', function(){
		var product_id = $(this).attr("id");
		var action = 'remove';
		if(confirm("Are you sure you want to remove this product?"))
		{
			$.ajax({
				url:"action.php",
				method:"POST",
				data:{product_id:product_id, action:action},
				success:function()
				{
					load_cart_data();
					$('#cart-popover').popover('hide');
					alert("Item has been removed from Cart");
				}
			})
		}
		else
		{
			return false;
		}
	});

	$(document).on('click', '#clear_cart', function(){
		var action = 'empty';
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{action:action},
			success:function()
			{
				load_cart_data();
				$('#cart-popover').popover('hide');
				alert("Your Cart has been clear");
			}
		});
	});
	
	$(document).on('click', '#clear_cart', function(){
		var action = 'empty';
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{action:action},
			success:function()
			{
				load_cart_data();
				$('#cart-popoverpop').popover('hide');
				alert("Your Cart has been clear");
			}
		});
	});
    
});

</script>