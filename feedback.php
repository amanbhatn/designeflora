<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'feedback';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get data from form
$name = $_POST['username'];
$email = $_POST['email'];
$suggestion = $_POST['givefeedback'];

// Proper SQL query with variables
$sql = "INSERT INTO `test`(`username`, `email`, `suggestion`) VALUES ('$name', '$email', '$suggestion')";
$result = mysqli_query($conn, $sql);

// Redirect if successful
if ($result) {
    header("Location: index.html?success=1");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
