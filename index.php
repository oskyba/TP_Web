 <!DOCTYPE html>
 <html lang="es">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style type="text/css">
	#regiration_form fieldset:not(:first-of-type) {
		display: none;
	}
  </style>
  <title>Cuestionario - ESBA 2023</title>
</head>
<body>
<div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4">Collapsed content</h5>
    <span class="text-muted">Toggleable via the navbar brand.</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container d-flex justify-content-center py-5">
	  <span class="text-white"><h1>Bienvenido al cuestionario de perfil usuario: pepe</h1></span>
  </div>
</nav>

  <div class="container center_div">
    <h1></h1>
	<div class="progress">
		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
	
	<form id="regiration_form" novalidate action="resumen.php"  method="post">
	<fieldset>
		<h2>1: Datos personales</h2>
	  <div class="form-group">
		<label for="fName">Nombres</label>
		<input type="text" class="form-control" name="data[fName]" id="fName" placeholder="Nombres">
	  </div>
	  <div class="form-group">
		<label for="lName">Apellido</label>
		<input type="text" class="form-control" name="data[lName]" id="lName" placeholder="Apellido">
	  </div>
		<div class="form-group">
		<label for="email">Correo electronico</label>
		<input type="email" class="form-control" id="email" name="data[email]" placeholder="email@ejemplo.com">
	  </div>
	  <div class="form-group">
		<label for="adress">Direccion</label>
		<textarea  class="form-control" name="data[address]"
			placeholder="Calle numero piso departamento ciudad provincia"></textarea>
	  </div>
		<input type="button" name="next" class="next btn btn-info" value="Siguiente" />
	</fieldset>
	<fieldset>
		<h2> 2: Gustos musicales</h2>
		<div class="form-group">
		<label for="fcheck">Seleccione uno o varios</label>
		<div class="form-check">
  			<input class="form-check-input" type="checkbox" name="musica" value="1" id="flexCheckChecked"/>
  			<label class="form-check-label" for="flexCheckChecked">Rock</label>
		</div>
		<div class="form-check">
 			<input class="form-check-input" type="checkbox" name="musica" value="2" id="flexCheckDefault" />
  			<label class="form-check-label" for="flexCheckDefault">Pop</label>
		</div>
		<div class="form-check">
 			<input class="form-check-input" type="checkbox" name="musica" value="3" id="flexCheckDefault" />
  			<label class="form-check-label" for="flexCheckDefault">Electrónica</label>
		</div>
		<div class="form-check">
 			<input class="form-check-input" type="checkbox" name="musica" value="4" id="flexCheckDefault" />
  			<label class="form-check-label" for="flexCheckDefault">Jazz</label>
		</div>
		<div class="form-check">
 			<input class="form-check-input" type="checkbox" name="musica" value="5" id="flexCheckDefault" />
  			<label class="form-check-label" for="flexCheckDefault">Tango</label>
		</div>
	  </div>
		<input type="button" name="previous" class="previous btn btn-default" value="Atras" />
		<input type="button" name="next" class="next btn btn-info" value="Siguiente" />
	</fieldset>
	<fieldset>
		<h2> 3: Actividades físicas</h2>
		<div class="form-check">
  			<input class="form-check-input" type="radio" name="deporte" id="exampleRadios1" value="option1">
  			<label class="form-check-label" for="exampleRadios1">
			  Atletismo
  			</label>
		</div>
		<div class="form-check">
  			<input class="form-check-input" type="radio" name="deporte" id="exampleRadios2" value="option2">
  			<label class="form-check-label" for="exampleRadios2">
			  Tenis
  			</label>
		</div>
		<div class="form-check">
  			<input class="form-check-input" type="radio" name="deporte" id="exampleRadios3" value="option3">
  			<label class="form-check-label" for="exampleRadios3">
			  Futbol
  			</label>
		</div>
		<div class="form-check">
  			<input class="form-check-input" type="radio" name="deporte" id="exampleRadios4" value="option4">
  			<label class="form-check-label" for="exampleRadios4">
			  Rugby
  			</label>
		</div>
		<div class="form-check">
  			<input class="form-check-input" type="radio" name="deporte" id="exampleRadios5" value="option5">
  			<label class="form-check-label" for="exampleRadios5">
			  Danza aeróbica
  			</label>
		</div>
		<input type="button" name="previous" class="previous btn btn-default" value="Atras" />
		<input type="button" name="next" class="next btn btn-info" value="Siguiente" />
	</fieldset>
	<fieldset>
		<h2>4: Estudios cursados</h2>
		<div class="input-group mb-3">
  			<div class="input-group-prepend">
    			<label class="input-group-text" for="inputGroupSelect01">Nivel de Educación</label>
  			</div>
  			<select class="custom-select"  name="estudios" id="inputGroupSelect01">
    			<option selected>Seleccione...</option>
    			<option value="1">Primario</option>
    			<option value="2">Secundario</option>
    			<option value="3">Terciario</option>
				<option value="4">Universitario</option>
  			</select>
		</div>
		<input type="button" name="previous" class="previous btn btn-default" value="Atras" />
		<input type="submit" name="submit" class="submit btn btn-success" value="Enviar" id="submit_data" />
	</fieldset>
	</form>

	<div class="container my-5">

<footer class="text-center text-lg-start" style="background-color: #db6930;">
  <div class="container d-flex justify-content-center py-5">
  <span class="me-3">Programación Web - ESBA 2023</span>
  </div>

 
  <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
	© Realizado por OskyBA 2023:
	<a class="text-white" href="https://github.com/oskyba">Visite el proyecto en Github</a>
  </div>
 
</footer>

</div>


  </div>
</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
	var current = 1,current_step,next_step,steps;
	steps = $("fieldset").length;
	$(".next").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().next();
		next_step.show();
		current_step.hide();
		setProgressBar(++current);
	});
	$(".previous").click(function(){
		current_step = $(this).parent();
		next_step = $(this).parent().prev();
		next_step.show();
		current_step.hide();
		setProgressBar(--current);
	});
	setProgressBar(current);
	// Change progress bar action
	function setProgressBar(curStep){
		var percent = parseFloat(100 / steps) * curStep;
		percent = percent.toFixed();
		$(".progress-bar")
			.css("width",percent+"%")
			.html(percent+"%");		
	}
});
</script>