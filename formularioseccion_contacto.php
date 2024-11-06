<?php
// Configuración de la base de datos
$host = 'localhost'; // Cambia si es necesario
$dbname = 'formulario_contactos';
$username = 'root'; // Por defecto en XAMPP
$password = ''; // Por defecto en XAMPP

// Crear conexión
$conn = new mysqli($host, $username, $password, $dbname);

// Comprobar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Recoger datos del formulario
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$curso = $_POST['curso'];
$turno = $_POST['turno'];

// Consulta SQL para insertar datos
$sql = "INSERT INTO contactoss (nombre, edad, telefono, correo, direccion, curso, turno) 
        VALUES ('$nombre', $edad, '$telefono', '$correo', '$direccion', '$curso', '$turno')";

if ($conn->query($sql) === TRUE) {
    echo "Registro insertado con éxito.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
