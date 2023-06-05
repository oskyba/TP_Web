<?php include_once("control.php") ?>
<!-- ^ is the only PHP you will need to include a separate PHP file -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Examen Parcial - ESBA 2023</title>
<meta name="description" content=""/>
<meta name="keywords" content=""/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<form class="form-horizontal"  name="frmlogin"action="<?= $_SERVER['PHP_SELF'] ?>" method="post" >
	<div class="container center_div">
		<table class="form" border="0">

			<tr>
			<td></td>
				<td style="color:red;">
				<?php echo $msg; ?></td>
			</tr> 
			
			<tr>
				<label for="name">Usuario</label>
				<input type="text" class="form-control" name="name" id="name" placeholder="Ingrese usuario del sistema" size="30" >
			</tr>
			<tr>
				<label for="name">Contraseña:</label>
				<input type="password" class="form-control" name="password" id="password" placeholder="Ingrese la contraseña">
			</tr>
			<tr>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
    			<p class="mt-5 mb-3 text-muted text-center">&copy; Realizado por OskyBA 2021-2023</p>
			</tr>
		</table>
	</div>
	</form>

<div style="line-height: 30px; margin-left: 307px;"><b>Usuario:</b> pepe <br/><b>Contraseña:</b> 12345678 </div>
</body>
</html>
