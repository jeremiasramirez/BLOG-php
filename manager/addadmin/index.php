<?php 
session_start();

if(!$_SESSION["admin"]){
	header("Location: /blogs/php/exit/");	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add admin</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/blogs/public/css/index.css">
	<link rel="stylesheet" type="text/css" href="/blogs/fontawesome-free-5.9.0-web/css/all.min.css">
</head>
<body style="background-color: #333">
 
<div class="containertitlepage">
	<h1>Agregar admin</h1>
</div>
	 	<p class='home'><a href="/blogs">INICIO <span class='fas fa-home'></span></a></p>
<div class="responsivelogin">


	<form action="" method="POST" class="form">

		<p id="error_login" class="error_login"></p>
		<input type="text" name="adduser" placeholder="USER CODE"  id="codeuser" autocomplete="off">
		<input type="password" name="addcode" placeholder="ADMIN CODE"  id="code" autocomplete="off">
		 
		<br>
		<button id="sendData">Agregar admin</button>
	 	 
	 		
	 	
	</form>
 

	<!-- <script src="login.js"></script> -->

</div>


<?php 
        
       $conection =mysqli_connect("localhost", "jere", "0847", "Blogs");
     
        $conector = false;
        $users = $_POST['adduser'];
        $code = $_POST['addcode'];
        if((isset($users) && !empty($users)) && (isset($code) && !empty($code))){
        	$conector = true;

        }
 
        if($conector == true){
      	 	$statement = mysqli_query($conection, "INSERT INTO userRoot (username, CODE_) VALUES ('$users', '$code')");
        	if($statement){
        		header("Location: /blogs/manager/alladmin/");
        	}
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
 	div h1{
		font-family: arial;
 		color: #ddd;
 	}

</style>




<script src="/blogs/public/login.js"></script>
 
</body>
</html>

 