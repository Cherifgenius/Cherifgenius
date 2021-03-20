<style type="text/css">
      	.popover
		{
		    width: 100%;
		    max-width: 800px;
		}
		/* Custom, iPhone Retina */ 
    @media only screen and (min-width : 320px) {
         #cart-popover
		{
		    display:none;
		}
    }

    /* Extra Small Devices, Phones */ 
    @media only screen and (min-width : 480px) {
        #cart-popover
		{
		    display:none;
		}
    }

    /* Small Devices, Tablets */
   /* @media only screen and (min-width : 968px) {
     #cart-popoverpop
		{
		    display:block;
		}
    }*/

		.badge {
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 12px;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #a2e665;
    border-radius: 10px;
    cursor: pointer;
}
		
      </style>

       <header class="header_area">
           	<div class="top_menu row m0">
           		<div class="container">
					<div class="float-left">
						<a href="mailto:support@colorlib.com">adressemailbuvoidi@Buvoindi.com</a>
						<a href="https://wa.me/+24106732698">+24177907588</a>
					</div>
					<div class="float-right">
						<ul class="header_social">
							<li><a href="https://www.facebook.com/Buvoindicosmetics"  target="_blank"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li>
						</ul>
					</div>
           		</div>	
           	</div>	
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light main_box">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="/"><img src="buvoindi2.jpg" alt=""    width="180" height="70"></a>
						<a id="cart-popoverpop" class="btn" data-placement="bottom" title="Shopping Cart">
									<i class="lnr lnr lnr-cart"></i>
									<span class="glyphicon glyphicon-shopping-cart"></span>
									<span class="badge"></span>
									<span class="total_price">$ 0.00</span>
								</a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item"><a class="nav-link" href="/">Accueil</a></li> 
								<li class="nav-item submenu dropdown">
									<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nos Cremes</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="hydratation">Hydratation</a>
										<li class="nav-item"><a class="nav-link" href="traitement">Traitement</a>
										<li class="nav-item"><a class="nav-link" href="peau grasse">Peau grasse</a></li>
										<li class="nav-item"><a class="nav-link" href="peau Normale">Peau Normale</a></li>
										<li class="nav-item"><a class="nav-link" href="peau seche">Peau seche</a></li>
									</ul>
								</li> 
								<li class="nav-item submenu dropdown">
									<a href="categorie.php?genre=huile" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nos Savons</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="huile">huile</a>
										<li class="nav-item"><a class="nav-link" href="savons conservateur">Savons Conservateur</a>
										<li class="nav-item"><a class="nav-link" href="colorant">Colorant</a>
										<li class="nav-item"><a class="nav-link" href="Parfum">Parfum</a></li>
										<li class="nav-item"><a class="nav-link" href="antiseptiques">antiseptiques</a></li>
										<li class="nav-item"><a class="nav-link" href="anti-bactériennes">anti-bactériens</a></li>
									</ul>
								</li> 
								<li class="nav-item submenu dropdown">
									<a href="categorie.php?genre=huile" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nos huiles</a>
									<ul class="dropdown-menu">
										<li class="nav-item"><a class="nav-link" href="Cheveux">Cheveux</a>
										<li class="nav-item"><a class="nav-link" href="savons conservateur">Naturelle</a>
										<li class="nav-item"><a class="nav-link" href="colorant">hydratant</a>
									</ul>
								</li>
								<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
							<li>
								<a id="cart-popover" class="btn" data-placement="bottom" title="Shopping Cart">
									<i class="lnr lnr lnr-cart"></i>
									<span class="glyphicon glyphicon-shopping-cart"></span>
									<span class="badge"></span>
									<span class="total_price">$ 0.00</span>
								</a>
							</li>
								<li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
							</ul>
						</div> 
					</div>
					
            	</nav>
            </div>
            
        </header>