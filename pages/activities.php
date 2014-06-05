<?php 
	  include '../php/connection.php';	
	  $command = "SELECT * FROM activity";
	  try {
	  	$query = $pdo->prepare($command);
	  	$query->execute();
	  	} 
	  catch (PDOException $e) {
	  	echo "<h1>Erro:</h1>",$e->getCode();
	  	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<link href="imgs/favicon.jpg" sizes="16x16" rel="icon" type="image/x-icon" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Atividades </title>
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
					<a class="brand" href="../">Code++</a>
					<div class="nav-collapse ">
						<ul id="nav-main" class="nav">
							<li class="active"><a href="">Atividades</a></li>
							<li><a href="materials.php">Matérias</a></li>
			    			<li><a href="learn.php">Aprenda</a></li>
			    			<li><a href="about.php">Sobre</a></li>
			    			<li class="visible-tablet visible-phone"><a href="../php/authenticate_user.php">Nova Atividade</a></li>
			    		</ul>
			    	</div>
			    	<a id="add-activity-btn" href="../php/authenticate_user.php" class=" btn btn-primary visible-desktop">Nova Atividade</a>
				</div>
			</div>
	 	</div>	
	</header>
	<div class="container">
		<div class="row">
			<h1 class="title-page">Atividades</h1>
			<ul class="nav">
				<?php while($result = $query->fetch(PDO::FETCH_OBJ)){?>
				<li>
					<div class="activity-list">
						<p> <strong>Atividade:</strong> <?php echo $result->numero; ?></p>
						<p> <strong>Nome:</strong> <?php echo $result->nome; ?> </p>
						<p> <strong>Data:</strong> <?php echo $result->data; ?></p>
						<p> <strong>Descrição:</strong> <?php echo $result->descricao; ?> </p>
						<a  target="_blank" href= <?php echo $result->link; ?> ><button class="btn btn-primary ">Ver exercício</button></a>		
					</div>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>

	<!--Scripts-->
	 <script src="../js/jquery.js" type="text/javascript"></script>
	 <script src="../js/bootstrap.js" type="text/javascript"></script>

	</body>
	</html>
