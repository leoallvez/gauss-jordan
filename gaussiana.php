<?php
	include 'class.gauss.php';
	$method = new Gauss($_POST['matriz']);
	//$method->getGaussSolution();
?>

<!DOCTYPE html>		
<html lang="pt-br">		
  <head>		  
    <meta charset="utf-8">		  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">		  
    <meta name="viewport" content="width=device-width, initial-scale=1">		  		  
    <title>Gauss-Jordan</title>		  		 
    <!--CSS -->		  
    <link href="css/bootstrap.css" rel="stylesheet">		  
  </head>		
  <body>	
    <!--navbar-->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Gauss-Jordan</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Início</a></li>
          <!--<li><a href="#">Page 1</a></li>-->
        </ul>
      </div>
    </nav>
    <!--navbar-->
    <!--conteúdo-->
    <div class="col-md-10 col-md-offset-1">	  
		<h1>Resultado</h1>	
		<hr class="divider">
		<?php $method->getGaussResult(); ?>
    </div>
    <!--conteúdo-->
    <!--Js-->	
    <script src="js/jquery.min.js"></script>		  
    <script src="js/bootstrap.js"></script>		
  </body>		
</html>