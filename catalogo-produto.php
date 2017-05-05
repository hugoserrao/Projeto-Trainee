<!DOCTYPE html>
<html ng-app="shop">
	<head>
		<title>Candy Land</title>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/catalogoteste.css">	
		<script src="lib/angularjs/angular.min.js"></script>
	</head>


	<body>
		
		<?php include_once("header.php");
		?>
		
		<section>
			
			<div class="container" id="destaque-produtos-container" style="position: relative; top: 177px;">

				<div id="destaque-produtos">
					
					<div class="col-sm-6 col-imagem">
						<img src="img/<?=$produto['foto_principal']?>" alt="<?=$produto['nome_prod_longo']?>">
					</div>
					<div class="col-sm-6 col-descricao">
						<h2><?=$produto['nome_prod_longo']?></h2>
						<div class="box-valor">
							<div class="text-valor text-roxo"><?=$produto['preco']?>$ per unity</div>	
						</div>
						<a href="carrinhoAdd-<?=$produto['id_prod']?>" class="btn btn-comprar btn-success text-roxo"><i class="fa fa-shopping-cart"></i> Buy Now </a>
					</div>

				</div>

			</div>

		</section>

	</body>
		

		<?php 
		include_once("footer.php");
		 ?>	

		<script src="lib/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="js/efeitos.js"></script>
</html>