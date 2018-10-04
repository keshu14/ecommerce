<?php
	include("db.php");
	
	$prodID = $_GET['prodid'];

	if(!empty($prodID)){
		$sql = mysqli_query($bd, "select * from store where id = '$prodID'") or die(mysql_error());
		$getProdInfo = mysqli_fetch_assoc($sql);
		$prodname= $getProdInfo["brand"];
		$prodcat = $getProdInfo["size_name"];
		$prodprice = $getProdInfo["price"];
		$proddesc = $getProdInfo["p_name"];
		$prodimage = $getProdInfo["image"];
				}
?>
<?php include('include/home/header.php'); ?>
	
	<section>
		<div class="container" style="margin-top:100px;">
			<div class="row">

				<div class="col-sm-12 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-4">
							<div class="view-product">
                            
						
							<img src="<?php echo $prodimage; ?>" />	
                                
							</div>
						</div>
						<div class="col-sm-2">
							<div class="product-information"><!--/product-information-->
							<h4 class="product"><?php echo $prodname ." Bedsheet"; ?></h4>
								<p>Category: <?php echo $prodcat; ?></p>
				
								<p>Price: <span class="price"><?php echo $prodprice; ?></span></p>

                                <br>
                                
                                <a class="btn btn-default add-to-cart" id="add-to-cart"><i class="fa fa-shopping-cart"></i>Add to Cart</a>
                                <p class="info hidethis" style="color:red;"><strong>Product Added to Cart!</strong></p>
								<p><b>Description: </b><?php echo $proddesc; ?></p>
								<p><b>Brand:</b><?php echo $prodname; ?></p>
								<p><b>Size:</b><?php echo $prodcat; ?></p>
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
				</div>
			</div>
		</div>
		</div>
	</section>
	<div class="container-fluid" style="height:100px;">
	    
	</div>
	<?php include('include/home/footer.php'); ?>