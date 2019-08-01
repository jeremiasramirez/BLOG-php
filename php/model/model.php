<?php
	$conection = null;
	function conected(){
		global $conection;

		try{
			$conection =mysqli_connect("localhost", "jere", "0847", "Blogs");
			if(mysqli_connect_errno($conection)){
				throw new Exception("101");
			}

		}catch(Exception $e){
			echo "<p class=error_101>Error " . $e->getMessage() ."</p>" . PHP_EOL;
		}


	}
	conected();


?>
<style type="text/css">
	.error_101{

		color: white;
		background-color: rgba(100%, 0%, 0%, 95%) ;
		position:relative;
		width:100vw;
		top:0;
		text-align: center;
		font-family: arial;
		font-size: 28px;
		z-index: 100000;
		padding-top: 2em;
		padding-bottom: 2em
	}



</style>