<?php

include 'connection.php';

$result = $conn->query('SELECT * FROM pages');
$data = $result->fetch_all(MYSQLI_ASSOC);

var_dump($data);