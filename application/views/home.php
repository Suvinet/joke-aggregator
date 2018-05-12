<!DOCTYPE html>
<html lang="en">
<head>
	<title>Joke aggregator - The largest collection of jokes on the internet</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-2 col-lg-2">
</div>
<div class="col-md-8 col-lg-8">
<header>
<h1>Joke Aggregator</h1>
<p>The largest collection of jokes on the internet</p>
</header>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li> 
        <li><a href="#">Page 3</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url();?>register"> Sign Up</a></li>
        <li><a href="#"> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="col-md-2 col-lg-2">
</div>
</div>
</div>
<script src="<?php echo base_url();?>js/jquery.js"></script>
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
</body>
</html>