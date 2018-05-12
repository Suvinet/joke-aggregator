<!DOCTYPE html>
<html lang="en">
<head>
	<title>Joke aggregator - Signup and start publishing your jokes</title>
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
<div class="row register">
  <div class="col-md-2">
  </div>
  <div class="col-md-8">
    <h3>Signup to get started</h3>
    <form class="form-horizontal" action="register/signup" method="post">
  <div class="form-group">
    <label class="control-label col-sm-2" for="firstname">Firstname:</label>
    <div class="col-sm-10">
      <input type="firstname" class="form-control" id="firstname" placeholder="Enter firstname" name="firstname" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Lastname:</label>
    <div class="col-sm-10"> 
      <input type="lastname" class="form-control" id="lastname" placeholder="Enter lastname" name="lastname" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Username:</label>
    <div class="col-sm-10"> 
      <input type="username" class="form-control" id="username" placeholder="Enter username" name="username" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Email:</label>
    <div class="col-sm-10"> 
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Password:</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" id="password" placeholder="Enter your desired password" name="password" required>
    </div>
  </div>
 
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
  </div>
  <div class="col-md-2">
  </div>
  </div>
</div>
<div class="col-md-2 col-lg-2">
</div>
</div>
</div>
<script src="<?php echo base_url();?>js/jquery.js"></script>
<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
</body>
</html>