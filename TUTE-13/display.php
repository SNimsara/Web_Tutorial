<?php

$host = 'localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'db-university';
$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM students";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>Students Details</h2>";
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["sid"] . "</td>";
        echo "<td>" . $row["sname"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records found!";
}

mysqli_close($connection);
?>

