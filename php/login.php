<?php 
session_start();
$_SESSION["admin"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="styles.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../public/css/index.css">
	<link rel="stylesheet" href="../fontawesome-free-5.9.0-web/css/all.min.css">
</head>
<body style="background-color: #333">

<div class="responsivelogin">
	<!-- <p class="title_login fas fa-user"></p> -->

	<form action="" method="POST" class="form">

		<p id="error_login" class="error_login"></p>
		<input type="password" name="code" placeholder="ADMIN CODE"  id="code" autocomplete="off">
		 
		<br>
		<button id="sendData">Ingresar como admin</button>
	 	<p class='home'><a href="../index.php">INICIO <span class='fas fa-home'></span></a></p>
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
        	header("Location: ../index.php?init=admin");
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
.home{
	padding: .5em;
	border-radius: 5px;
	background-color: #222
}
.home a{
	color:#ddd;
	font-family:arial;
	text-decoration: none;
	font-family: arial;
}


</style>







<script src="validator.js"></script>
 
</body>
</html>

 