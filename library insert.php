<?php
// Establish a connection to the database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the form data
$title = $_POST["title"];
$author = $_POST["author"];
$isbn = $_POST["isbn"];

// Prepare the SQL statement to insert the data
$sql = "INSERT INTO books (title, author, isbn) VALUES ('$title', '$author', '$isbn')";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    echo "Book added successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
