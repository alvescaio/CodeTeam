<?php 
	try {
		$pdo = new PDO("mysql:host=localhost; dbname=codeplus;","root","");
	} catch (PDOException $e) {
		if($e->getCode() == 1049){
			echo "Banco de dados não existe...";
		}
	}

 ?>