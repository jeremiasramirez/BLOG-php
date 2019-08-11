<?php

session_start();
function messageerrorimages($imagefailed, $messagefailed){
	if(isset($imagefailed) && $imagefailed==$messagefailed){
	    print("<p class='formEmpty' id=formEmpty>Articulo no publicado, se requiere al menos una imagen!</p>");
	}
}