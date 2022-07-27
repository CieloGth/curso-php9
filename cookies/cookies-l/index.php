<?php

// setcookie(
//     name: "header_color",
//     value: "#9100ff"
// // "#12373d"
// // "#121f3d"
// );

// $color = $_COOKIE["header_color"] ?? "#12373d";
$color = $_COOKIE["header_color"] ?? "#121f3d";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Cookies de logo</title>
</head>
<body>
    <header style="background: <?= $color ?>">
        <img src="logo.webp" alt="Platzi">
    </header>
</body>
</html>