<?php
require('dbconn.php');  

$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "my_new_blog";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS MyUsers (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30),
    email VARCHAR(50),
    userpassword VARCHAR(50)
    );

    INSERT INTO MyUsers (username, email, userpassword)
    VALUES (?, ?, ?);";

    $stmt = $conn->prepare($sql);
    // use exec() because no results are returned
    $stmt->bindparam($userOne->email, PDO::PARAM_ST);
    $conn->exec($stmt);
    echo "Table MyGuests created successfully" . $userOne->email;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

// $conn = null;
?>