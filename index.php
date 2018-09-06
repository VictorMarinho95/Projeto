<!DOCTYPE html>
<html>
<head>
	<title>Projeto Pizza Delivery</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial scale = 1">
	<!-- STYLE.CSS -->
	<link rel="stylesheet" type="text/css" href="assets\css\style.css">
	<!-- Bootstrap 4 CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<!-- NAVBAR -->

<div class="container-fluid">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<a class="navbar-brand" href="#">Navbar</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
   			<span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      			<li class="nav-item active">
        			<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      			</li>
			     <li class="nav-item">
			       <a class="nav-link" href="#">Link</a>
			     </li>
			     <li class="nav-item">
			       <a class="nav-link disabled" href="#">Disabled</a>
			     </li>
    		</ul>

<!--User-->
    		<form class="form-inline">
			    <div class="input-group">
			      <div class="input-group-prepend">
			      </div>
			      <input type="text" class="form-control" placeholder="Username" aria-label="Usuário" aria-describedby="basic-addon1">
			    </div>
			 </form>

<!--Password-->

			<form class="form-inline">
			    <div class="input-group">
			      <div class="input-group-prepend">
			      </div>
			      <input type="text" class="form-control" placeholder="Username" aria-label="Password" aria-describedby="basic-addon1">
			    </div>
			</form>

			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>

  		</div>
	</nav>
	
	

<!-- SLIDERSHOW -->

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img class="d-block w-100" src="assets\img\pizza-slide-01.jpg" alt="First slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="assets\img\pizza-slide-02.jpg" alt="Second slide">
	    </div>
	    <div class="carousel-item">
	      <img class="d-block w-100" src="assets\img\pizza-slide-03.jpg" alt="Third slide">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<br>

<!-- JUMBOTRON -->

	<div class="jumbotron jumbotron-fluid">
	  <div class="container">
	    <h1 class="display-4">Fluid jumbotron</h1>
	    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
	  </div>
	</div>

<!-- ~PROMOÇÕES -->
	
	<div class="card-deck">
	  <div class="card">
	    <img class="card-img-top" src="assets\img\pizza-slide-01.jpg" alt="Card image cap">
	    <div class="card-body">
	      <h5 class="card-title">Card title</h5>
	      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
	    </div>
	  </div>
	  <div class="card">
	    <img class="card-img-top" src="assets\img\pizza-slide-02.jpg" alt="Card image cap">
	    <div class="card-body">
	      <h5 class="card-title">Card title</h5>
	      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
	      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
	    </div>
	  </div>
	  <div class="card">
	    <img class="card-img-top" src="assets\img\pizza-slide-03.jpg" alt="Card image cap">
	    <div class="card-body">
	      <h5 class="card-title">Card title</h5>
	      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
	      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
	    </div>
	  </div>
	</div>


</div>





	<!-- Bootstrap 4 JS & JQUERY --> 
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</body>
</html>
