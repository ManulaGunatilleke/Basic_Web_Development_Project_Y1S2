<?php

include("functions.php");

$id = random_no(20);
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$contactno = $_POST['contactno'];
$password = $_POST['password'];
$gender = $_POST['gender'];


$conn = new mysqli('localhost', 'root', '', 'useraccounts');
if($conn->connect_error){
die('connection failed: ' .$conn->connect_error);
}

else{
$stmt = $conn->prepare("insert into users(id,firstname,lastname,email,contactno,password,gender) values(?,?,?,?,?,?,?)"); 
$stmt->bind_param("isssiss", $id,$firstname,$lastname,$email,$contactno,$password,$gender);
$stmt->execute();
echo '<script language="javascript">';
echo 'alert("Registration Successfull")';
echo '</script>';
$stmt->close();

}

?>