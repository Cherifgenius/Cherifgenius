<?php

//fetch_cart.php

session_start();


?>



<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/buvoindifavlog.png" sizes="32X32" type="image/png">
        <title>Buvoindi</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css"> 
             <script src="js/jquery.min.js"></script>
		<script src="js/bootstrape.min.js"></script>
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
        <?php include_once "header.php";  ?>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content row">
						<div class="col-lg-5">
							<h3>Buvoindi Cosmetics!</h3>
							<p>Nous Somme une industrie de fabrique de produit bio cosmetique 100% made in Gabon</p>
						
						</div>
						<div class="col-lg-7">
							<div class="halemet_img">
								<img src="img/banner/helmat.png" alt="">
							</div>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Feature Product Area =================-->
       
							<div id="display_item">
						</div>
					</div>
				</div>
        	</div>
        </section>
        <!--================End Feature Product Area =================-->
        
        <!--================Deal Timer Area =================-->
       
        <!--================End Clients Logo Area =================-->
        
        <!--================Most Product Area =================-->
        <?php   
        	include_once 'nosproduit.php';
        ?>
        <!--================End Most Product Area =================-->
        
        <!--================ start footer Area  =================-->	
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=+24106732698&text=Salut je veux avoir des informations A propos." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
        <?php    
        	include_once  "footer.php";

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
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/flipclock/timer.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>

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


</html>

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