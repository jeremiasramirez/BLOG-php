<?php
	$conection = null;
	function conected(){
		global $conection;
		 $conection = new mysqli("localhost", "jere","0847","Blogs");
		 if(mysqli_connect_errno($conection)){
		 	echo "error";
		 }
		 
	}
	
	conected();


?>