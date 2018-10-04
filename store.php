<?php include('include/home/header.php'); 
error_reporting(0);
?>
    
		<div class="container" style="margin-top:20px;">
			<div class="row">
<p style="border:20px solid white;box-shadow:4px 4px 4px white;"></p>
       <img src="image/bedsheet.jpg" alt="" class="img-responsive"/>
        </div>
<?php				
				//$filter = isset($_POST['filter']) ? $_POST['filter'] : '';
				if(isset($_POST['filter']))
				{
					$filter = $_POST['filter'];
					$result = mysqli_query($bd, "SELECT * FROM store where P_name like '%$filter%' or size_name like '%$filter%' or brand like '%$filter%'");
                    
				}
				else
				{
					$result = mysqli_query($bd, "SELECT * FROM store");
                }
				echo '<div class="container-fluid" style="margin-top:10px;">';
                    echo '<div class="row">';	
				if($result){				
				while($row=mysqli_fetch_assoc($result)){
					
				$prodID = $row["id"];
                
					echo '<ul class="col-sm-2">';
					echo '<a href="product-details.php?prodid='.$prodID.'"  rel="bookmark" title="'.$row['brand'].'"><img src="'.$row['image'].'" alt="'.$row['P_name'].'" title="'.$row['price'].'" width="150" height="150" ></a>';
                    echo '<div>
					
					<h4><a href="product-details.php?prodid='.$prodID.'" style="text-decoration:none;" rel="bookmark" title="'.$row['brand'].'">'.$row['p_name'].''.' Bedsheet</a></h4>
					<h5>Rs '.''.$row['price'].'</h5>
					<p>Category: '.$row['size_name'].'</p>
					
					<a href="product-details.php?prodid='.$prodID.'" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>View Details</a>';
					echo '</div>';		
					echo '</ul>';			
				}
				}
            echo'</div>';echo'</div>';
				?>

<!--php ends here-->
		

</div>

<?php include('include/home/footer.php'); ?>