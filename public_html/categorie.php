	<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/buvoindifavlog.png" sizes="32X32" type="image/png">
        <title>Categorie</title>
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
        <?php  

        	include_once 'header.php';

          ?>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content text-center">
						<h2>Shop Categorie Page <?php 
						 if(isset($_GET['genre'])){print $_GET['genre'];}

						  ?></h2>
						<div class="page_link">
							<a href="/Buvoindi/sitebuvoindi">Accueil</a>
							<a href="/Buvoindi/sitebuvoindi">Categorie</a>
							<a href="<?php print $_GET['genre'];  ?>"><?php  if (isset($_GET['genre'])) {
							print $_GET['genre'];
						}  ?></a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Category Product Area =================-->
        <section class="cat_product_area p_120">
        	<div class="container">
        		<div class="row flex-row-reverse">
        			<div class="col-lg-9">
        				<div class="product_top_bar">
        					<div class="left_dorp">
								<select class="sorting">
									<option value="1">Default sorting</option>
									<option value="2">Default sorting 01</option>
									<option value="4">Default sorting 02</option>
								</select>
								<select class="show">
									<option value="1">Show 12</option>
									<option value="2">Show 14</option>
									<option value="4">Show 16</option>
								</select>
        					</div>
        					<div class="right_page ml-auto">
								<nav class="cat_page" aria-label="Page navigation example">
									<ul class="pagination">
										<li class="page-item"><a class="page-link" href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a></li>
										<li class="page-item active"><a class="page-link" href="#">1</a></li>
										<li class="page-item"><a class="page-link" href="#">2</a></li>
										<li class="page-item"><a class="page-link" href="#">3</a></li>
										<li class="page-item blank"><a class="page-link" href="#">...</a></li>
										<li class="page-item"><a class="page-link" href="#">6</a></li>
										<li class="page-item"><a class="page-link" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></li>
									</ul>
								</nav>
        					</div>
        				</div>
        				<div class="latest_product_inner row">
							
        					<?php

//fetch_item.php

$genre = $_GET['genre'];
include('database_connection.php');
$nombre_de_donnee = 30;
$sommeur = ('SELECT count(*) AS total from produits');
$donnee=$connect->query($sommeur);
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
	} else
	{
	  $pageactuelle = 1;
	}

$pageEntree = ($pageactuelle - 1)*($nombre_de_donnee);


$query = "SELECT * FROM produits WHERE genre = '$genre' LIMIT $pageEntree, $nombre_de_donnee";

$statement = $connect->prepare($query);

if($statement->execute())
{
	$result = $statement->fetchAll();
	$output = '';
	$output .= ' 
					<div class="feature_product_inner">
						<div class="main_title">
						</div>
						<div class="latest_product_inner row">';
	foreach($result as $row)
	{
		$output .= '
							<a href="details.php?id='.$row['id'].'"><div class="col-lg-3 col-md-4 col-sm-6">
								<div class="f_p_item">
									<div class="f_p_img">
										<img class="img-fluid" style="width:960px;height:260px" src="lesimages/'.$row['image'].'" alt="">
										<div class="p_icon">
											<a href="#"><i class="lnr lnr-heart"></i></a>
											<a href="#"><i class="lnr lnr-cart"></i></a>
										</div>
									</div>
									<a href="details.php"><h4>'.$row['designation'].'</h4></a>
									<h5>'.$row['prix'].'fcfa </h5>
									<input type="text" name="quantity" id="quantity' . $row["id"] .'" class="form-control" value="1" />
            	<input type="hidden" name="hidden_name" id="name'.$row["id"].'" value="'.$row["designation"].'" />
            	<input type="hidden" name="hidden_price" id="price'.$row["id"].'" value="'.$row['prix'].'" />
									<input type="button" name="add_to_cart" id="'.$row["id"].'" style="margin-top:5px;" class="btn btn-suc form-control add_to_cart" value="Ajouter au panier" />
								</div>
							</div></a>
		';
	}
	echo $output.'<br\>';
}

?>
					</div>
				</div>
        	


        			</div>
        			
        	</div>

        	
					</div>

				</div>
			</div>
		</div>
	</div>
        </section>
        <!--================End Category Product Area =================-->
        
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
			url:"fetchindexcategorie.php",
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
					$('#cart-popoverpop').popover('hide');
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