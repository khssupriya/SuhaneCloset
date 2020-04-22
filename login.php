<!DOCTYPE html>
<html>
<body>

<?php

//if(isset($POST['submit'])){

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

$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM users;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
	$flag = 0;
	while($row = mysqli_fetch_assoc($result)){
		if(($row['email'] == $email or $row['phone'] == $email) and $row['Pass'] == $pass){
			$flag = 1;
			break;
		}
	}
	if($flag == 1){
		session_start();
		$_SESSION['userid'] = $row['uid'];
		header("location:index.php?login=success");
		exit();
	}
	else{
		header("location:account.php?error=incorrectpassword&email=".$email);
		exit();
	}

}
else{
	header("location:account.php?error=incorrectemail");
    exit();
}

mysqli_close($conn);
//}
?>

</body>
</html>