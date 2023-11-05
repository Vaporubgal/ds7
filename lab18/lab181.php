<?php

function verificar_email($email) {
    return preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email);
}

function verificar_password_strength($password) {
    return preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $password);
}

function verificar_ip($ip) {
    return preg_match("/^([1-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])(\.([0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])){3}$/", $ip);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $ip = $_POST['ip'];


    if (empty($nombre) || empty($apellido) || empty($email) || empty($password) || empty($confirm_password) || empty($ip)) {
        echo "Todos los campos son requeridos.";
    } else {

        if (!verificar_email($email)) {
            echo "El email no es válido.";
        } else {
    
            if (!verificar_password_strength($password)) {
                echo "La contraseña no es segura.";
            } else {
           
                if ($password !== $confirm_password) {
                    echo "Las contraseñas no coinciden.";
                } else {
                   
                    if (!verificar_ip($ip)) {
                        echo "La dirección IP no es válida.";
                    } else {
                       
                        echo "Usuario registrado exitosamente";
                    }
                }
            }
        }
    }
}
?>
