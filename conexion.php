<?php

class usuarioServicio {

// Datos de conexión a la base de datos

public $servername = "localhost:3307";
public $username = "root";
public $password = "";
public $dbname = "restaurante";


public function validar_login($usuario) {
    $result = new stdClass();
    $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $selectQuery = "SELECT p.nombres, p.apellidos, p.email, p.telefono, u.tipoUsuario ".
        "FROM usuario u ".
        "INNER JOIN persona p ON p.idusuario = u.idusuario ".
        "WHERE u.usuario = '".$usuario->usuario."' and password = '".$usuario->password."'";
    $usuarios = $conn->query($selectQuery);
    if ($usuarios->num_rows > 0) {// Output data from each row
        $result->data = $usuarios->fetch_object();  
        $result->success = true; 
    } else {
        $result->success = false;
    }
    $conn->close();
    return $result;
}

public function validar_reserva($reservaData) {
    $result = new stdClass();
    $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Recuperar los valores de la reserva
    $name = $reservaData['name'];
    $email = $reservaData['email'];
    $datetime = $reservaData['datetime'];
    $select1 = $reservaData['select1'];
    $options1 = $reservaData['options1'];
    $options2 = $reservaData['options2'];
    $options3 = $reservaData['options3'];
    $message = $reservaData['message'];

    // Preparar la consulta para insertar en la tabla de reservas
    $insertQuery = "INSERT INTO reservas (name, email, datetime, select1, options1, options2, options3, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("sssiiiss", $name, $email, $datetime, $select1, $options1, $options2, $options3, $message);

    // Ejecutar la consulta preparada
    if ($stmt->execute()) {
        $result->success = true;
        $result->message = "Reserva realizada con éxito.";
    } else {
        $result->success = false;
        $result->message = "Error al realizar la reserva: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
    return $result;
}

}
?>

