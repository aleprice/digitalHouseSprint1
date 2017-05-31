<?php

$filename = 'usuarios.json';
$usuario = [];
function pre($data) {
    echo '<pre>';print_r($data);echo '</pre>';
}

function validarCampoPost($campo) {
    return isset($_POST[$campo]) && strlen($_POST[$campo]);
}

function getUsuarios($filename) {
    if (file_exists($filename)) {
        return json_decode(file_get_contents($filename),true);
    }
    return [];
}

function existeUsuario($filename,$email) {
    if (file_exists($filename)) {
        $usuarios = getUsuarios($filename);
        foreach ($usuarios as $key => $usuario) {
            if ($usuario['email'] == $email) {
                return true;
            }
        }
    }
    return false;
}

function crearUsuario($filename,$usuario) {
    $usuarios = getUsuarios($filename);
    $usuario['id'] = count($usuarios) + 1;
    array_push($usuarios,$usuario);
    file_put_contents($filename,json_encode($usuarios));
    return $usuario;
}

// Iniciamos sessión
session_start();

/*
pre("POST");
pre($_POST);

pre("POST");
pre($_POST);

pre("SESSION");
pre($_SESSION);
*/

$paises = [
    'Argentina',
    'Brasil',
    'Uruguay',
    'Chile',
    'Bolivia',
    'Colombia',
    'Venezuela'
];

$name = validarCampoPost('name') ? $_POST['name'] : '';
$pais = isset($_POST['pais']) && in_array($_POST['pais'], $paises) ? $_POST['pais'] : '';
$email = validarCampoPost('email') ? $_POST['email'] : '';
$password = validarCampoPost('password') ? $_POST['password'] : '';
$rePassword = validarCampoPost('rePassword') ? $_POST['rePassword'] : '';

$errores = [];

if ($name && $pais && $email && $password && $rePassword && $password == $rePassword ) {

    pre("formulario registro completo");
    $password = password_hash($password,PASSWORD_DEFAULT);

    if (!existeUsuario($filename,$email)) {
        $usuario = [
            'name'=>$name,
            'pais'=>$pais,
            'email'=>$email,
            'password'=>$password
        ];
        $usuario = crearUsuario($filename,$usuario);
        //header("Location: login.php");
        exit();
    } else {
        array_push($errores, "usuario existente");
    }


} else if (validarCampoPost('submit')) {
    array_push($errores, "hay campos sin completar");
}


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Contact us</title>
    </head>
    <body>

        <h1><?php if (count($errores)) { echo join("<br>",$errores); } ?></h1>

        <form id='register' action='' method='POST'>
            <fieldset >
                <legend>Registro de usuario</legend>

                <div><span class='error'></span></div>

                <h3>Información de autenticación</h3>
                <div class='container'>
                    <label for='email' >Email: </label><br/>
                    <input type='mail' name='email' id='email' value="<?= $email?>" maxlength="50" /><br/>
                </div>
                <div class='container'>
                    <label for='password' >Password: </label><br/>
                    <input type='password' name='password' id='password' value="<?= $password?>" maxlength="50" /><br/>
                </div>
                <div class='container'>
                    <label for='rePassword' >Confirmar: </label><br/>
                    <input type='password' name='rePassword' id='rePassword' value="<?= $rePassword?>" maxlength="50" /><br/>
                </div>              


                <h3>Información Personal</h3>
                <div class='container'>
                    <label for='name' >Nombre completo: </label><br/>
                    <input type='text' name='name' id='name' value="<?= $name?>" maxlength="50" /><br/>
                </div>               
                <div class='container'>
                    <label for='pais' >Pais:</label><br/>
                    <select name="pais" id="pais">
                        <option name="0" value="0" <?= !$pais ? 'selected':''?>>Selecciona pais</option>
                        <?php foreach ($paises as $key => $paisEnArray): ?>
                            <option name="<?= $paisEnArray ?>" value="<?= $paisEnArray ?>" <?= $pais == $paisEnArray ? 'selected':''?> ><?= $paisEnArray ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class='container' style="margin-top: 40px;">
                    <input type='submit' name='submit' value='Enviar' />
                </div>

            </fieldset>
        </form>

    </body>
</html>