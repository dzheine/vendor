<?php

require_once("../db_connect.php");

if(isset($_GET)){
    try{
       $userid= $_GET['userid'];

        $sql= "DELETE FROM users WHERE id='$userid'";
        $query= $conn->prepare($sql);
        $result= $query->execute();
// var_dump($result);
        header("Location: ../views/forum.php");
        
    }catch(PDOException $e){
        echo "Failed: ". $e->getMessage();
    }
} else{
    header("Location: ../views/forum.php");
}