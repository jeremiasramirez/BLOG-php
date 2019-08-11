<?php 
session_start();
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../public/css/index.css">
	<!-- <link rel="stylesheet" href="fontawesome-free-5.9.0-web/css/all.min.css"> -->
</head>
<body style="background-color: #333">

<div class="responsivelogin">
	<p class="title_login fas fa-user"></p>

	<form action="../index.php" method="POST" class="form">
	<?php
		// if(isset($_GET["thank"]) and $_GET["thank"] =="thankyou"){
		// 	print("<p class=visitweb id=messageText>Muchas gracias por visitarnos!</p>");
		// }
		// if(isset($_GET["registered"]) and $_GET["registered"] =="true"){
		// 	print("<p class=visitweb>Se ha registrado correctamente!</p>");
		// }	
	?>

		<p id="error_login" class="error_login"></p>
		<input type="password" name="code" placeholder="ADMIN CODE"  id="code" autocomplete="off">
		 
		<br>
		<button id="sendData">Ingresar como admin</button>
	 
	</form>
 

	<!-- <script src="login.js"></script> -->

</div>


 

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



</style>







<script src="validator.js"></script>
 
</body>
</html>

 