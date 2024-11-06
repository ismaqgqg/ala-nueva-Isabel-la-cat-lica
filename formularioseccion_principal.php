<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Cambia si tienes una configuración diferente
$password = ""; // Si no has configurado una contraseña, déjalo vacío
$dbname = "formulario_principal";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Comprobar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario y evitar inyección SQL
    $nombre = $conn->real_escape_string($_POST['nombre1016']);
    $email = $conn->real_escape_string($_POST['email1017']);
    $telefono = $conn->real_escape_string($_POST['telefono1018']);
    $carrera = $conn->real_escape_string($_POST['carrera']);

    // Insertar datos en la tabla
    $sql = "INSERT INTO formulario_cursos (nombre, email, telefono, carrera) VALUES ('$nombre', '$email', '$telefono', '$carrera')";

    if ($conn->query($sql) === TRUE) {
        echo "¡Formulario enviado exitosamente!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>


