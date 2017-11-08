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
    <div class="col-md-4 col-md-offset-4">	  
      <h1>Definir Matriz</h1>	
      <hr class="divider">
      <form action="gauss.php" method="post">
        <div class="form-group">
          <label for="linhas">Número de linhas</label>
          <input type="number" name="linhas" class="form-control" placeholder="Número de linhas" required>
        </div>
        <div class="form-group">
          <label for="colunas">Número de colunas</label>
          <input type="number" name="colunas" class="form-control" placeholder="Número de colunas" required>
        </div>
        <button type="submit" class="btn btn-primary">Gerar Matriz</button>
      </form>
    </div>
    <!--conteúdo-->
    <!--Js-->	
    <script src="js/jquery.min.js"></script>		  
    <script src="js/bootstrap.js"></script>		
  </body>		
</html>