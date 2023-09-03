<?php
require_once '../database/db_connection.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$BD = $_POST['BD'];
$gender = $_POST['gender'];
$address = $_POST['address'];

$sql = "INSERT INTO
        users
            (username,password,email,phone,BD,gender,address)
        VALUES
            ('$username','$password','$email','$phone','$BD','$gender','$address')
        ";

if (mysqli_query($conn, $sql)) {
    header("Location: ../admin/userShow.php");
   // echo "New record creted successfully.";
} else {
    echo "Error: " . $sql . '<br>' . mysqli_error($conn);
}
mysqli_close($conn);