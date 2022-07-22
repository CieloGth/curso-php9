<?php
    session_start();

    $users = [
        array(
            "username" => "Prueba",
            "email" => "prueba@email.com"
        ),
        array(
            "username" => "Admin",
            "email" => "admin@email.com"
        ),
        array(
            "username" => "Maria",
            "email" => "maria@email.com"
        ),
        array(
            "username" => "Admin",
            "email" => "cielo@email.com"
        ),
    ];

    $user = $_GET["user"] ?? "";

    $_SESSION["id"] = $user;
    $_SESSION["username"] = $users[$user]["username"];
    $_SESSION["email"] = $users[$user]["email"];

    // http://localhost:8080/curso-php9/sesiones/login.php?user=0
    // http://localhost:8080/curso-php9/sesiones/login.php?user=1