<?php

//Połączenie z bazą danych
require(__DIR__.'/config.php');

//Zapytanie
$stmt = $con->query("SELECT id,name, ext, img FROM ".$img_table);



//Zwrócenie wierszy
try {
    while($row = $stmt->fetch()) {

        //tylko dla list.php
        if($list) {
            echo "<div id='".$row['id']."' class='wrapper'>";
            echo "<div class='photoName'>".$row['name']."</div>";
            echo "<div class='view'>";
        };

        //obrazy
        $img_str = base64_encode($row['img']);
        $img_row =  "<img id='".$row['id']."' src='data:".$row['ext'].";base64,".$img_str."' alt='".$row['name']."' />";
        echo $img_row;

        //tylko dla list.php
        if($list) {
            echo "</div>";
            echo "<div class='delete'><div class='delButton'>&#10007;</div></div>";
            echo "</div>";  
        }

    };

    $stmt->closeCursor();

    //zwrócenie ewentualnych błędów
} catch (Exception $e) {
    $error = $e->getMessage();
    echo $error;
    die();
}


?>
