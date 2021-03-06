<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= CSS ?>viagens.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<title>Viagens</title>
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Menu</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
		  <li class="nav-item active">
            <a class="nav-link btn btn-success" onclick="criar()">Criar viagem</a>
          </li>
        </ul>
		<button class="btn btn-outline-success my-2 my-sm-0" type="button">Sair</button>
      </div>
    </nav>

    <main role="main">

      <!-- Principal jumbotron, para a principal mensagem de marketing ou call to action -->
      <div class="jumbotron alerta-ausente" id="jumbotron">
        <div class="container" id='boas-vindas'>
          <h1 class="display-6">ATENÇÃO</h1>
          <p><strong>X</strong> pessoas ausentes!</p>
        </div>
		
		<div class="container" id='form-excluir-viagem' style="display:none;">
          	<h1 class="display-6">Excluir viagem</h1>
          	<form method='post' action="">
				<input type="text" id="chave" name="id" hidden="true">
				<p>Tem certeza que deseja excluir (<strong id="e-identificador"></strong> | <strong id="e-chave"></strong>)?</p>
				<button type="submit" class="btn btn-primary" onclick="excluir()">Sim</button>
				<button type="button" class="btn btn-dark" onclick="ocultarForm()">Não</button>
			</form>
        </div>
      </div>

      <div class="container">
        <!-- Exemplo de linha de colunas -->
        <div class="row">
          <div class="col-md-12">
            <h2>Viagens que você gerência:</h2>
			<div class="table-responsive-sm">
				<table class="table table-striped">
					<thead>
					<tr>
						<th>Id</th>
						<th>Nome Pessoa</th>
						<th>CPF</th>
						<th>Status</th>
						<th>Ações</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>111</td>
						<td>Fulano de tal</td>
						<td>000.000.000-00</td>
						<td class="presente" >Presente</td>
						<td>
							<button 
								class="btn btn-sm btn-outline-danger"
								type="button"
								onclick="editar(this)"
								data-idPessoa='111'
								data-Status='Ausente'>
								Ausente
							</button>
							<button 
								class="btn btn-sm btn-outline-success" 
								type="button"
								onclick="exibirExcluir(this)"
								data-idPessoa='111'
								data-Status='Presente'>
								Presente
							</button>
						</td>
					</tr>
					<tr>
						<td>111</td>
						<td>Fulano de tal</td>
						<td>000.000.000-00</td>
						<td class="presente">Presente</td>
						<td>
							<button 
								class="btn btn-sm btn-outline-danger"
								type="button"
								onclick="editar(this)"
								data-idPessoa='111'
								data-Status='Ausente'>
								Ausente
							</button>
							<button 
								class="btn btn-sm btn-outline-success" 
								type="button"
								onclick="exibirExcluir(this)"
								data-idPessoa='111'
								data-Status='Presente'>
								Presente
							</button>
						</td>
					</tr>
					<tr>
						<td>111</td>
						<td>Fulano de tal</td>
						<td>000.000.000-00</td>
						<td class="ausente">Ausente</td>
						<td>
							<button 
								class="btn btn-sm btn-outline-danger"
								type="button"
								onclick="editar(this)"
								data-idPessoa='111'
								data-Status='Ausente'>
								Ausente
							</button>
							<button 
								class="btn btn-sm btn-outline-success" 
								type="button"
								onclick="exibirExcluir(this)"
								data-idPessoa='111'
								data-Status='Presente'>
								Presente
							</button>
						</td>
					</tr>
					</tbody>
				</table>
			<div>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; <a href="http://micaelferreira.com.br">Micael Ferreira</a> 2019-2020</p>
    </footer>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?= JS ?>viagens.js"></script>
  </body>
</html>