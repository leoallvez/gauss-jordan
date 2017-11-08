
<?php
    $linhas = $_POST['linhas'];
    $colunas = $_POST['colunas'];
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
		<h1>Inserir valores</h1>	
		<hr class="divider">
		<form action="gaussiana.php" method="post">
			<table class="table">
				<tbody>
					<thead>
						
						<tr>
						<th>#</th>
						<?php for($j = 1; $j <= $colunas; $j++ ) { ?>
								<th>
									<?php echo ($j != $colunas)?"X<sub>$j<?/sub>":"b"?>
								</th>
						<?php } ?>
						</tr>
					</thead>
					<?php for($i = 1; $i <= $linhas; $i++ ) { ?>
						<tr>
							<th scope="row"><?= "L<sub>$i</sub>" ?></th>
							<?php for($j = 1; $j <= $colunas; $j++ ) { ?>
								<td class="<?php echo ($j == $colunas)?'success':''?>">
									<input type="number" class="form-control" step="0.1" name="matriz[<?php echo $i ?>][<?php echo $j ?>]" placeholder="<?="L".$i." - C".$j?>" required/>
								</td>
							<?php } ?>
						</tr>
					<?php } ?>
					<tr>
						<td colspan="<?php echo $colunas ?>">
							<p><input type="submit" class="submit btn btn-primary" value="Resolver matriz"/></p>
						</td>
					</tr>
				</tbody>
			</table>
		<input type="hidden" name="linhas" value="<?php echo $linhas ?>"/>
		<input type="hidden" name="colunas" value="<?php echo $colunas ?>"/>
		</form>
    </div>
    <!--conteúdo-->
    <!--Js-->	
    <script src="js/jquery.min.js"></script>		  
    <script src="js/bootstrap.js"></script>		
  </body>		
</html>
 
