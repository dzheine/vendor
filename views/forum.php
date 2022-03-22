<?php
session_start();


if(isset($_SESSION['userid'])){
    require_once("../db_connect.php");
    header("Location: ../layout/header_forum.php");
}