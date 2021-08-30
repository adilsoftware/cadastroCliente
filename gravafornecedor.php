<?php

$conn  = new mysqli("fdb30.awardspace.net", "3639130_adilsoftware", "ad81guilherme", "3639130_adilsoftware");

if ($conn->connect_error) {
	echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO  tbfornecedor (fornecedor, tipo, site, fone, email) VALUES (?, ?, ?, ?, ?)");

$stmt->bind_param("sssss", $fornecedor, $tipo, $site, $fone, $email);

$nome = $_GET["fornecedor"];
$endereco = $_GET["tipo"];
$email = $_GET["site"];
$email = $_GET["fone"];
$email = $_GET["email"];

$stmt->execute();

header("location:fornecedorsalvo.html")

?>