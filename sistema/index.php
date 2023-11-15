<?php 
	require_once("conexao.php"); 

	$senha_crip = md5('123'); //Criptografia

	//CREAR UM UARIO ADMIN CASO NAO EXITA.
	$query = $pdo->query("SELECT * FROM usuarios where nivel='admin' ");
	$res = 	$query->fetchAll(PDO::FETCH_ASSOC); // $res->
	$total_reg = @count($res);
	// echo($total_reg);
	// exit;
	if($total_reg == 0){
		$pdo->query("INSERT INTO usuarios SET nome = 'Admin', bi='000.000.000-00', email='elton37muhanzule@gmail.com', senha_crip='$senha_crip', senha='123', nivel='admin' ");
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--  modo mabile -->

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="icon" type="image/png" sizes="16x16" href="painel/plugins/images/favicon.png">

	<title><?php echo $nome_site ?></title>
</head>
<body>

	<section class="vh-100" style="background-color: #727a87;">
		<div class="container py-5 h-100">				
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col col-xl-10">
					<div class="card" style="border-radius: 1rem;">
						<div class="row g-0">
							<div class="col-md-6 col-lg-5 d-none d-md-block">
								<img src="imagens/img_imob_log.png"
								alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
							</div>
							<div class="col-md-6 col-lg-7 d-flex align-items-center">
								<div class="card-body p-4 p-lg-5 text-black">

									<form>

										<div class="d-flex align-items-center mb-3 pb-1">
											<i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
											<span class="h1 fw-bold mb-0"><img src="imagens/logo.png" width="50%"></span>
										</div>

										<!-- <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Acessar a sua Conta</h5> -->

										<div class="form-outline mb-4">
											<input type="text" id="email" name="usuario" class="form-control form-control-lg" required />
											<label class="form-label" for="form2Example17"><small>Conta de Email</small></label>
										</div>

										<div class="form-outline mb-4">
											<input type="password" id="senha" name="senha" class="form-control form-control-lg" required />
											<label class="form-label" for="form2Example27"><small>Senha</small></label>
										</div>

										<div class="pt-1 mb-4">
											<button class="btn btn-dark btn-lg btn-block" type="button">Login</button>
										</div>

										<a class="small text-muted" href="#" data-bs-toggle="modal" data-bs-target="#modalRecuperar">Recuperar Senha?</a>
										<!-- <p class="mb-5 pb-lg-2" style="color: #393f81;">Tens Alguma Conta? <a href="#!"
											style="color: #393f81;">Registre aqui</a></p> -->
										</form>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

	</body>
	</html>


	<!-- Modal de recuperar senha-->
	<div class="modal fade" id="modalRecuperar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Recuperar Senha</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<form id="form-recuperar" method="POST">
					<div class="modal-body">

						<input type="email" id="email" name="email" placeholder="Digite seu Email" class="form-control form-control-sm" required />
						<!-- <input type="password" id="senha" name="novaSenha" placeholder="Nova Senha" class="form-control form-control-sm" required />
						<input type="password" id="senha2" name="novaSenha2" placeholder="ConfirmarSenha" class="form-control form-control-sm" required /> -->

					</div>
					<div class="modal-footer">
						<!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button> -->
						<button type="submit" class="btn btn-primary">Recuperar</button>
					</div>
				</form>
			</div>
		</div>
	</div>