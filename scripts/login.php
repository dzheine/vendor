<?php
session_start();
$_SESSION['login_errors']=[];
require_once("../db_connect.php");

try{
    $sql="SELECT * from users ";
    $query= $conn->prepare($sql);
    $query->execute();
    $users=$query->fetchALL();
} catch(PDOException $e){
    echo "Selection failed: ". $e->getMessage();
}
// var_dump($users);
if(!$_POST){
    header("Location: ../index.php");
}

if(!isset($_POST['email']) && !isset($_POST['password'])){
    echo "Something went wrong, please contact you admin!";
}
    $email=$_POST['email'];
    $password=$_POST['password'];

if($email==""){
    array_push($_SESSION['login_errors'], "Please enter your email");
}

if($password==""){
    array_push($_SESSION['login_errors'], "Please enter password");
}

$email_exists = 0;
foreach ($users as $user){
   if(array_search($email, $user)){
       $email_exists +=1;
   }
}

if($email_exists===0){
    array_push($_SESSION['login_errors'], "Email does not exist");
}



foreach ($users as $user){
    if($user['email']==$email){
        if(password_verify($password, $user['password'])){
            $_SESSION['username'] = $user['first_name'];
            $_SESSION['userid'] = $user['id'];
            header("Location: ../views/forum.php");
            die;
        } else {
            $_SESSION['login_count'] =+ 1;
            if($_SESSION['login_count'] === 3) {
                array_push($_SESSION['login_errors'], "Login locked");
            } else {
                array_push($_SESSION['login_errors'], "Please check your password");
            }
            
        }

    }
}


if(!empty($_SESSION['login_errors'])){
    header("Location: ../index.php");
    die;
}


