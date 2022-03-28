<?php

require_once("../db_connect.php");

if($_POST){
    try{
        $userid=$_POST['userid'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];

        $sql= "UPDATE users SET first_name = '$fname', last_name = '$lname', email = '$email' WHERE id='$userid'";
        $query= $conn->prepare($sql);
        $result= $query->execute();
        // var_dump($result);
            header("Location: ../views/forum.php");
        
    }catch(PDOException $e){
        echo "Failed: ". $e->getMessage();
    }
} else {
    header("Location: ../views/forum.php");
}