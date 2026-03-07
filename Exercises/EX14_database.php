<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "school_db";

/* Connection */
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Server Connected Successfully <br>";

/* CREATE TABLE */
$sql = "CREATE TABLE students (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
class VARCHAR(10),
age INT(3)
)";

if (mysqli_query($conn, $sql)) {
    echo "Table created successfully <br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}


/* INSERT DATA */
$sql = "INSERT INTO students (name, class, age) VALUES
('Gayathri','10A',18),
('Preetha','10A',19),
('Dhanishka','10A',18),
('Arthi','10B',15),
('Gopisree','10B',18)";

if (mysqli_query($conn, $sql)) {
    echo "New record inserted successfully <br>";
} else {
    echo "Error: " . mysqli_error($conn) . "<br>";
}


/* UPDATE DATA */
$sql = "UPDATE students SET age=19 WHERE name='Arthi'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully <br>";
} else {
    echo "Error updating record: " . mysqli_error($conn) . "<br>";
}


/* DELETE DATA */
$sql = "DELETE FROM students WHERE name='Dhanishka'";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully <br>";
} else {
    echo "Error deleting record: " . mysqli_error($conn) . "<br>";
}

mysqli_close($conn);
?>