<!DOCTYPE html>
<html>
	<head>
		<title>Candy Land</title>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/registro.css">	
	</head>


	<body>
		<?php
			include_once("header.php");
		?>
		<!--Adicionar formulário para receber data de validade e código de segurança do cartão de crédito junto da rota para salvar esses dados ao banco de dados-->
		<section>		
				<div class="col-md-6">
					<form method="POST" action="form.php">
							<h2 id="registro">RegiSter :
							</h2>
						<div id="formregistro">
							<div class="form-group" >
								<label for="email">E-mail</label>
								<input type="email" name="email" id="email" class="form-control" placeholder="candy@land.com" required tabindex="2" autofocus>
							</div>
							
							<div id="caixadesenharegistro form-group">
								<label for="senha">Password</label>
								<input type="password" name="senha" id="senha" class="form-control" required>
								<label for="senhaconfirma">Confirm Password</label>
								<input type="password" name="senhaconfirma" id="senhaconfirma" class="form-control" required>
							</div>
							<div class="form-group">
							
								<label for="agree">I agree with terms of use</label>
			
								<input type="checkbox" name="agree" id="agree" required checked>
							</div>
						</div>
						<div class="input-group" id="credictcardregistro">
						      <div class="input-group-btn">
						        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Credict Card <span class="caret"></span></button>
						        <ul class="dropdown-menu">
						        <!--INSERIR SISTEMA DE ARMAZENAMENTO DE QUE TIPO DE CARTÃO DE CRÉDITO ELE ESTÁ ESCOLHENDO-->
						          <li><a href="#">MasterCard</a></li>
						          <li><a href="#">Visa</a></li>
						          <li><a href="#">American Express</a></li>
						          <li><a href="#">Sodexo</a></li>
						          <li><a href="#">Diners</a></li>
						          <li><a href="#">Hypercard</a></li>
						        </ul>
						      </div><!-- /btn-group -->
						      <input type="text" class="form-control" placeholder= "Numbers only" aria-label="...">
						</div><!-- /input-group -->
						<button type="submit" class="btn btn-info" id="submitregister"> Submit </button>		
				</div>
				<div class="col-md-6" id="bannerregistro">
						<img src="img/gummybearbolado2.jpg" id="ursodegelatinaregistro" >

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