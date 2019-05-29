<?php 
include('../common/utils.php');
$rol = getValidacion($conn);


if($_POST) {
	if (isset($_POST['producto']) && isset($_POST['precio']) && !empty($_POST['producto']) && !empty($_POST['precio'])) {


		$producto = $_POST['producto'];
		$precio = $_POST['precio'];
		
		foreach ($rol as $r) { 
						 $idcliente = $r['id'];
						} 


		$sql_insert = "INSERT INTO adminsitrador
		(Producto, Precio, Cliente)
		VALUES ('$producto','$precio','$idcliente')";

		echo $sql_insert;
		$conn->query($sql_insert);

		if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		} else {
			redirect('../admin.php');
		}
	} else {
		
		redirect('../admin.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../admin.php');
}