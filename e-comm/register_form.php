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
			<a class="navbar-brand" href="index.php">NiceWeb</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Products</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<p><br></p>
	<div class="container-fluid">


		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="card">
					<div class="card-header bg-primary text-white">Registration Form</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<label for="fname">First Name</label>
								<input class="form-control" id="fname" name="fname" type="text">
							</div>
							<div class="col-md-6">
								<label for="lname">Last Name</label>
								<input class="form-control" id="lname" name="lname" type="text">
							</div>
						</div>


						<div class="col-md-12">
							<label for="email">Email</label>
							<input class="form-control" id="email" name="email" type="email" placeholder="email@example.com">
						</div>
						<div class="col-md-12">
							<label for="password">Password</label>
							<input class="form-control" id="password" name="password" type="password" placeholder="Password">
						</div>
						
						<div class="col-md-12">
							<label for="password1">Repeat Password </label>
							<input class="form-control" id="password1" name="password1" type="password1" placeholder="Password">
						</div>
						
						<div class="col-md-12">
							<label for="mobile">Phone no.</label>
							<input type="mobile" class="form-control" id="mobile"  >
						</div>
						
						
						<div class="col-md-12">
							<label for="addr">Address 1</label>
							<input type="address" class="form-control" id="addr" >
						</div>
						 <div class="col-md-12">
						 	<label for="addr2">Address 2</label>
						 	<input type="address1" class="form-control" id="addr2" >
						 </div>
					</div>
					<div class="card-footer">
						
						 <button type="submit" class="btn btn-success" style="float:left">Sign in</button>
						
					</div>
				</div>



			</div>
			<div class="col-md-2">

		</div>
		</div></div></body>
		</html>
