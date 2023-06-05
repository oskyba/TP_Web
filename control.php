<?php $msg = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $password = md5($_POST["password"]);
	 if ($name == '' || $password == '') {
        $msg = "Debes ingresar todos los campos";
    } else {

        if ($name == 'pepe' && $password == md5('12345678')) {
            header('location: index.php');
            exit;
        }

        $msg = "Nombre de usuario o contraseña incorrecto";
    }
}
?>