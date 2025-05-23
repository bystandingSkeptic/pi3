<?php

	session_start();
	require "php/conexao.php";
	$conn = conectar();

?>

<!doctype html>
<html land="pt-br">
	<head>
	
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Registrar notas - PORTAL DO PROFESSOR Colégio Galileu Caçapava</title>

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
    
		<!-- barra de navegacao -->
		<nav class="navbar navbar-expand-md sticky-top bg-dark" data-bs-theme="dark">
			
			<div class="container-fluid">
        
				<!-- botao de colapso em telas menores -->
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navegacao" aria-controls="navegacao" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
		  
				<!-- botão de lougout -->
				<button type="button" class="btn btn-light order-md-last" id="userLogout">Sair</button>
        
				<!-- a barra em si -->
				<div class="collapse navbar-collapse justify-content-md-center" id="navegacao">
				  
					<ul class="navbar-nav navbar-nav-scroll col-md-10 justify-content-md-evenly" style="--bs-scroll-height: 100px;">
            
						<li class="nav-item">
							<a href="professorMain.php" class="nav-link" aria-current="page">Painel</a>
						</li>
						
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Alterar dados</a>
						  
							<ul class="dropdown-menu">
							
								<li><a href="professorAltProf.php" class="dropdown-item">Seus dados</a></li>
								<li><a href="professorAltAluno.php" class="dropdown-item">Dados de aluno</a></li>
								
							</ul>
						</li>
            
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Cadastrar</a>
						  
							<ul class="dropdown-menu">
							
								<li><a href="professorCadAluno.php" class="dropdown-item">Aluno</a></li>
								<li><a href="professorCadProf.php" class="dropdown-item">Professor</a></li>
								
							</ul>
						</li>
						
						<li class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle active" role="button" data-bs-toggle="dropdown" aria-expanded="false">Notas</a>
						  
							<ul class="dropdown-menu">
							
								<li><a href="professorNota.php" class="dropdown-item">Visualizar</a></li>
								<li><a href="professorCadNota.php" class="dropdown-item active">Registrar</a></li>
								
							</ul>
						</li>
            
					</ul>
          
				</div>
        
			</div>
		</nav>
		
		<!-- selecao de classe e aluno -->
		<div class="container-fluid d-flex justify-content-center col-11 col-lg-10">
			<div class="form-control mt-3">
				<div class="row container-fluid d-flex justify-content-center">
					<div class="col-5">
						<select name="notaClasse" id="notaClasse" class="form-select">
							<?php
							
								// retorna uma lista de todas as series cadastradas
								$query = "SELECT * FROM serie";
								$result = $conn->query($query);
								
								echo "<option selected='selected' value=null disabled>Selecione uma classe</option>";
							
								// cria uma lista das series EXCETO maternal ja que nao tem nota
								while($row = $result->fetch_assoc()){
									if (!str_contains($row['classe'], 'E')){
										echo "<option value='".$row['classe']."'>".$row['classe']."</option>";
									}
								}
							?>
						</select>
					</div>
						
					<!-- alunos da serie selecionada -->
					<div class="col-5">
						<select name="notaAluno" id="notaAluno" class="form-select">
							
							
							
						</select>
					</div>
				</div>
			</div>
		</div>
		
		<!-- info -->
		<div class="container d-block d-lg-flex justify-content-evenly mt-3 mb-3 form-control">
			<div class="row container-fluid justify-content-center">
				<div class="col-12 col-lg-5 mb-3 mt-3">
					<!-- user info -->
					<div class="col-12 col-lg-5 form-control text-start fs-4 mb-3">
						<span class='text-uppercase'>cpf: </span><span class='text-uppercase' name="notaCpf" id="notaCpf">?</span><br>
						<span class='text-uppercase'>nome: </span><span class='text-uppercase' name="notaNome" id="notaNome">?</span><br>
						<span class='text-uppercase'>nascimento: </span><span class='text-uppercase' name="notaNascimento" id="notaNascimento">?</span><br>
						<span class='text-uppercase'>gênero: </span><span class='text-uppercase' name="notaGenero" id="notaGenero">?</span><br>
						<span class='text-uppercase'>classe: </span><span class='text-uppercase' name="nota2Classe" id="nota2Classe">?</span><br>
					</div>
				</div>
				
				<div class="col-12 col-lg-5 mb-3 mt-3">
					<!-- formulario -->
					<div class="col-12">
						<form class="form-control" id="formNota">
							<input value="" name="nota2Cpf" id="nota2Cpf" class="d-none">
							
							<input value="<?php echo $_SESSION['cpf'] ?>" name="notaProf" id="notaProf" class="d-none">
							
							<select name="notaMateria" id="notaMateria" class="form-select mb-3 mt-3">
								<?php
								
									// retorna uma lista das materias cadastradas
									$query = "SELECT * FROM materia";
									$result = $conn->query($query);
									
									echo "<option selected='selected' value=null disabled>Matéria</option>";
								
									while($row = $result->fetch_assoc()){
										echo "<option class='text-capitalize' value='".$row['nome']."'>".$row['nome']."</option>";
									}
								?>
							</select>
							
							<select name="notaBim" id="notaBim" class="form-select mb-3">
								<?php
									// retorna uma lista de 1o a 4o bimestre
									echo "<option selected='selected' value=null disabled>Bimestre</option>";
									
									for($i = 1; $i <= 4; $i++){
										echo "<option class='text-capitalize' value='".$i."'>".$i."º</option>";
									}
								?>
							</select>
							
							<select name="notaValor" id="notaValor" class="form-select mb-3">
								<?php
									// retorna uma lista de notas de 0 a 10
									echo "<option selected='selected' value=null disabled>Valor</option>";
									
									for($i = 0; $i <= 10; $i++){
										echo "<option class='text-capitalize' value='".$i."'>".$i."</option>";
									}
								?>
							</select>
							
						</form>
						
						
						
					</div>
					
				</div>
				
				<!-- botão pra alterar os dados -->
				<div class="row container-fluid d-flex justify-content-center mb-3 mt-2">
					<button type="button" class="btn btn-primary col-10 col-lg-6" id="notaCad">Registrar nota</button>
				</div>
			
			</div>
		</div>
		
		
		
		<!-- alert em caso de preenchimento incorreto -->
		<div class="container-fluid d-flex justify-content-center col-11 col-lg-10">
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