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
	<h1>Lista de administradores</h1>
</div>
 
<p class='home'><a href="/blogs">INICIO <span class='fas fa-home'></span></a></p>
<?php 
        
       $conection =mysqli_connect("localhost", "jere", "0847", "Blogs");
     
  
      	 	$statement = mysqli_query($conection,  "SELECT * FROM userRoot ORDER BY user_id desc"); 
               echo	"<table  style=';'>
        			<th > ID </th>
        			<th > USERNAME </th>
        			<th > PASSWORD </th> ";
        	while($user = mysqli_fetch_array($statement)){
        		 echo " 

        			 	<tr>
        			 		<td style='text-align:center'>$user[user_id]</td>
        			 		<td style='text-align:center'>$user[username]</td>
        			 		<td style='text-align:center'>$user[CODE_]</td>
        			 	</tr>

        		";
        	}
        echo " </table>"
   
  

?> 
 

 <style>
 	table{
 		padding:.4em;
 		border: none;
		width:800px

 	}
 	td{
 		width: 400px;
 		padding:1.3em;
 		color: white;
 		font-size: 16px;
 		border-bottom: 1px solid #aaa;
 		font-family: arial;
 	}
 	tr{

 		transition: .3s;
 		cursor: pointer;
 	}
 	tr:hover{
 		opacity: .3;
 		color: red;
 	}
 	th{
 		border-bottom: 1px solid #ddd;
 		color: orange;
 		font-family: sans-serif;

 	}
 	div h1{
		font-family: arial;
 		color: #ddd;
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
 </style>




<script src="/blogs/public/login.js"></script>
 
</body>
</html>

 