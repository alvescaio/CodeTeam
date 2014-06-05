<?php include '../../php/connection.php'; ?>
<?php session_start();
   if(!isset($_SESSION["user"]) || !isset($_SESSION["pass"])){
       header("Location:../../php/authenticate_user.php");exit();}
?>
<!DOCTYPE html>
<html>
<head>
	<link href="imgs/favicon.jpg" sizes="16x16" rel="icon" type="image/x-icon" />
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Matters </title>
	<!-- css -->
	<link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css" />  
	<link href="../../css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />  
	<link href="../../css/datapicker.css" rel="stylesheet" type="text/css" />  
	
	<link href="../../css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<header>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="../../">Code++</a>
					<div class="nav-collapse ">
						<ul id="nav-main" class="nav">	
			    			<li class="visible-tablet visible-phone"><a href="../php/authenticate_user.php">c</a></li>
			    		</ul>
			    	</div>
				<!-- Box user -->
				<div class="btn-group" >
			    <a class="btn btn-primary" href=""><i class="icon-user icon-white"></i> <?php echo $_SESSION['user']; ?></a>
			    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
			    <ul class="dropdown-menu">
				    <li><a href="post_activity.php"><i class="icon-list"></i> Activities</a></li>	
				    <li class="divider"></li>
				    <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>	
				    <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
				    <li class="divider"></li>
				    <li><a href=""><i class="icon-list"></i> Matters</a></li>
					<li class="divider"></li>
				    <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>	
				    <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
				    <li class="divider"></li>
				    <li><a href="../../php/logout.php"><i class="icon-share"></i> Sair</a></li>
			    </ul>
			    </div>

				</div>
			</div>
	 	</div>	
	</header>
	<div class="container">
		<div class="row">
			<p class="title-page">Let's create a matter...</p>
			<form class="form-center" action="../../php/functions.php" method="post" >
				<div class="controls-group">
					<div class="control input-prepend">
						<span class="add-on"></span>
						<input type="text" name="name" required placeholder="Name"> 
					</div>
					<div class="control input-prepend">
						<span class="add-on"><i class="icon-font"></i></span>
						<input type="text" name="title" required placeholder="Title"> 
					</div>
					<div class="control input-prepend ">
						<span class="add-on"><i class="icon-calendar"></i></span>
						 <input id="dp" type="text" name="date" required placeholder="Date">
					</div>
					<div class="control input-prepend">
						<span class="add-on"><i class="icon-share-alt"></i></span>
						<input type="text" name="link" required placeholder="Link">
					</div>
					<div class="control">
						<textarea name="description" id="textarea-post-activity" rows="3" placeholder="A breif description..."></textarea>
					</div>
				</div>
				<button type="submit" name="post-matter" class="adjust-btn btn btn-primary">Post</button>
			</form>
		</div>
	</div>
	


	<!--Scripts-->
	 <script src="../../js/jquery.js" type="text/javascript"></script>
	 <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
	 <script src="../../js/datapicker.js" type="text/javascript"></script>
	  <script type="text/javascript">$(document).ready(function () {$('#dp').datepicker({format: "dd/mm/yyyy"});  });</script>
	</body>
	</html>
