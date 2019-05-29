

<!DOCTYPE html>
<html>
<head>
	<title>Examen1</title>
	<center><h1>Registrar Usuario</h1> </center>
	
</head>
<body>

<form action="php/process_registration.php" method="post">
	

						<center>
						<div>
							<label><i> <b> Nombre: </i> </b></label>
							<input type="text" name="name" required="required" placeholder="Ingrese su Nombre" >

						</div>
						<br> 
						<div>
							<label>ROL</label>
							<select name="type" required="required">
								<option value="">Seleccione...</option>
								<option value="Administrador">Administrador</option>
								<option value="Cliente">Cliente</option>
								
							</select>
						</div>
						<br> 
						<div>
							<label><i> <b> Nombre Usuario: </i> </b></label>
							<input type="text" name="username" required="required" placeholder="Ingrese Nombre Usuario" >

						</div>
						<br> 

						<div>
							<label> <i> <b> Clave: </i> </b></label> 
							<input type="password" name="password1" required="required" placeholder="Ingrese Contraseña">
						</div>
						
						<br> 

						<div>
							<label> <i> <b> Confirmar Clave: </i> </b></label> 
							<input type="password" name="password2" required="required" placeholder="Ingrese Contraseña">
						</div>
						<br>

						
						<button type="submit" class="btn btn-primary"> Ingresar! </button>

						
						
					    
					
					    
					    
					    </center>
	
</form>


</body>
</html>