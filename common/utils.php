<?php 
session_start();


$conn = new mysqli('localhost', 'root', '', 'usuario');

if($conn->connect_error) {
	echo 'Existió un error en la conexión ' . $conn->connect_error;
	exit;
}

function redirect($url) {
	header('Location: ' . $url);
	exit;
}


function getValidacion($conn) {
	$user_id = $_SESSION['user']['id'];

	$sql = "SELECT *
		FROM user
		WHERE id='$user_id'";

		$res = $conn->query($sql);

		if ($conn->error) {
			redirect('../index.php?error_message=Ocurrió un error: ' . $conn->error);
		}

		$user = [];
		if($res->num_rows > 0) {
			while ($row = $res->fetch_assoc()) {
				$user[] = $row;
			}
		}

		return $user;
}



function getAdmin($conn) {
	$user_id = $_SESSION['user']['id'];

	$sql = "SELECT *
		FROM adminsitrador";

		$res = $conn->query($sql);

		if ($conn->error) {
			redirect('../index.php?error_message=Ocurrió un error: ' . $conn->error);
		}

		$admin = [];
		if($res->num_rows > 0) {
			while ($row = $res->fetch_assoc()) {
				$admin[] = $row;
			}
		}

		return $admin;
}