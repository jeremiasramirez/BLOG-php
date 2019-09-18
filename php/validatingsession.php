<?php 

session_start();

//message session init with admin
function session_init(){
	echo "<p class=admin>Sesion iniciada como administrador <span class='fas fa-user'></span></p>";
}
 
function panelmanager(){
	echo "<article><h3  class=btn--rm>Panel de control de administrador</h3></article>
	<div class=panel> 

			<li class=''><a class=link  href=#>Agregar admin</a></li>	
			<li class=''><a class=link  href=#>Quitar admin</a></li>	
			<li class=''><a class=link  href=#>Administrar admin</a></li>	
			<li class=''><a class=link  href=#>Buscar articulos</a></li>	
			<li class=''><a class=link href=#>Eliminar todos los articulos</a></li>	
	 		<li class=''> <a href='php/exit/' class=link>Salir <span class='link fas fa-sign-out-alt'></span></a></li>
			 
		</div>";
}

function validatingsession($session_admin, $session_admin_value){
	if(!isset($session_admin) && $session_admin != $session_admin_value){
		echo "<header>
            	<nav>
                	<p class='login'><a href='php/login.php' class='login'>Iniciar sesion</a></p>
            	</nav>
            </header>";
	}
	else{
		session_init(); 
		panelmanager();
	}
}