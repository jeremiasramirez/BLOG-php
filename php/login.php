<?php 
session_start();
$_SESSION["admin"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../public/css/index.css">
	<link rel="stylesheet" type="text/css" href="../fontawesome-free-5.9.0-web/css/all.min.css">
</head>
<body style="background-color: #333">

<div class="responsivelogin">


	<form action="" method="POST" class="form">

		<p id="error_login" class="error_login"></p>
		<input type="password" name="code" placeholder="ADMIN CODE"  id="code" autocomplete="off">
		 
		<br>
		<button id="sendData">Ingresar como admin</button>
	 	 
	 		
	 	<p class='home'><a href="/blogs">INICIO <span class='fas fa-home'></span></a></p>
	 	
	</form>
 

	<!-- <script src="login.js"></script> -->

</div>


<?php 
       include "model/model.php";
        $statementUser = "SELECT CODE_ from userRoot";
        $queryUser = mysqli_query($conection, $statementUser);
        $conector = false;

        if(isset($_POST["code"]) && !empty($_POST["code"])){
        	$code = $_POST["code"];
	        while($user=mysqli_fetch_array($queryUser)){

	            if($code == $user["CODE_"]){
	                $conector = true;
	            }

	        }

        }

        if($conector === true){
        	$_SESSION["admin"] = "admin";
        	header("Location: /blogs");
        }
        
       
   
       
?> 

<style type="text/css">
.responsivelogin{
    display: flex;
    justify-content: center;
    align-items: center;
  	flex-direction: column;
  	text-align: center;
}
#code{
    padding: .5em 1em;
    font-size: 20px;
    text-align: center;
    width: 300px;
    border-radius: 3px;
    border:0;
}
#sendData{
	margin: 1em 0;
	padding: .5em 1em;
	font-size: 18px;
	font-family: arial;
	color: #ddd;
	background-color: #666;
	border: 0;
	border-radius: 4px;
	transition: .3s;
}
#sendData:hover {
	transition: .3s;
	cursor: pointer;
	opacity: .8;
	background-color: #222;
	transform: translateX(3px);
}
 
.home a{
	border-radius: 5px;
	background-color: #222;
	padding:1em 2em;
	color:#ddd;
	font-family:arial;
	text-decoration: none;
	font-family: arial;
	transition:.3s;
}
.home a:hover{
	opacity: .7;
	transition:.3s;
	background-color: black; 
}
.error{
	color: white;
	text-align: center;
	margin: .3em;
	border:none;
	border-radius: 3px;
	background-color: red;
	padding:1em .5em;

	font-family: arial;
	font-weight: 600;
	animation: hiddenelement 4s .3s linear;
	transition: .3s; 
	position: absolute;
	bottom:0;
	left:0;
}
@keyframes hiddenelement{
	to{
		transform: translateY(-200px);
		opacity: 0;
		transition: 1s;
	}
}


</style>




<script src="../public/login.js"></script>
 
</body>
</html>

 