<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Modal</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>


<div class="modal fade" id="myModalcad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title text-center" id="myModalLabel">Login</h4>
						</div>
						<div class="modal-body">
							<form method="POST" action="autenticacao.php" enctype="multipart/form-data">
								<div class="form-group ">
									<label for="recipient-email" class="control-label">Email:</label>
									<input name="email" type="email" class="form-control" placeholder="Email">
								</div>
								<div class="form-group ">
									<label for="message-text" class="control-label">senha:</label>
									<input name="password" type="password" class="form-control" placeholder="Senha">
					
								</div>

								<div class="modal-footer ">
									<button type="submit" class="btn btn-success">Enviar</button>
								</div>
	
							</form>
						</div>
					</div>
				</div>
			</div>

			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript">
			
		</script>

	</body>
</html>