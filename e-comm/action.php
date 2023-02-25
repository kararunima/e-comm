<?php

include("conn.php");


//for brands
if(isset($_POST["brands"])){
$display=mysqli_query($con,"select * from brands");
 echo "<ul class='nav nav-pills flex-column'>
 <li><a class='nav-link active' aria-current='page' href='#'>Brands</a></li> ";
while($row=mysqli_fetch_array($display)) {
	
	$bid=$row["brand_id"];
	$brand_name=$row["brand_title"];
	
	echo "<li><a class='nav-link brand' href='#' bid='$bid' >$brand_name</a></li>";
	
}
echo "</ul>";
	
}


// for categories

if(isset($_POST["categories"])){
$display=mysqli_query($con,"select * from categories");
 echo "<ul class='nav nav-pills flex-column'>
 <li><a class='nav-link active' aria-current='page' href='#'>Categories</a></li> ";
while($row=mysqli_fetch_array($display)) {
	
	$cat_id=$row["cat_id"];
	$cat_name=$row["cat_title"];
	
	echo "<li><a class='nav-link categories' href='#' cid='$cat_id' >$cat_name</a></li>";
	
}
echo "</ul>";
	
}

//for products
if(isset($_POST["products"])){
$display=mysqli_query($con,"select * from products");

 echo "<div class='row'>";
while($row=mysqli_fetch_array($display)) {
	
	$product_id=$row["product_id"];
	$product_cat=$row["product_cat"];
	$product_brand=$row["product_brand"];
	$product_title=$row["product_title"];
	$product_price=$row["product_price"];
	$product_qty=$row["product_qty"];
	$product_desc=$row["product_desc"];
	$product_image=$row["product_image"];
	$product_keywords=$row["product_keywords"];
	
	
	echo "<div class='col-md-4'>
	<div class='card'>
									<div class='card-header bg-primary text-white'>$product_title </div>
									<div class='card-body'><img src='assests/$product_image'></div>
									<div class='card-footer'>
									   
										Price Rs. $product_price
										<Button class='btn btn-sm btn-success' style='float:right;'>Add to Cart</Button>
									</div>
								</div> </div>";
	
}
echo "</div>";
	
}

//for getbrand
if(isset($_POST["getbrand"])||(isset($_POST["getcategories"]))||(isset($_POST["search"]))){
	if(isset($_POST["getbrand"])){
	$bid=$_POST["bid"];
	$display=mysqli_query($con,"select * from products where product_brand='$bid'");
		
	} else if (isset($_POST["getcategories"])){
			
			$cid=$_POST["cid"];
	$display=mysqli_query($con,"select * from products where product_cat='$cid'");
		}
	
	
	else if (isset($_POST["search"])){
			
			$key=$_POST["keyword"];
	$display=mysqli_query($con,"select * from products where product_keywords like '%$key%'");
		}
	 echo "<div class='row'>";
	while($row=mysqli_fetch_array($display)) {
	
	$product_id=$row["product_id"];
	$product_cat=$row["product_cat"];
	$product_brand=$row["product_brand"];
	$product_title=$row["product_title"];
	$product_price=$row["product_price"];
	$product_qty=$row["product_qty"];
	$product_desc=$row["product_desc"];
	$product_image=$row["product_image"];
	$product_keywords=$row["product_keywords"];
		echo "<div class='col-md-4'>
	                      <div class='card'>
									<div class='card-header bg-primary text-white'>$product_title </div>
									<div class='card-body'><img src='assests/$product_image'></div>
									<div class='card-footer'>
									   
										Price Rs. $product_price
										<Button class='btn btn-sm btn-success' style='float:right;'>Add to Cart</Button>
									</div>
								</div> </div>";
	
}
echo "</div>";
}



//for getcategories
/*if(isset($_POST["getcategories"])){
	
	$cid=$_POST["cid"];
	$display=mysqli_query($con,"select * from products where product_cat='$cid'");
	echo"<div class='row'>";
	while($row=mysqli_fetch_array($display)) {
	
	$product_id=$row["product_id"];
	$product_cat=$row["product_cat"];
	$product_brand=$row["product_brand"];
	$product_title=$row["product_title"];
	$product_price=$row["product_price"];
	$product_qty=$row["product_qty"];
	$product_desc=$row["product_desc"];
	$product_image=$row["product_image"];
	$product_keywords=$row["product_keywords"];
		echo "<div class='col-md-4'>
	                  <div class='card'>
									<div class='card-header bg-primary text-white'>$product_title </div>
									<div class='card-body'><img src='assests/$product_image'></div>
									<div class='card-footer'>
									   
										Price Rs. $product_price
										<Button class='btn btn-sm btn-success' style='float:right;'>Add to Cart</Button>
									</div>
								</div> </div>";
	
}
echo "</div>";
		
}*/
?>
