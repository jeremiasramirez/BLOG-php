<?php 
session_start();

function emptycamp($emptycamp, $messagecamp){
	if(isset($emptycamp) && $messagecamp){
    	print("<p class='formEmpty' id=emptyCamp>No puede haber campos vacios</p>");
	}
}	
