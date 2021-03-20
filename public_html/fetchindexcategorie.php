<?php

//fetch_item.php


include('database_connection.php');
$query = "SELECT * FROM produits WHERE genre = '$genre'";

$statement = $connect->prepare($query);

if($statement->execute())
{
	$result = $statement->fetchAll();
	$output = '';
	$output .= ' 
				<div class="container">
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
										<img class="img-fluid" id="image' . $row["id"] .'" src="lesimages/'.$row['image'].'" style="width:960px;height:260px" alt="">
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




 <!--<section class="feature_product_area latest_product_area">
        	<div class="main_box">
				<div class="container">
					<div class="feature_product_inner">
						<div class="main_title">
							<h2>Latest Products</h2>
							<p>Who are in extremely love with eco friendly system.</p>
						</div>
						<div class="latest_product_inner row">
							<div class="col-lg-3 col-md-4 col-sm-6">
								<div class="f_p_item">
									<div class="f_p_img">
										<img class="img-fluid" src="img/product/feature-product/f-p-1.jpg" alt="">
										<div class="p_icon">
											<a href="#"><i class="lnr lnr-heart"></i></a>
											<a href="#"><i class="lnr lnr-cart"></i></a>
										</div>
									</div>
									<a href="#"><h4>Long Sleeve TShirt</h4></a>
									<h5>$150.00</h5>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<div class="f_p_item">
									<div class="f_p_img">
										<img class="img-fluid" src="img/product/feature-product/f-p-2.jpg" alt="">
										<div class="p_icon">
											<a href="#"><i class="lnr lnr-heart"></i></a>
											<a href="#"><i class="lnr lnr-cart"></i></a>
										</div>
									</div>
									<a href="#"><h4>Long Sleeve TShirt</h4></a>
									<h5>$150.00</h5>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<div class="f_p_item">
									<div class="f_p_img">
										<img class="img-fluid" src="img/product/feature-product/f-p-3.jpg" alt="">
										<div class="p_icon">
											<a href="#"><i class="lnr lnr-heart"></i></a>
											<a href="#"><i class="lnr lnr-cart"></i></a>
										</div>
									</div>
									<a href="#"><h4>Long Sleeve TShirt</h4></a>
									<h5>$150.00</h5>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<div class="f_p_item">
									<div class="f_p_img">
										<img class="img-fluid" src="img/product/feature-product/f-p-4.jpg" alt="">
										<div class="p_icon">
											<a href="#"><i class="lnr lnr-heart"></i></a>
											<a href="#"><i class="lnr lnr-cart"></i></a>
										</div>
									</div>
									<a href="#"><h4>Long Sleeve TShirt</h4></a>
									<h5>$150.00</h5>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<div class="f_p_item">
									<div class="f_p_img">
										<img class="img-fluid" src="img/product/feature-product/f-p-5.jpg" alt="">
										<div class="p_icon">
											<a href="#"><i class="lnr lnr-heart"></i></a>
											<a href="#"><i class="lnr lnr-cart"></i></a>
										</div>
									</div>
									<a href="#"><h4>Long Sleeve TShirt</h4></a>
									<h5>$150.00</h5>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<div class="f_p_item">
									<div class="f_p_img">
										<img class="img-fluid" src="img/product/feature-product/f-p-6.jpg" alt="">
										<div class="p_icon">
											<a href="#"><i class="lnr lnr-heart"></i></a>
											<a href="#"><i class="lnr lnr-cart"></i></a>
										</div>
									</div>
									<a href="#"><h4>Long Sleeve TShirt</h4></a>
									<h5>$150.00</h5>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<div class="f_p_item">
									<div class="f_p_img">
										<img class="img-fluid" src="img/product/feature-product/f-p-7.jpg" alt="">
										<div class="p_icon">
											<a href="#"><i class="lnr lnr-heart"></i></a>
											<a href="#"><i class="lnr lnr-cart"></i></a>
										</div>
									</div>
									<a href="#"><h4>Long Sleeve TShirt</h4></a>
									<h5>$150.00</h5>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-6">
								<div class="f_p_item">
									<div class="f_p_img">
										<img class="img-fluid" src="img/product/feature-product/f-p-8.jpg" alt="">
										<div class="p_icon">
											<a href="#"><i class="lnr lnr-heart"></i></a>
											<a href="#"><i class="lnr lnr-cart"></i></a>
										</div>
									</div>
									<a href="#"><h4>Long Sleeve TShirt</h4></a>
									<h5>$150.00</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
        	</div>
        </section> 
        -->