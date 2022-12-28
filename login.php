<?php


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) {

    die("No hay conexion: " . mysqli_connect_error());

}

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];


$query = mysqli_query($conn, "SELECT * FROM login WHERE Usuario = '" . $nombre . "' and Contraseña = '" . $pass . "'");
$nr = mysqli_num_rows($query);

if ($nr == 1) {

    echo '<div class="error-message">Bienvenido: </div>';
    echo '<div style="color: white; font-size: 40px; text-align: center; margin-right: 120px;">' . $nombre . '</div>';
    ;
    include 'bot.html';
} else if ($nr == 0) {
    echo '<div class="error-message">Datos de inicio de sesión incorrectos. Por favor, intente de nuevo.</div>';
    echo '<p> </p> ';
    include 'bot.html';
}



?>