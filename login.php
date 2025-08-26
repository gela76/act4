<?php

$conn = mysqli_connect("localhost", "root", "", "psits");

if (!$conn){
    die("Connection failed!");
}

$email= $_POST['email'];
$password= $_POST['password'];

$sql = "SELECT * FROM students WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)> 0){
    echo "success =)";
    exit();
} else {
    echo"Login failed!";
}

mysqli_close($conn);
?>