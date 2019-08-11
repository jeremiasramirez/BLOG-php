<?php 
session_start();

function getpanel($session, $sessionvalue){

	if((isset($session) && $session == $sessionvalue)){
		print("<div class=form__container id=form__container> 
                	<h1 class=titlecontainer>Publicar un articulo</h1>
                	<form action='php/validating.php' method=post class=form__publish id=form__publish enctype='multipart/form-data'>
                   
                	<input type='text'  placeholder='Titulo de mi articulo' name='title' class=title__article id=titleArticle>

                        <textarea name='text' class='textPublish' placeholder='Descripcion de mi articulo' id='textPublish' cols='30' rows='10'></textarea>
                            
                        <p class=containerPhoto>
                            <input type='file' name=photo id=photo class=photo >
                        </p>

                        <button class='button__publish' id=button__publish>Publicar articulo</button>
                </form>
            </div>");
	}

}



