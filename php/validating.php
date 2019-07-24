<?php 
session_start();

if($_POST["title"] ==""  || $_POST["text"] == "" || !ctype_space($_POST["title"])!=1 || !ctype_space($_POST["text"])!=1 )
{

    header("Location: ../index.php?empty=empty");

}
else
{
    echo "correcto";
}


 





?>