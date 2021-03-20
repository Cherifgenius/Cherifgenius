<section class="most_product_area">
        	<div class="main_box">
				<div class="container">
					<div class="main_title">
						<h2>Nos Produits</h2>
					</div>
					<div class="row most_product_inner">

        			<?php    
        			include('database_connection.php');
        		
					$query = "SELECT * FROM produits ORDER BY RAND() LIMIT 0,12";
					$result = $connect->query($query,PDO:: 	FETCH_BOUND);
					$result->bindColumn('designation',$designation);
					$result->bindColumn('prix',$prix);
					$result->bindColumn('image',$image);

        			?>
        			<?php  
        				while ($result->fetch()) {	
        			?>
						<div class="col-lg-3 col-sm-6">
							<div class="most_p_list">
								<div class="media">
									<div class="d-flex">
										<img src="lesimages/<?php print $image;  ?>" style="width: 70px;height: 70px" alt="">
									</div>
									<div class="media-body">
										<a href="#"><h4><?php  print $designation;  ?></h4></a>
										<h3><?php  print $prix.' FCFA';   ?></h3>
									</div>
								</div>	
							</div>
						</div>
					
						<?php  } ?>
						

						</div>
					</div>
					</div>
               		</div>
</section>