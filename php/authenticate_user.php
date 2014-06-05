<!DOCTYPE html>
<html>
<head>
	<link href="imgs/favicon.jpg" sizes="16x16" rel="icon" type="image/x-icon" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Autentificação </title>
	<!-- css -->
	<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />  
	<link href="../css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />  
	<link href="../css/main.css" rel="stylesheet" type="text/css" />
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
							<li><a href="../pages/activities.php">Atividades</a></li>
							<li><a href="../pages/materials.php">Matérias</a></li>
			    			<li><a href="../pages/learn.php">Aprenda</a></li>
			    			<li><a href="../pages/about.php">Sobre</a></li>
			    		</ul>
			    	</div>
			    	
				</div>
			</div>
	 	</div>	
	</header>
	<div class="container">
		<div class="row">
			<p class="title-page"> Você é o administrador?</p>
			<p class="sub-title-page">Então faça o login e adicione uma nova atividade...</p>
			<div class="container">
				<div class="row">
					<form class="form-center" action="functions.php" method="post">
						<div class="controls-group">
							<div class="control input-prepend">
								<span class="add-on"><i class="icon-user"></i></span>
								<input type="text" name="user" required placeholder="User">
							</div>
							<div class="control input-prepend">
								<span class="add-on"><i class="icon-lock"></i></span>
								<input type="password" name="pass" required placeholder="Pass">
							</div>
							<div class="control">
								<button type="submit" name="select_user" class="btn btn-primary " >Entrar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	



	<!--Scripts-->
	 <script src="../js/jquery.js" type="text/javascript"></script>
	 <script src="../js/bootstrap.js" type="text/javascript"></script>

	</body>
	</html>
