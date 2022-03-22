<?php

require_once("../db_connect.php");
var_dump($_POST);
if($_POST){
    if((!empty($_POST['fname'])) && (!empty($_POST['lname'])) && (!empty($_POST['email'])) && (!empty($_POST['password'])) && (!empty($_POST['confirm']))){
        $password=$_POST['password'];
        $confirmPassword=$_POST['confirm'];
        if($password===$confirmPassword){
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $email=$_POST['email'];
        }else{
            // echo "password go not match";
            header("Location: ../views/register.php");
            die;
        }
    }else{
        // echo "Please fill all fields";
        header("Location: ../views/register.php");
        die;
    }
}else{
    header("Location: ../views/register.php");
    die;
}

if($password==$confirmPassword){
    $password=password_hash($password, PASSWORD_BCRYPT);
}else{
    header("Location: ../views/register.php");
    die;
}
try{
    $sql= "INSERT INTO users (first_name, last_name, email, password) VALUES ('$fname', '$lname', '$email', '$password')";
    $query=$conn->prepare($sql);
    $query->execute();
    header("Location: ../index.php");
}catch(PDOException $e){
    echo "failed " .$e->getMessage();
}