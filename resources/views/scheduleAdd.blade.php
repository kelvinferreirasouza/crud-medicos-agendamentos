<!DOCTYPE HTML>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<title>
		Teste
	</title>
</head>

<body>
	<div class="container form-content">
		<div class="card main-form" id="login-form">
			<div class="card-header">
				<h3> Adicionar Horário </h3>
			</div>
			<div class="card-body">
                <form class="form row" role="form" autocomplete="off" id="formLogin" method="post" action="{{route ('saveSchedule', Auth::user()->id)}}">
                    {{ csrf_field() }}
					<div class="form-group col-md-6">
						<label for="nome">Adicionar:</label>
                        <input type="datetime-local" class="form-control" name="date" required>
					</div>
					
					<input type="hidden" name="form-submitted" value="1">
                    <input type="submit" value="Adicionar" class="btn btn-success btn-lg col-md-6">
                    <button type="button" onclick="location.href='index.php'" class="btn btn-light btn-lg col-md-6">Cancelar</button>
				</form>
			</div>
		</div>
	</div>
</body>

</html>