<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<title>Viagens</title>
	<style>
		@media (min-width: 576px){
			.jumbotron {
			margin-top: 58px;
			}
		}
		.jumbotron {
			margin-top: 58px;
		}
	</style>
	<script>
		function exibirForm(){
			document.getElementById('boas-vindas').style.display = 'none';
			document.getElementById('form-viagem').style.display = 'block';

		}
		function ocultarForm(){
			document.getElementById('boas-vindas').style.display = 'block';
			document.getElementById('form-viagem').style.display = 'none';
		}
		function limparForm(){
			document.getElementById('identificador').value="";
			document.getElementById('destino').value="";
			document.getElementById('chave').value="";
		}
		function criar() {
			document.getElementById('titulo').innerHTML = 'Criar Viagem';
			document.getElementById('enviar').innerHTML = 'Criar';
			exibirForm();
		}
		function editar(viagem) {
			document.getElementById('identificador').value=viagem.getAttribute("data-identificador");
			document.getElementById('destino').value=viagem.getAttribute("data-destino");
			document.getElementById('chave').value=viagem.getAttribute("data-chave");
			
			document.getElementById('titulo').innerHTML = 'Editar Viagem';
			document.getElementById('enviar').innerHTML = 'Editar';
			
			exibirForm();
		}
		function exibirExcluir(viagem){
			document.getElementById('boas-vindas').style.display = 'none';
			document.getElementById('form-excluir-viagem').style.display = 'block';
			//excluir(viagem);
		}
		function ocultarExcluir(){
			document.getElementById('boas-vindas').style.display = 'block';
			document.getElementById('form-excluir-viagem').style.display = 'none';
		}
		function excluir(viagem) {
			ocultarExcluir();
		}
	</script>
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
      <div class="jumbotron">
        <div class="container" id='boas-vindas'>
          <h1 class="display-6">Olá, organizador(a)</h1>
          <p>Gerencie aqui suas viagens. Nunca mais alguém será esquecido!</p>
        </div>
		<div class="container" id='form-viagem' style="display:none;">
          <h1 id='titulo' class="display-6">Criar viagem</h1>
		  	<div class="alert alert-success">
				<strong>Sucesso!</strong> Compartilhe o link para que seus colegas participem da chamada: <br><strong>http://fdv.micaelferreira.com.br/viagens/87a9sd12092394jkls</strong>
			</div>
          	<form method='post' action="">
				<input type="text" id="chave" name="id" hidden="true">
				<div class="form-group">
					<label for="identificador">Indentificador</label>
					<input type="text" class="form-control" id="identificador" placeholder="Solte a criatividade" name="identificador">
				</div>
				<div class="form-group">
					<label for="destino">Destino</label>
					<input type="text" class="form-control" id="destino" placeholder="A cidade/bairro/evento de destino" name="destino">
				</div>
				<div class="form-group form-check">
					<label class="form-check-label">
						<input class="form-check-input" type="checkbox" name="aviso"> Eu declaro que o criador deste sistema está livre de quaisquer responsabilidades decorrentes desta viagem.
					</label>
				</div>
				<button id='enviar' type="submit" class="btn btn-primary" onclick="limparForm()">Criar</button>
				<button type="button" class="btn btn-dark" onclick="ocultarForm()">Fechar</button>
			</form>
        </div>
		<div class="container" id='form-excluir-viagem' style="display:none;">
          	<h1 class="display-6">Excluir viagem</h1>
          	<form method='post' action="">
				<input type="text" id="chave" name="id" hidden="true">
				<p>Tem certeza que deseja excluir (<strong id="e-identificador"></strong> | <strong id="e-chave"></strong>)?</p>
				<button type="submit" class="btn btn-primary" onclick="excluir()">Sim</button>
				<button type="button" class="btn btn-danger" onclick="ocultarForm()">Não</button>
			</form>
        </div>
      </div>

      <div class="container">
        <!-- Exemplo de linha de colunas -->
        <div class="row">
          <div class="col-md-12">
            <h2>Viagens que você gerência:</h2>
            <table class="table table-striped">
				<thead>
				<tr>
					<th>Identificador</th>
					<th>Destino</th>
					<th>Chave</th>
					<th>Ações</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>Os Paidégua - Quixadá</td>
					<td>Fortaleza</td>
					<td>4h25rfg233dg</td>
					<td>
						<button class="btn btn-sm btn-outline-primary" type="button">Chamada</button>
						<button 
							class="btn btn-sm btn-outline-warning"
							type="button"
							onclick="editar(this)"
							data-identificador='Os Paidégua - Quixadá'
							data-destino='Fortaleza'
							data-chave='4h25rfg233dg'>
								Editar
						</button>
						<button class="btn btn-sm btn-outline-danger" type="button">Excluir</button>
					</td>
				</tr>
				<tr>
					<td>Cabra do bom - Russas</td>
					<td>Belém</td>
					<td>35thg2h5u55</td>
					<td>
						<button class="btn btn-sm btn-outline-primary" type="button">Chamada</button>
						<button 
							class="btn btn-sm btn-outline-warning"
							type="button"
							onclick="editar(this)"
							data-identificador='Cabra do bom - Russas'
							data-destino='Belém'
							data-chave='35thg2h5u55'>
								Editar
						</button>
						<button 
							class="btn btn-sm btn-outline-danger" 
							type="button"
							onclick="exibirExcluir(this)"
							>Excluir</button>
					</td>
				</tr>
				<tr>
					<td>Os Cangaceiros - Russas</td>
					<td>Vitória</td>
					<td>f1234dfa3g</td>
					<td>
						<button class="btn btn-sm btn-outline-primary" type="button">Chamada</button>
						<button 
							class="btn btn-sm btn-outline-warning"
							type="button"
							onclick="editar(this)"
							data-identificador='Os Cangaceiros - Russas'
							data-destino='Vitória'
							data-chave='f1234dfa3g'>
								Editar
						</button>
						<button class="btn btn-sm btn-outline-danger" type="button">Excluir</button>
					</td>
				</tr>
				</tbody>
			</table>
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
  </body>
</html>