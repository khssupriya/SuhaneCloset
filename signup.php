<!DOCTYPE html>
<html>
<body>

<?php

$servername = "fdb25.awardspace.net";
$username = "3408008_trail";
$password = "v?I^}J5[2/6/;-uR";
$dbname = "3408008_trail";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "INSERT INTO users (fname, lname, phone, email, pass) VALUES ('$fname', '$lname', '$phone', '$email', '$pass');";
$result = mysqli_query($conn, $sql);

header("location:index.php?signup=success");

mysqli_close($conn);
?>

</body>
</html>