<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "team game";

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

$teamName = $_POST['teamName'];
$teamLeaderName = $_POST['teamLeaderName'];
$teamMembersCount = $_POST['teamMembersCount'];
$Dept = $_POST['Dept'];
$Email = $_POST['Email']; 
$sportsName = $_POST['sportsName']; 

$sql = "INSERT INTO TeamRegistration (teamName, teamLeaderName, teamMembersCount, Dept, Email, sportsName)
VALUES ('$teamName', '$teamLeaderName', '$teamMembersCount', '$Dept', '$Email', '$sportsName')";


$result = mysqli_query($conn, $sql);

// Check for the table creation success
if($result){
    echo "The table was created successfully!<br>";
}
else{
    echo "The table was not created successfully because of this error --->" . mysqli_error($conn);
}
?>
