<?php 

session_start();

//message session init with admin
function session_init(){
	echo "<p class=admin>Sesion iniciada como administrador <span class='fas fa-user'></span></p>";
}

//message close session of admin
function session_out(){
	echo "<p class='goOut'> <a href='php/out.php'><span class='fas fa-sign-out-alt'></span></a></p>";
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
		session_out();   
	}
}