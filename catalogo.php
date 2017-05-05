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

			<div class="container"> <h2 id="catalogo">PRoducts Avaiable Here :</h2> 
						</div>
			<div class="container" id="destaque-produtos-container" ng-controller="destaque-controller">

				<div id="destaque-produtos">
			
					<div class="item" ng-repeat="produto in produtos">

						<div class="col-xs-4" id="{{produto.idzin}}">
							<div class="container">
								<img src="img/{{produto.foto_principal}}" class="imagem">
								<h2 class="texto text-center">{{produto.nome_prod_longo}}</h2>
								<a href="produto_{{produto.id_prod}}" class="btn btn-success"><i class="fa fa-shopping-cart"></i> {{produto.preco}}$ per unity</a>
							</div>
						</div>
						
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
		<script>
			angular.module("shop", []).controller("destaque-controller", function($scope){

				$scope.produtos = [];

				$scope.produtos.push({
					idzin:"fini",
					nome_prod_longo:"Finni Candies",
					foto_principal:"fini.jpg",
					preco:"5",
					id_prod:"3",
				});	

				$scope.produtos.push({
					idzin:"halls",
					nome_prod_longo:"Halls Drops",
					foto_principal:"halls.png",
					preco:"3",
					id_prod:"4",
				});	
				$scope.produtos.push({
					idzin:"lollypop",
					nome_prod_longo:"Lollypops",
					foto_principal:"lollypop.jpg",
					preco:"0.22",
					id_prod:"5",
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