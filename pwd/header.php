<!DOCTYPE html>
<html lang="en">
<head>
		<link rel="stylesheet" href="css/reset.css" type="text/css">
		<link rel="stylesheet" href="css/bootstrap.css" type="text/css"> 
	    <link rel="stylesheet" href="css/custom.css" type="text/css"> 

		<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css"> 		 
		<script src="js/jquery.js"></script>		 
		<script src="js/bootstrap.js"></script> 
		
</head>

<body>

<?php
	include 'conn/koneksi.php';
?> 
<div class="navbar navbar-fixed-top" style="background-color:white;">
	<div class="navbar-inverse">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			<a class="brand" href="#">
				<img alt="Brand" src="img/logokecil.png">
			</a>
      
			<div class="nav-collapse">
				<ul class="nav">			
					<li><a href="#"><i class="icon-home icon-black"></i> Home</a></li>
					<li><a href="singup.php"><i class="icon-user icon-black"></i> Daftar</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-film icon-black"></i> Features <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-envelope icon-black"></i> Features</a></li>
								<li><a href="#"><i class="icon-road icon-black"></i> Another action</a></li>
								<li><a href="#"><i class="icon-tint icon-black"></i> Something else here</a></li>
								<li class="divider"></li>
								<li class="nav-header">Nav header</li>
								<li><a href="#"><i class="icon-heart icon-black"></i> One more separated link</a></li>
							</ul>
					</li>					
					
				</ul>
		
				
				<form class="navbar-form form-search pull-right" action="cek-login.php" method="POST" accept-charset="UTF-8">
					<div class="form-group">
			              <input type="text" placeholder="Username" class="form-control" name="usr">
						  <input type="password" placeholder="Password" class="form-control" name="pass">
			              <button type="submit" name="log" class="btn btn-success">Sign in</button>    
			        </div>
				</form>
				
			</div><!-- /.nav-collapse -->
		</div><!-- /.container -->
	</div><!-- /.navbar-inner -->
</div><!-- /.navbar -->


 
    
</body>
</html>	