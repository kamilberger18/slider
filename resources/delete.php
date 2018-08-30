<?php

//połącznie z bazą danych
require_once(__DIR__.'/config.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $id = $_POST['id'];
    //zapytanie
    $sql = "DELETE FROM ".$img_table." WHERE id='".$id."'";
    $del = $con->prepare($sql);


    try {
        $del->execute();
        $response = "Usunięto z bazy danych";
    } catch (PDOException $e) {
        $response = $e->getMessage();
        echo $error;
        die();
    }

}


header("Location: ../index.php"); 
