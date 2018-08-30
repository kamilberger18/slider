<?php

//połączenie z bazą danych
require_once(__DIR__.'/config.php');


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $filename = strip_tags($_POST['name']);
    $filetype = $_FILES['file']['type'];
    $fileSize = $_FILES['file']['size']; 
    $fileBin = fopen($_FILES['file']['tmp_name'], 'rb');


try {
    //zapisanie rekordu
    $con->beginTransaction(); 
    $stmt = $con->prepare("INSERT INTO `".$img_table."` (name, ext, img) VALUES (:name, :ext, :img)");
    $stmt->bindParam(':name', $filename);  
    $stmt->bindParam(':ext', $filetype);  
    $stmt->bindParam(':img', $fileBin, PDO::PARAM_LOB);

    $stmt->execute();  
    $con->commit(); 
    
    //ewentualne błędy
} catch (Exception $e) {
    $error = $e->getMessage();
    echo $error;
    die();
}
    //powrót do index.php
    header("Location: ../index.php");  
}
