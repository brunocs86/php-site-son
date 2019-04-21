<?php

include 'connection.php';

$result = $conn->query('SELECT * FROM pages');
$result->fetch_all(MYSQLI_ASSOC);

var_dump($result);