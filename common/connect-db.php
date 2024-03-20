<?php
$host = DB_HOST;
$port = DB_PORT;
$username = DB_USERNAME;
$password = DB_PASSWORD;
$dbname = DB_NAME;

try {
  $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  echo "Connected successfully";
} catch (PDOException $e) {
  debug("Connection failed: " . $e->getMessage());
}
