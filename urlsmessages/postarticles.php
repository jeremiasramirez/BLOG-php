<?php
session_start();


function postarticles($articlego, $articlevalue){
	if(isset($articlego) && $articlego==$articlevalue){
    	print("<p class='goForm' id=emptyCamp>Articulo publicado correctamente!</p>");
	}
}