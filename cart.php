<!DOCTYPE html>
<html ng-app="shop">
	<head>
		<title>Candy Land</title>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/trainee.css">	
		<script src="lib/angularjs/angular.min.js"></script>
	</head>


	<body>

		<?php include_once("header.php");?>

			<section  ng-controller="cart-controller">
				
				<div class="container">

					<div class="row text-center title-default-roxo" style="margin:40px auto;">
						<h2>Shopping Cart</h2>
						<hr>	
					</div>

					<table id="cart-products" class="table table-bordered">
						<thead>
							<tr>
								<th colspan="2">Products(s)</th><!--simula o espaço de 2 colunas-->
								<th class="text-center">Quantity</th>
								<th class="text-center">Value per Unity</th>
								<th class="text-center">Total Value</th>
								<th>&nbsp;</th><!--Codigo para 'espaço' em html-->
							</tr>
						</thead>
						<tbody>
							<tr ng-repeat="produto in produtos">
								<td class="text-center"><img src="img/{{produto.foto_principal}}"></td>
								<td>{{produto.nome_prod_curto}}</td>
								<td class="col-xs-2">
									<div class="input-group">
								     <input type="text" class="form-control" ng-model="produto.qtd_car">
									</div>
								</td>
					
								<td class="text-center">$ {{produto.preco}}</td>
								<td class="text-center">$ {{produto.total}}</td>
								<td class="text-center"><button ng-click="removeAll(produto)" class="btn text-roxo" type="button"><i class="fa fa-close"></i></button></td>
							</tr>
						</tbody>
					</table>

					<div id="calculo-de-frete" class="row">
						<div class="col-sm-8">
							<div class="">
								
							</div>
						</div>
						<div class="col-sm-4">
							<div class="box-cart-totais">
								<table class="table">
									<tr>
										<td>Subtotal ({{produtos.length}} item):</td>
										<td class="text-right">R$ {{carrinho.subtotal}}</td>
									</tr>
									<tr>
										<td>Fees and Taxes:</td>
										<td class="text-right">R$ {{carrinho.frete}}</td>
									</tr>
									<tr style="border-top:#999 1px solid;">
										<td class="text-roxo text-bold">Total:</td>
										<td class="text-roxo text-bold text-right">R$ {{carrinho.total}}</td>
									</tr>
								</table>
							</div>
						</div>
					</div>

					<button type="button" class="btn btn-roxo pull-right" style="margin-top:10px" id="buynow" onclick="location. href='http://localhost/projetotrainee/succeed'">Buy Now</button>

				</div>

			</section>
	</body>
		<?php include_once("footer.php");?>

	<script>
	angular.module("shop", []).controller("cart-controller", function($scope, $http){

	var carregarCarrinho = function(){

		$http({
			method:'GET',
			url:'carrinho-dados',
		}).then(function(response){

			$scope.carrinho = {
				cep:response.data.cep_car,
				subtotal:response.data.subtotal_car,
				frete:response.data.frete_car,
				total:response.data.total_car
			};

			$scope.produtos = response.data.produtos;

		}, function(response){

			console.error(response);

		});

	};

		$scope.addQtd = function(_produto){

			$http({
				method:'POST',
				url:'carrinho-produto',
				data:JSON.stringify({
					id_prod:_produto.id_prod
				})
			}).then(function(response){

				console.log(response);

			}, function(){



			});

		};

		$scope.removeQtd = function(_produto){



		};

		$scope.removeAll = function(_produto){

		$http({
			method:'DELETE',
			url:'carrinhoRemoveAll-'+_produto.id_prod
		}).then(function(response){

			carregarCarrinho();

		}, function(){



		});

		};

		carregarCarrinho();
	});
	</script>
</html>