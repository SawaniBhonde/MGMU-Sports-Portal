<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "individual game";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}


// Create a table in the db

$firstName = isset($_POST['firstName']) ? $_POST['firstName'] : "";
$lastName = isset($_POST['lastName']) ? $_POST['lastName'] : "";
$gender = isset($_POST['gender']) ? $_POST['gender'] : "";
$Dept = isset($_POST['Dept']) ? $_POST['Dept'] : "";
$Email = isset($_POST['Email']) ? $_POST['Email'] : "";
$sportName = isset($_POST['sportName']) ? $_POST['sportName'] : "";


$sql = "INSERT INTO `individual registration` (firstName, lastName, gender, Dept, Email, sportsName)
VALUES ('$firstName', '$lastName', '$gender', '$Dept', '$Email', '$sportName')";


$result = mysqli_query($conn, $sql);

// Check for the table creation success
if($result){
    echo "The table was created successfully!<br>";
}
else{
    echo "The table was not created successfully because of this error --->" . mysqli_error($conn);
}
?>
