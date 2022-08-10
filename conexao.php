<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Universo";

$conn = mysqli_connect($servername, $username, $password);

/* CHECK CONNECTION */
if (mysqli_connect_errno()) {
    printf("<p style='color: red;'>Conexão falhou: %s\n</p>", mysqli_connect_error());
    exit();
} 
?>