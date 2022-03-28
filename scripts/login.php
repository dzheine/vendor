<?php

require_once("../db_connect.php");

if($_POST){
    $email=$_POST['email'];
    $password=$_POST['password'];
}

  //issitraukiam userius is DB
try{
    $sql="SELECT * from users WHERE email='$email'";
    $query= $conn->prepare($sql);
    $query->execute();
    $result=$query->fetch();
} catch(PDOException $e){
    echo "Selection failed: ". $e->getMessage();
}

//patikrinam ar yra toks email

if($result){
    session_start();
    $passwordHash = $result['password'];
    if(password_verify($password, $passwordHash)){
       
        $_SESSION['username']=$result['first_name'];
        $_SESSION['userid']=$result['id'];
       // var_dump($_SESSION['userid']);
       header("Location: ../views/forum.php");
    } else {
        echo "Password is incorrect";
    }
} else {
    echo "Email does not exist";
}
