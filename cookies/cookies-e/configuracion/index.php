<?php

setcookie(
    name:"rango",
    value:"deberia estar disponible solamente en una carpeta llamada config",
    expires_or_options:time()+ 110,
    path:"/curso-php9/cookies/cookies-e/configuracion/",
    domain: "localhost",
);

echo "<pre>";
var_dump($_COOKIE);
echo "</pre>";
?>