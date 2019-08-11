<?php

//get value pass from log-in.html
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');


$host = "localhost";
$dbusername = "root";
$dbpassword = "NorthHigh2015";
$dbname = "packagess";

$conn = new mysqli ($host,$dbusername,$dbpassword,$dbname);

//to prevent mysql injection
$email = stripcslashes($email);
$password = stripcslashes($password);
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);

mysqli_connect("localhost", "root", "NorthHigh2015", "packagess");
mysqli_select_db($conn,"login");

$result = mysqli_query($conn, "SELECT * FROM accounts WHERE email = '$email' AND password = '$password'") or die("Failed to query database " .mysql_error());

$row = mysqli_fetch_array($result);
if($row['email'] == $email && $row['password'] == $password){
    header('Location: customer.html');
} else {
    echo "Failed to login!";
}


?> 