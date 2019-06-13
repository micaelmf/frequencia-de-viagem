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

<section>
      	<div class="container jumbotron">
        <!-- Exemplo de linha de colunas -->
			<div class="row align-items-center">
				<div class="col-xs-12 col-md-3">
				<h4> Como usar? </h4>
				<p>Presente: para quando você estive DENTRO do ônibus durante achamada</p>
				<p>Ausente: para quando você estive FORA do ônibus durante a chamda</p>
				<p>Alerta: para quando você sentir falta de alguém.</p>
				</div>
				<div class="col-xs-12 col-md-9">
					<button class="btn btn-block btn-success">Presente</button>
					<button class="btn btn-block btn-warning">Ausente</button>
					<button class="btn btn-block btn-danger">Alerta!</button>
				</div>
			</div>
		</div>
   
</section>
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