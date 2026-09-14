<?php
$host = "localhost";
$utente = "root";
$password = "";
$nome_db = "archivio_film";

$conn = mysqli_connect($host, $utente, $password, $nome_db);
if (!$conn){
    die("Connessione al database fallita: " . mysqli_connect_error());
}
//per evitare problemi con lettere accentate e caratteri speciali.
mysqli_set_charset($conn, "utf8mb4");

?>