<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>My Store</title>
	<!--bootstrap-->
	<!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">-->
	<!--font awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" type="text/css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

	<!--navbar-->
	<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
		<div class="container-fluid" style="margin-left:150px;">
			<a class="navbar-brand" href="#">NiceWeb</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Products</a>
					</li>


					<li class="nav-item"><input class="form-control mr-sm-2" type="search" id="search" placeholder="Search" aria-label="Search"></li>
					<li class="nav-item"> <button class="btn btn-info my-2 my-sm-0" id="search_btn" type="submit">Search</button>
					</li>



					<!------>

					<!------>
				</ul>
				<ul class="navbar-nav" style="margin-right:150px;">
					<!--<li class="nav-item " >
						<a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping" style="color:white"></i>&nbsp;Cart</a>
					</li>-->


					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fa-solid fa-cart-shopping" style="color:white"></i>&nbsp;Cart
						</a>
						<ul class="dropdown-menu">
							<div class="card" style="width:400px;">
								<div class="card-header bg-primary  text-white">
									<div class="row">
										<div class="col-md-3">S.No.</div>
										<div class="col-md-3">Product Name</div>
										<div class="col-md-3">Product Image</div>
										<div class="col-md-3">Product Price</div>

									</div>


								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-3">S.No.</div>
										<div class="col-md-3">Product Name</div>
										<div class="col-md-3">Product Image</div>
										<div class="col-md-3">Product Price</div>

									</div>


								</div>
								<div class="card-footer">



								</div>

							</div>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fa-solid fa-right-to-bracket"></i> &nbsp; SignIn
						</a>
						<ul class="dropdown-menu">
							<div class="card" style="width:300px;">
								<div class="card-header  ">Login</div>

								<form method="post">
									<div class="card-header ">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" class="form-control">

										<label for="pass">Password</label>
										<input type="text" name="pass" id="pass" class="form-control">
										<p><br></p>

									</div>
									<div class="card-footer"><input type="button" name="submit" value="Login" style="float:right" class="btn btn-success"></div>
								</form>

							</div>
						</ul>
					</li>

					<li class="nav-item ">
						<a class="nav-link " href="register_form.php" ><i class="fa-solid fa-user"></i>&nbsp;Register</a>
						
					</li>
				</ul>
			</div>
		</div>
	</nav>


	<!-- navbar ends here-->
	<br>

	<!---categories & brands-->
	<div class="container-fluid">
		<div class="row">

			<div class="col-md-1"></div>
			<div class="col-md-2">
				<div class="d-flex">
					<div id="categories"></div>
					<!--<ul class="nav nav-pills flex-column">
				
				<li><a class="nav-link active" aria-current="page" href="#">Categories</a></li>
					<li><a class="nav-link" href="#">Mobiles</a></li>
					<li><a class="nav-link" href="#">Female wear</a></li>
					<li><a class="nav-link" href="#">Male wear</a></li>
					<li><a class="nav-link" href="#">Kids wear</a></li>
					<li><a class="nav-link" href="#">Home appliances</a></li>
					<li><a class="nav-link" href="#">Furnitures</a></li>
					
				</ul>-->
				</div>
				<div class="d-flex">
					<div id="brands"></div>
					<!--<ul class="nav nav-pills flex-column">
				
				<li><a class="nav-link active" aria-current="page" href="#">Categories</a></li>
					<li><a class="nav-link" href="#">Mobiles</a></li>
					<li><a class="nav-link" href="#">Female wear</a></li>
					<li><a class="nav-link" href="#">Male wear</a></li>
					<li><a class="nav-link" href="#">Kids wear</a></li>
					<li><a class="nav-link" href="#">Home appliances</a></li>
					<li><a class="nav-link" href="#">Furnitures</a></li>
					
				</ul>-->
				</div>
			</div>
			<!---categories end here-->


			<!----product table--->

			<div class="col-md-8">

				<div class="card">
					<div class="card-header bg-primary text-white">products</div>



					<div class="card-body">



						<div id="products"> </div>
						<!--<div class="col-md-4">
								<div class="card">
									<div class="card-header bg-primary text-white">black and white long skirt </div>
									<div class="card-body"><img src="assests/femalewear4.jpg"></div>
									<div class="card-footer">
										Price Rs.
										<Button class="btn btn-sm btn-success" style="float:right;">Add to Cart</Button>
									</div>
								</div>
							</div>-->

					</div>

				</div>
				<div class="card-footer">&copy; 2023 Nice Web Technologies</div>


			</div>




			<div class="col-md-1"></div>
		</div>
	</div>



	<!--jquery ajax-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<!--<script src="bootstrap/js/bootstrap.min.js"></script>-->
	<script src="js/main.js"></script>
</body>


</html>
