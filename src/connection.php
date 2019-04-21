<?php

mysqli_report(MYSQLI_REPORT_ERROR);

$conn = new mysqli('localhost', 'bcs', '123', 'php_son_admin');

/*if ($conn->connect_errno) {
    die('Falha de conexao ao MySQL: ('.$conn->connection_errno.') '.$conn->connection_error);
}

return $conn;*/