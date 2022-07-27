<?php
    
    if (!isset($_COOKIE["ejemplo"])){
        setcookie(
            name:"ejemplo",
            value:"es un michi",
            expires_or_options:time()+ 110,
            // expires_or_options:time()+ 60, #60 segundos
            // expires_or_options:time()+ 60 * 60, #1 hora
            // expires_or_options:time()+ 60 * 60 * 24, #1 dia
            // expires_or_options:time()+ 60 * 60 * 24 * 7, #1 semana
            // expires_or_options:time()+ 60 * 60 * 24 * 30, #30 dias
            path:"/",#solo disponible en una path especifica
            domain: "localhost",
            secure: false, #true solo si tiene https
            httponly: false, #true para que sea accesible a lenguajes scripting
        );
    
        echo "¡Cookie creada!";
    }

    echo "<pre>";
    var_dump($_COOKIE);
    echo "</pre>";

?>