<!DOCTYPE html>
<html ng-app="shop">
	<head>
		<title>Candy Land</title>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/catalogo.css">	
	</head>


	<body>
		<?php include_once("header.php");?>
		
		<section>
			<div class="container"> <h2 id="catalogo">PRoducts Avaiable Here :</h2> </div>
			<div class="col-md-4" id="fini">
				<div class="container"></div>
					<img src="img/fini.jpg" class="imagem">
					<h2 class="texto text-center">Fini Candies</h2>
					<a href="#" class="btn btn-success"><i class="fa fa-shopping-cart"></i> $5 per unity</a>
				</div>
			</div>
			<div class="col-md-4" id="halls">
				<div class="container"></div>
					<img src="img/halls.png" class="imagem ">
					<h2 class="texto text-center">Halls Drops</h2>
					<a href="#" class="btn btn-success"><i class="fa fa-shopping-cart"></i> $3 per unity </a>
				</div>
			</div>
			<div class="col-md-4" id="lollypop">
				<div class="container"></div>
					<img src="img/lollypop.jpg" class="imagem">
					<h2 class="texto text-center">Lollypops</h2>
					<a href="#" class="btn btn-success"><i class="fa fa-shopping-cart"></i> $0.22 per unity </a>
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
		<script>
			angular.module("shop", []).controller("destaque-controller", function($scope){

				$scope.produtos = [];

				$scope.produtos.push({
					nome_prod_longo:"Smartphone Motorola Moto X Play Dual Chip Desbloqueado Andoid 5.1",
					foto_principal:"moto-x.png",
					preco:"1.259",
					centavos:"10",
					parcelas:8,
					parcela:"174,88",
					total:"1.399,00"
				});	

				$scope.produtos.push({
					nome_prod_longo:"Iphone",
					foto_principal:"moto-x.png",
					preco:"1.259",
					centavos:"10",
					parcelas:8,
					parcela:"174,88",
					total:"1.399,00"
				});	

		});
		</script>
		<!--<script> chamar o ng-controller para o controle do carrossel
			$(function(){
				$("").owlCarousel({
					
					autoPlay: 5000,
					items: 1,
					singleItem:true;

				})

						}
			)
			}
		</script> AJEITAR O CARROSSEL DE ITENS DEPOIS e TAMBEM ADICIONAR O EFEITO RATY PARA CLASSIFICAÇÃO DPS ITENS POR ESTRELA-->
</html>