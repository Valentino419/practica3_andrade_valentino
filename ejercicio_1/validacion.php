<?php

$data = file_get_contents("php://input");//recibe como texto lo enviado al servidor
$items = json_decode($data, true); // Access the array// Decode the JSON data the server recived

function logindb($data) 
{

    $UsuarioGuarado = 'user';
    $contrasenaGuardada = '1234';

    $usuarioRecibido = $data["usuario"];
    $contrasenaRrecibida = $data["contrasena"];
    $estado = false;

    if ($UsuarioGuarado == $usuarioRecibido) {
        if ($contrasenaGuardada == $contrasenaRrecibida) {
            $estado = true;
        } 
    } 
    echo json_encode($estado);
}



header('Content-Type: application/json');
logindb($items);
