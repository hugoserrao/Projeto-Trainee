<!DOCTYPE html>
<html>
	<head>
		<title>Candy Land</title>
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/login.css">	
	</head>
	<body>
		
		<?php
			include_once("header.php");
		?>
		
		<section>		
				<div class="col-md-6">
					<form method="POST" action="form.php">
						<div id="formlogin">
							<h2 id="login">LoGin :
							</h2>
							<div class="form-group" id="caixadeemaillogin">
								<label for="email">E-mail</label>
								<input type="email" name="email" id="email" class="form-control" placeholder="candy@land.com" required tabindex="2">
							</div>
							<div id="caixadesenhalogin">
								<label for="email">Password</label>
								<input type="password" name="senha" id="senha" class="form-control">
							</div>
								<button type='submit' class="btn btn-primary form-control" id="entrarlogin">Enter</button>
								<button type='button' class="btn btn-info form-control" id="registrarlogin" onclick="location. href='http://localhost/projetotrainee/register'">No account yet?</button>	
						</div>		
				</div>
				<div class="col-md-6" id="bannerlogin">
						<img src="img/gummybearbolado.jpg" id="cobradegelatinalogin" class="thumbnail">

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