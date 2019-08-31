<?php
session_start();

//requiriendo modulos
include "php/model/model.php";
include "php/validatingsession.php";
include "views/panel.php";
include "urlsmessages/emptycamps.php";
include "urlsmessages/errorimages.php";
include "urlsmessages/postarticles.php";
include "views/showarticles.php";

?>
<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs</title>
    <link rel="stylesheet" href="public/css/validation.css">
    <link rel="stylesheet" href="fontawesome-free-5.9.0-web/css/all.min.css">
    <link rel="stylesheet" href="public/css/index.css">
</head>
<body>
 <?php   

//validando si ha iniciado sesion como ADMIN
$session_admin_value = "admin";
$session_admin = $_SESSION["admin"];
validatingsession($session_admin, $session_admin_value);
 
 // validando que no haya campo vacios al publicar articulos
$messagecamp = "empty";
emptycamp($_GET["empty"], $messagecamp);

// validando que se haya publicado el articulo exitosamente
$articlevalue = "go";
postarticles($_GET["go"], $articlevalue);

// validando que se haya subido con la imagen
$messagefailed = "imgfailed";
messageerrorimages($_GET["imgfailed"], $messagefailed);




print("<h1 class='titleBlogOfDay'>Blogs del dia</h1>");
?>
 <div class="containerAllBlogs">

    <?php 

     
// valor de session de admin
$session_value = "admin";

// funcion que muestra el panel de publicar articulos
getpanel($_SESSION["admin"], $session_value);

//mostrado de elementos
showarticles($conection);


?>
   <style type="text/css">
    .login {
        background-color: #222;
        color:#ddd;   
        padding: .5em;
        text-decoration: none;
        font-family: arial;
        border-radius: 3px;
        transition:.3s;
        border: 1px solid #222;
    }
    .login a{
        border:0;
    }
    .login:hover{
        transform-origin: bottom;
        border-color:#ddd;
        background-color: #333;
        transition:.3s;
        transform: translateX(3px);
    }

    .admin{
        background-color: blue;
        color: white;
        font-weight: 600;
        padding: .3em;
        font-family: arial;
        border-radius: 3px;
    }
    .goOut{
        padding: .2em 1em;
        background-color: #222;
    }
    .goOut a{
        color: white;
    }

   </style>  
 </div>
<!-- <script src="public/js/validation.js"></script> -->
</body>
</html>


