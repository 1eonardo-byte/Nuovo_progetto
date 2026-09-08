<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

    $database_film=[
        ["titolo"=>"Terminator", "anno"=>"1984", "genere"=>"azione"],
    ["titolo"=>"Harry Potter", "anno"=>"2001", "genere"=>"Fantascienza"], 
    ["titolo"=>"Halloween", "anno"=>"1984", "genere"=>"horror"], 
    ["titolo"=>"Matrix", "anno"=>"1999", "genere"=>"Fantascienza"],
    ];
    
?>

<html>
    <h1>Database film</h1>
    <?php 
        foreach ($database_film as $film){
            echo $film["titolo"] . " - " . $film["anno"] . " - " . $film["genere"];
        }
    ?>
</html>