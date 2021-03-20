<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/buvoindifavlog.png" sizes="32X32" type="image/png">
        <title>Contact Buvoindi</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <?php  include_once 'header.php';   ?>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
				<div class="container">
					<div class="banner_content text-center">
						<h2> Nous Contactez</h2>
						<div class="page_link">
							<a href="index.html">Accueil</a>
							<a href="contact.html">Contact</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area p_120">
            <div class="container">
                <div id="mapBox" class="mapBox" 
                    data-lat="40.701083" 
                    data-lon="-74.1522848" 
                    data-zoom="13" 
                    data-info="PO Box CT16122 Collins Street West, Victoria 8007, Australia."
                    data-mlat="40.701083"
                    data-mlon="-74.1522848">
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Gabon, Libreville</h6>
                                <p>Akebe Ville près de Likouala  </p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">+24177907588</a></h6>
                                <p>Lun au Ven 09h:00 - 17h:00 </p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#">email@buvoindi.com</a></h6>
                                <p>Envoyer vos requettes!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Votre Nom">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Votre adress email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" rows="1" placeholder="Votre Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 text-right">
                                <button type="submit" value="submit" class="btn submit_btn">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
        
        <!--================ start footer Area  =================-->	
        <?php include_once "footer.php";  ?>
        <!--================End Contact Success and Error message Area =================-->
        
        
        
        
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
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>
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
    
});

</script>