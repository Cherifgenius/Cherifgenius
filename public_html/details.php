<?php  session_start();  ?>

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
    </head>

    <style type="text/css">
    	.btn
    	{
    		padding: 0px 10px;
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
    <body>
        
        <!--================Header Menu Area =================-->
        <?php include_once "header.php";  ?>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content text-center">
						<h2>Details </h2>
						<div class="page_link">
							<a href="index.html">Accueil</a>
							<a href="category.html">Categorie</a>
							<a href="single-product.html">Details pproduit</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Single Product Area =================-->

        <?php    
        			include('database_connection.php');
        			$id = '';
        			if(isset($_GET['id']))
        			{
        			$id = $_GET['id'];
        		   	}
					$query = "SELECT * FROM produits  WHERE id='$id'";
					$result = $connect->query($query,PDO:: 	FETCH_BOUND);
					$result->bindColumn('image',$image);
					$result->bindColumn('image2',$image2);
					$result->bindColumn('image3',$image3);
					$result->fetch();

        			?>
        <div class="product_image_area">
        	<div class="container">
        		<div class="row s_product_inner">
        			<div class="col-lg-6">
        				<div class="s_product_img">
							<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
										<img src="../lesimages/<?php print $image; ?>" width="60" heigth="60" alt="">
									</li>
									<li data-target="#carouselExampleIndicators" data-slide-to="1">
										<img src="../lesimages/<?php print $image2; ?>" width="60" heigth="60" alt="">
									</li>
									<li data-target="#carouselExampleIndicators" data-slide-to="2">
										<img src="../lesimages/<?php print $image3; ?>" width="60" heigth="60" alt="">
									</li>
								</ol>
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="../lesimages/<?php print $image; ?>" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="../lesimages/<?php print $image2; ?>" alt="Second slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="../lesimages/<?php print $image3; ?>" alt="Third slide">
									</div>
								</div>
							</div>
        				</div>
        			</div>

        			<?php    
        			include('database_connection.php');
        			$id = '';
        			if(isset($_GET['id']))
        			{
        			$id = $_GET['id'];
        		   	}

					$query = "SELECT * FROM produits  WHERE id='$id'";
					$result = $connect->query($query,PDO:: 	FETCH_BOUND);
					$result->bindColumn('designation',$designation);
					$result->bindColumn('genre',$genre);
					$result->bindColumn('marque',$marque);
					$result->bindColumn('codebar',$codebar);
					$result->bindColumn('description',$description);
					$result->bindColumn('ingredient',$ingredient);
					$result->bindColumn('poids',$poids);
					$result->bindColumn('prix',$prix);
					$result->bindColumn('image',$image);
					$result->bindColumn('image2',$image2);
					$result->bindColumn('image3',$image3);
					$result->fetch();

        			?>
        			<div class="col-lg-5 offset-lg-1">
        				<div class="s_product_text">
        					<h3><?php print $designation;   ?></h3>
        					<h2><?php print number_format($prix).'fcfa';   ?></h2>
        					<ul class="list">
        						<li><a class="active" href="#"><span>Categorie</span> : <?php  print $genre; ?></a></li>
        						<li><a href="#"><span>Disponible</span> : En Stock</a></li>
        					</ul>
        					<p><?php print $description;   ?></p>
        					<div class="product_count">
        						<label for="qty">Quantité:</label>
								<?php   print  '<input type="text" name="quantity" id="quantity'. $id.'" maxlength="12" value="1" title="Quantity:" class="input-text qty">'; ?>
								<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
								<button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
							</div>
							<?php 

							print '<input type="hidden" name="hidden_name" id="name'.$id.'" value="'.$designation.'" />
            	<input type="hidden" name="hidden_price" id="price'.$id.'" value="'.$prix.'" />';

							  ?>
        					<div class="card_area">
        					<?php  print	'<input class="main_btn btn btn-suc  add_to_cart" type="button" name="add_to_cart" id="'.$id.'" style="margin-top:5px;padding:0 10px" value="Ajouter au panier">';  ?>
        						<a class="icon_btn" href="#"><i class="lnr lnr lnr-diamond"></i></a>
        						<a class="icon_btn" href="#"><i class="lnr lnr lnr-heart"></i></a>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <!--================End Single Product Area =================-->
        
        <!--================Product Description Area =================-->
        <section class="product_description_area">
        	<div class="container">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
					<a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
					</li>
					<li class="nav-item">
					<a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Specification</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Comments</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade " id="home" role="tabpanel" aria-labelledby="home-tab">
						<p><?php  print $description;  ?></p>
					</div>
					<div class="tab-pane fade  show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="table-responsive">
							<table class="table">
								<tbody>
									
							
									<tr>
										<td>
											<h5>Poids</h5>
										</td>
										<td>
											<h5><?php  print $poids  ?> </h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>CodeBar</h5>
										</td>
										<td>
											<h5><?php print $codebar; ?></h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Ingredients</h5>
										</td>
										<td>
											<h5><?php  print $ingredient;   ?></h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Genre</h5>
										</td>
										<td>
											<h5><?php print $genre;  ?></h5>
										</td>
									</tr>
									<tr>
										<td>
											<h5>Marque</h5>
										</td>
										<td>
											<h5><?php print $marque;  ?></h5>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

					<?php
					include('database_connection.php');

        			$id = '';
        			if(isset($_GET['id']))
        			{
        			$id = $_GET['id'];
        		   	}

					$query = "SELECT * FROM commentaire  WHERE idproduit='$id'";
					$result = $connect->query($query,PDO:: 	FETCH_BOUND);
					$result->bindColumn('nomcomplet',$nomcomplet);
					$result->bindColumn('commentaire',$commentaire);
					$result->bindColumn('dateheure',$dateheure);
					

					?>
					<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
						<div class="row">
							<div class="col-lg-6">
								<?php  while ($result->fetch()) { ?>
								<div class="comment_list">
									<div class="review_item">
										<div class="media">
											<div class="d-flex">
												<img src="img/product/single-product/female_profile_100px.png" alt="">
											</div>
											<div class="media-body">
												<h4><?php print $nomcomplet;  ?></h4>
												<h5><?php print $dateheure;   ?></h5>
												<a class="reply_btn" href="#">Reply</a>
											</div>
										</div>
										<p><?php print $commentaire;   ?></p>
									</div>
	
									
								</div>
							<?php  } ?>	
							</div>
							<div class="col-lg-6">
								<div class="review_box">
									<h4>Poster un commentaire</h4>
									<form class="row contact_form" action="../controler/commentaire.php" method="post" id="contactForm" novalidate="novalidate">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" id="nomcomplet" name="nomcomplet" placeholder="Nom Complets">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="email" class="form-control" id="email" name="email" placeholder="Adresse email">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control" id="number" name="contact" placeholder="Numero de telephone">
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<textarea class="form-control" name="commentaire" id="message" rows="1" placeholder="Commentaire"></textarea>
											</div>
										</div>
										<div class="form-group">
												<input type="hidden" class="form-control" id="nomcomplet" name="idproduit" placeholder="Nom Complets" value="<?php if(isset($_GET['id'])) { print $_GET['id']; } ?>" readonly>
											</div>
										<div class="col-md-12 text-right">
											<button type="submit"  name="insert" value="submit" class="btn submit_btn">Poster</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
        	</div>
        </section>
        <!--================End Product Description Area =================-->
        
        <!--================Most Product Area =================-->
        <?php   
        	include_once 'nosproduit.php';
        ?>
        <!--================End Most Product Area =================-->
        
        <!--================ start footer Area  =================-->	

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=51955081075&text=Salut je veux avoir des informations A propos." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>

       <?php  
       		include_once "footer.php";

        ?>
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
					<a href="#" class="btn btn-primary" id="check_out_cart">
					<span class="glyphicon glyphicon-shopping-cart"></span> Check out
					</a>
					<a href="#" class="btn btn-default" id="clear_cart">
					<span class="glyphicon glyphicon-trash"></span> Clear
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