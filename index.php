<!doctype html>
<html lang="pt-br">
	<head>
	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>LOGIN NO PORTAL - Colégio Galileu Caçapava</title>


		<!-- bootstrap css e icons -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
	  
		<!-- css manual -->
		<link href="css/cssMain.css" rel="stylesheet">

	</head>



	<body>
	  
		<!-- logo -->
		<div class="container d-flex justify-content-center">
			<img src="img/logo.png" class="col-1">
		</div>

		<!-- corpo principal -->
		<div class="container">
		  
			<!-- colapsar o fomulario de login -->
			<div class="accordion mb-3" id="mostrarForm">
			
				<div class="accordion-item">
			  
					<!--- cabeçalho: ponto de início do forumlário e posição dos botões -->
					<div class="accordion-header">
					
						<!-- deixar o formato e texto dos botões responsívos ao tamanho do display -->
						<!-- os botões fazem o formulario de login aparecer, apenas um a qualquer momento-->
						<div class="d-grid gap-2 d-sm-flex justify-content-sm-evenly text-center mt-3 mb-3">
				
							<button type="button" class="btn btn-dark col-10 mx-auto col-sm-5" data-bs-toggle="collapse" data-bs-target="#loginProf" aria-expanded="false" aria-controls="loginProf">
								<h1><i class="bi bi-book-half"></i>
								<br><span class="d-none d-lg-block align-items-center">ENTRAR COMO</span>PROFESSOR</h1>
							</button>
					  
							<button type="button" class="btn btn-dark  col-10 mx-auto col-sm-5" data-bs-toggle="collapse" data-bs-target="#loginAluno" aria-expanded="false" aria-controls="loginAluno">
								<h1><i class="bi bi-backpack2-fill"></i>
								<br><span class="d-none d-lg-block align-items-center">ENTRAR COMO</span>ALUNO</h1>
							</button>
					  
						</div>
					
					</div>
			  
					<!-- formulatio de login professor -->
					<div id="loginProf" class="accordion-collapse collapse" data-bs-parent="#mostrarForm">
					
						<!-- sistema de "dropdown" do form de login -->
						<div class="accordion-body">
					  
							<!-- professor -->
							<form id="formLoginProf">
							
								<!-- campos de texto -->
								<div class="mb-3">
									<label for="professorCpf" class="form-label">CPF do Professor</label>
									<input name="professorCpf" type="number" class="form-control" id="professorCpf">
								</div>
								
								<div class="mb-4">
									<label for="professorSenha" class="form-label">Senha do Professor</label>
									<input name="professorSenha" type="password" class="form-control" id="professorSenha">
								</div>
								
								<!-- input usado para determinar qual formulario esta sendo preenchido -->
								<input type="hidden" name="action" id="action" value="loginProfessor">
								
								<!-- botão pra logar -->
								<div class="container d-flex justify-content-center mb-2">
									<button type="button" class="btn btn-primary col-9" id="entrarProf">Entrar como professor</button>
								</div>
								
							</form>
						</div>
					  
					</div>
			  
					<!-- formulatio de login aluno -->
					<div id="loginAluno" class="accordion-collapse collapse" data-bs-parent="#mostrarForm">
					
						<!-- sistema de "dropdown" do form de login -->
						<div class="accordion-body">
					  
							<!-- aluno -->
							<form id="formLoginAluno">
							
								<!-- campos de texto -->
								<div class="mb-3">
									<label for="alunoCpf" class="form-label">CPF do Aluno</label>
									<input name="alunoCpf" type="number" class="form-control" id="alunoCpf">
								</div>
								
								<div class="mb-4">
									<label for="alunoSenha" class="form-label">Senha do Aluno</label>
									<input name="alunoSenha" type="password" class="form-control" id="alunoSenha">
								</div>
								
								<!-- input usado para determinar qual formulario esta sendo preenchido -->
								<input type="hidden" name="action" value="loginAluno">
								
								<!-- botão pra logar -->
								<div class="container d-flex justify-content-center mb-2">
									<button type="button" class="btn btn-primary col-9" id="entrarAluno">Entrar como aluno</button>
								</div>
								
							</form>
							
						</div>
					  
					</div>
				
				</div>
			  
			</div>
		
			<!-- alert em caso de erro de login -->
			<div class="form-control" id="erro">
				<p class="mt-3 text-center fs-4 fw-bolder" id="erroMensagem"></p>
			</div>
			
		</div>
	  
		<!-- javascript, colocado no fim do body pra acelerar o carregamento da página -->
		<!-- bootstrap js -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
	
		<!-- jquery -->
		<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
		
		<!-- js manual -->
		<script src="js/javascript.js"></script>

	</body>
</html>