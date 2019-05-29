<?php
include('common/utils.php');
$admin = getAdmin($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title> 
</head>
<body>
   <center>  <h1>Login</h1> </center>

    <form action="php/ingreso_productos.php" method="post">

    				<center>
    					<div>
							<label><i> <b> Producto: </i> </b></label>
							<input type="text" name="producto" required="required" placeholder="Ingrese Producto" >

						</div>
						<br> 

						<div>
							<label> <i> <b> Precio: </i> </b></label> 
							<input type="numeric" name="precio" required="required" placeholder="Ingrese Precio">
						</div>
						
						<br>
						<button type="submit" class="btn btn-primary"> Registrar! </button>

						 <a href="index.php"> Salir...</a>
						</center>
		
		<br>				
<CENTER>

						<table BORDER>

		<thead>
			<tr>
				<th>Producto</th>
				<th>Precio</th>
				
			</tr>
		</thead>

		<tbody>
			<?php foreach ($admin as $a) { ?>

				<tr>
					<div align="right">
					<td><?php echo $a['Producto'] ?></td>
					<td><?php echo $a['Precio'] ?></td>
					
					</div>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<br>

	<?php echo "Lista de Productos:" ?>
	</CENTER>

    </form>






</body>
</html>