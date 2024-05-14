<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "dipex";
$table = "store";
$conn = new mysqli($hostname, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$Pname = mysqli_real_escape_string($conn, $_POST['Pname']);
$Cname = mysqli_real_escape_string($conn, $_POST['Cname']);
$Email = mysqli_real_escape_string($conn, $_POST['Email']);
$Password = mysqli_real_escape_string($conn, $_POST['Password']);
$Cdisabilities = mysqli_real_escape_string($conn, $_POST['Cdisabilities']);

$complaintId = uniqid();
$sql = "INSERT INTO store (Pname, Cname, Email, Password,Cdisabilities) VALUES ('$Pname', '$Cname', '$Email', '$Password','$Cdisabilities')";

if ($conn->query($sql) === TRUE) 
{
    echo "Connection Successful";
}

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
