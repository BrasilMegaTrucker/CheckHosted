<html>
	<head>
		<title>Checagem: Hosted</title>		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
			<div class="col-md-12">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h2>Checar Hosted</h2>
					</div>
					<div class="panel-body">
						<?php
							
							if(isset($_POST['check'])) {																					  								
								$get = file_get_contents("http://{$_SERVER["HTTP_HOST"]}{$_SERVER["REQUEST_URI"]}check.php?ip={$_POST['ip']}&versao={$_POST['vs']}");
								if($get == 'HOSTED') echo '<div class="alert alert-info">O Servidor <strong>'.$_POST['ip'].'</strong> está em <span class="label label-default">HOSTED</span>.</div>';
								else echo '<div class="alert alert-danger">O Servidor <strong>'.$_POST['ip'].'</strong> não está em <span class="label label-default">HOSTED</span>. Verifique a versão do servidor.</div>';																
							}
							
						?>
						<form name="check" method="post" action="" class="form-horizontal">
							<div class="form-group">
								<div class="col-md-6">
									<div class="input-group">
										<div class="input-group-addon">IP</div>									
										<input type="text" name="ip" required class="form-control" placeholder="IP:Porta">						
									</div>
								</div>
								<div class="col-md-3">
									<div class="input-group">
										<div class="input-group-addon">Versão</div>
										<select name="vs" class="form-control">
											<option value="0.3.7">0.3.7</option>
											<option value="0.3.6">0.3z</option>
											<option value="0.3.5">0.3x</option>
										</select>
									</div>
								</div>
								<div class="col-md-3">
									<button type="submit" name="check" class="btn btn-default btn-block">Checar</button>
								</div>
							</div>
						</form>
					</div>
					<div class="panel-footer">
						Página criada por Brasil Mega Trucker. Vefificação do Hosted consultada diretamente pelo servidor da SA-MP Team.
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
