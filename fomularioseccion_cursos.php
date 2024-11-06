<?php
// Configuración de la conexión
$servername = "localhost";
$username = "root"; // Por defecto, el usuario de MySQL en XAMPP es 'root'
$password = ""; // Por defecto, la contraseña está vacía
$dbname = "curso_principall";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recibir los datos del formulario
$nombre = $_POST['nombre1016'];
$email = $_POST['email1017'];
$telefono = $_POST['telefono1018'];
$carrera = $_POST['carrera'];

// Insertar datos en la tabla
$sql = "INSERT INTO principal_curs (nombre, email, telefono, carrera) VALUES ('$nombre', '$email', '$telefono', '$carrera')";

if ($conn->query($sql) === TRUE) {
    echo "Registro guardado exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
