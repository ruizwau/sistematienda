<?php
// Here change variables with your own settings



$conn = mysqli_connect("localhost", "root", "", "Empresa_BD");

echo mysqli_connect_error();

mysqli_set_charset( $conn, 'utf8');


if (isset($conn)) {
}

?>