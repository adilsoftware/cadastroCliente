<?php

$conn  = new mysqli("localhost", "root", "", "bdteste");

if ($conn->connect_error) {
	echo "Error: " . $conn->connect_error;
}


?>