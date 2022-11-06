<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully.<br>";

// // Create database
// $sql = "CREATE DATABASE test1";
// if ($conn->query($sql) === TRUE) {
//   echo "Baza je kreirana";
// } else {
//   echo "Greska pri preiranju baze: " . $conn->error;
// }

// sql to create table
// $sql = "CREATE TABLE MyGuests (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";
    
//     if ($conn->query($sql) === TRUE) {
//       echo "Table MyGuests created successfully";
//     } else {
//       echo "Error creating table: " . $conn->error;
//     }
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Milosav', 'Zivkovic', 'milosavzivkovic@gmail.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
$conn->close();
?>