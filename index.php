<!DOCTYPE html>
<html lang="en">
<head>
  <title>HouseBahay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script>
		$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('.navbar');
   var offset = startchange.offset();
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $('.navbar').css('background-color', 'rgba(34,34,34,0.3)');
       } else {
          $('.navbar').css('background-color', 'transparent');
       }
   });
});
		
		
		$(document).ready(function() {
    $("#btnBuy").click(function(){
        alert("button");
    }); 
	$("#btnSell").click(function(){
        alert("button");
    }); 
});
	</script>
</head>
	
	<style>
	.container-full-bg{
		background-image: url('Style/images/skycraper.jpg');
    	background-size: cover;
		display: block;	
		height: 645px;
    	
		}
		
	
	.bg-grey{
		background-color: grey;
		}
		
	.jumbotron{
		background-color: rgba(0,0,0,.0001);
		padding-top: 20%;
				
		}
	.jumbotron h1{
		font-family: inherit;
		font-weight: bold;
		color: aliceblue;
		}
		
	.btn{
		background-color: #39c;
		font-weight: bold;
		font-family: inherit;
		color: aliceblue;
		width: 155px;
		margin:12px;
		}
		
	.jumbotron .container {
		padding-top: 100px;
		}
		
	.navbar-default {
		background-color: rgba(0,0,0,.0001);
		border-color:rgba(0,0,0,.0001);
		
		}
	
		.navbar{
			transition-duration: 0s;
		}
		.navbar-default .navbar-nav>li>a{
			color: aliceblue;
			font-family:inherit;
			font-size:large; 
			
		}
	</style>
<body>
	
	
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">About</a></li>
        <li><a href="#services">Condominiums</a></li>
        <li><a href="#portfolio">House & Lot</a></li>
        <li><a href="#pricing">Sign Up</a></li>
        <li><a href="#contact">Log In</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-full-bg">
	<div class="container special">
		<div class="jumbotron text-center">
			<h1>Find your home</h1> 
			 
			<form class="form-inline">
				<div class="container special">
					<button type="button" id="btnBuy" class="btn">Buy</button>
					<button type="button" id="btnSell" class="btn">Sell</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Discover container -->
<div class="container-fluid text-center">
	<h2>Discover different cities</h2>
	<h4>What we offer</h4>
	<br>
	<div class="row">
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-off"></span>
		  	<h4>POWER</h4>
		  	<p>Lorem ipsum dolor sit amet..</p>
    	</div>
    	<div class="col-sm-4">
      		<span class="glyphicon glyphicon-heart"></span>
      		<h4>LOVE</h4>
      		<p>Lorem ipsum dolor sit amet..</p>
    	</div>
    	<div class="col-sm-4">
      		<span class="glyphicon glyphicon-lock"></span>
      		<h4>JOB DONE</h4>
      		<p>Lorem ipsum dolor sit amet..</p>
		</div>
	</div>
	<br><br>
	<div class="row">
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-off"></span>
		  	<h4>POWER</h4>
		  	<p>Lorem ipsum dolor sit amet..</p>
    	</div>
    	<div class="col-sm-4">
      		<span class="glyphicon glyphicon-heart"></span>
      		<h4>LOVE</h4>
      		<p>Lorem ipsum dolor sit amet..</p>
    	</div>
    	<div class="col-sm-4">
      		<span class="glyphicon glyphicon-lock"></span>
      		<h4>JOB DONE</h4>
      		<p>Lorem ipsum dolor sit amet..</p>
		</div>
	</div>
	
</div>
<!-- contact us container -->
<div class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p> 
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div> 
    </div>
  </div>
</div>
	
	


</body>
</html>