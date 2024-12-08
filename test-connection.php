<?php

$current = dirname(__FILE__);
$data = file_get_contents($current . "/" . "server-config.json");
$config = json_decode($data, true);

$server = $config["server"];
$user = $config["user"];
$password = $config["password"];
$database = $config["database"];
$port = $config["port"];

$connection = new mysqli($server, $user, $password, $database, $port);
if ($connection->connect_errno) {
    echo "Error connecting";
    exit();
}
echo "Successfully connected!";
