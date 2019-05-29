<?php
include('common/utils.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title> 
</head>
<body>
   <center>  <h1>Login</h1> </center>

    <form action="php/process_login.php" method="post">

    				<center>
    					<div>
							<label><i> <b> Usuario: </i> </b></label>
							<input type="text" name="username" required="required" placeholder="Ingrese su Nombre" >

						</div>
						<br> 

						<div>
							<label> <i> <b> Contraseña: </i> </b></label> 
							<input type="password" name="password" required="required" placeholder="Ingrese Contraseña">
						</div>
						
						<br>

						<button type="submit" class="btn btn-primary"> Ingresar! </button>

						 <a href="registration.php"> VOLVER...</a>
						</center>
						
    </form>
</body>
</html>

