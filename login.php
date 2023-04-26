<?php
$username = $_POST['username'];
$password = $_POST['password'];

$conn = mysqli_connect('localhost', 'root', '', 'test_db');

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) == 1) {
	echo "Welcome $username!";
} else {
	echo "Invalid username or password.";
}
?>

