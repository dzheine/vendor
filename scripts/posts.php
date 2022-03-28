<?php
session_start();
if(!isset($_SESSION['userid'])){
    header("Location: ../views/forum.php");
}

include("../header_forum.php");
require_once("../db_connect.php");

if($_POST){
    $userid=$_SESSION['userid'];
    $message=$_POST['post'];
}
try{
    $sql = "INSERT INTO posts (user_id, text) VALUES ('$userid', '$message')";
    $query = $conn->prepare($sql);
    $query->execute();
    header("Location: ../views/forum.php?userid=$userid");
} catch(PDOException $e){
    echo "Insert failed: ". $e->getMessage();
}
