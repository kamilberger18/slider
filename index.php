<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Slider</title>
        <meta charset="utf-8">
        <meta name="description" content="Projekt rekrutacyjny dla WeBoost polegający na stworzeniu slidera i formularza dodawania obrazków.">
        <meta name="author" content="Kamil Berger">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <script src="dist/bundle.js"></script>
        <link rel="stylesheet" href="dist/main.css">

    </head>

    <body>
    
    <div id="container">
    
    <div id="slider">
      <?php
        
        include './includes/slider.php';
        
        ?>  
         
    </div>
    
    
    
    <div id="form">
        <?php 
        include './includes/form.php';  
        require_once('./resources/save.php');
        ?>
    </div>
    
    
    
    <div id="list">
        <?php 
        include('./includes/list.php');  
        ?> 
        
    </div>
    
    </div>
    </body>
</html>
