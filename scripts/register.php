<?php
session_start();
$_SESSION['errors']=[];
require_once("../db_connect.php");


if(!$_POST){
    header("Location: ../views/register.php");
    echo "test1";
}

if(!(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email'])  && isset($_POST['password']) && isset($_POST['confirm']))){
    echo "Something went wrong, please contact system admin";
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm'];

if (($fname=="") || ($lname=="") || ($email=="") || ($password=="") || ($confirmPassword=="")) {
    array_push($_SESSION['errors'], "Please fill all fields!");          
} 
   
if($password!==$confirmPassword){
array_push($_SESSION['errors'], "Passwords do not match");
}

if(!empty($_SESSION['reg_errors'])){
    header("Location: ../views/register.php");
    die;
}

if($password===$confirmPassword){
    $password=password_hash($password, PASSWORD_BCRYPT);
}

try{
    $sql= "INSERT INTO users (first_name, last_name, email, password) VALUES ('$fname', '$lname', '$email', '$password')";
    $query=$conn->prepare($sql);
    $query->execute();
    header("Location: ../index.php");
}catch(PDOException $e){
    echo "failed " .$e->getMessage();
}